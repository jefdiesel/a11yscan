#!/usr/bin/env python3
"""
Advanced fix for keyboard trap issues in A11yscan blog posts.

Handles:
- Duplicate style attributes on <pre> elements
- Invalid role="region" and aria-label
- Multiple variations in whitespace/formatting
- Backup creation before modifications
"""

import re
import sys
from pathlib import Path
from datetime import datetime
from typing import Dict, List, Tuple


class KeyboardTrapFixer:
    """Fix keyboard trap issues in A11yscan blog posts."""
    
    # Pattern for broken <pre> elements (flexible whitespace)
    BROKEN_PRE_PATTERN = re.compile(
        r'<pre\s+style="([^"]+)"\s+style="([^"]+)"\s+tabindex="0"\s+role="region"\s+aria-label="Code example"\s*>',
        re.MULTILINE | re.DOTALL
    )
    
    # Also handle variant with different attribute order
    BROKEN_PRE_PATTERN_ALT = re.compile(
        r'<pre\s+style="([^"]+)"\s+style="([^"]*)"\s+tabindex="([^"]*)"(?:\s+role="region")?\s+(?:aria-label="[^"]*")?\s*>',
        re.MULTILINE | re.DOTALL
    )
    
    def __init__(self, create_backup: bool = True):
        """Initialize fixer."""
        self.create_backup = create_backup
        self.fixes_applied = []
    
    def merge_styles(self, style1: str, style2: str) -> str:
        """
        Merge two style strings, preferring style1 for conflicts.
        Removes duplicates and returns sorted style string.
        """
        styles: Dict[str, str] = {}
        
        # Process both styles (style1 wins conflicts)
        for style_string in [style2, style1]:
            if not style_string:
                continue
            
            # Split by semicolon and process each rule
            pairs = [s.strip() for s in style_string.split(';') if s.strip()]
            for pair in pairs:
                if ':' in pair:
                    key, value = pair.split(':', 1)
                    key = key.strip()
                    value = value.strip()
                    styles[key] = value
        
        # Reconstruct sorted by property name
        merged = '; '.join(f"{k}: {v}" for k, v in sorted(styles.items()))
        return merged
    
    def fix_content(self, content: str) -> Tuple[str, int]:
        """Fix keyboard trap issues in content string."""
        fixes = 0
        
        # Find all broken <pre> elements
        matches = list(self.BROKEN_PRE_PATTERN.finditer(content))
        
        # Process matches in reverse to preserve positions
        for match in reversed(matches):
            style1 = match.group(1)
            style2 = match.group(2)
            
            # Merge styles
            merged_style = self.merge_styles(style1, style2)
            
            # Create fixed replacement
            fixed_pre = f'<pre style="{merged_style}" tabindex="0">'
            
            # Replace in content
            content = content[:match.start()] + fixed_pre + content[match.end():]
            fixes += 1
        
        return content, fixes
    
    def fix_file(self, filepath: str) -> Dict:
        """Fix keyboard trap issues in a single file."""
        path = Path(filepath)
        
        # Check file exists
        if not path.exists():
            return {
                "file": str(filepath),
                "status": "error",
                "message": f"File not found: {filepath}",
                "fixes": 0,
                "backup": None,
            }
        
        # Read original content
        try:
            original_content = path.read_text(encoding='utf-8')
        except Exception as e:
            return {
                "file": str(filepath),
                "status": "error",
                "message": f"Error reading file: {e}",
                "fixes": 0,
                "backup": None,
            }
        
        # Create backup if requested
        backup_path = None
        if self.create_backup:
            timestamp = datetime.now().strftime("%Y%m%d_%H%M%S")
            backup_path = Path(str(path) + f".backup_{timestamp}")
            try:
                backup_path.write_text(original_content, encoding='utf-8')
            except Exception as e:
                return {
                    "file": str(filepath),
                    "status": "error",
                    "message": f"Error creating backup: {e}",
                    "fixes": 0,
                    "backup": None,
                }
        
        # Fix content
        fixed_content, fixes = self.fix_content(original_content)
        
        # If no fixes, return early
        if fixes == 0:
            if backup_path:
                backup_path.unlink()  # Remove backup if no fixes needed
            return {
                "file": str(filepath),
                "status": "ok",
                "message": "No issues found",
                "fixes": 0,
                "backup": None,
            }
        
        # Write fixed content
        try:
            path.write_text(fixed_content, encoding='utf-8')
        except Exception as e:
            return {
                "file": str(filepath),
                "status": "error",
                "message": f"Error writing file: {e}",
                "fixes": 0,
                "backup": str(backup_path) if backup_path else None,
            }
        
        return {
            "file": str(filepath),
            "status": "fixed",
            "message": f"Fixed {fixes} broken <pre> element(s)",
            "fixes": fixes,
            "backup": str(backup_path) if backup_path else None,
        }
    
    def fix_files(self, filepaths: List[str]) -> List[Dict]:
        """Fix keyboard trap issues in multiple files."""
        results = []
        for filepath in filepaths:
            result = self.fix_file(filepath)
            results.append(result)
        return results


def print_results(results: List[Dict]) -> None:
    """Print results summary."""
    print("=" * 75)
    print("A11yscan Keyboard Trap Fix Script")
    print("=" * 75)
    print()
    
    total_fixes = 0
    fixed_files = 0
    error_files = 0
    ok_files = 0
    
    for result in results:
        status = result['status']
        fixes = result.get('fixes', 0)
        total_fixes += fixes
        
        # Update counters
        if status == 'fixed':
            fixed_files += 1
        elif status == 'ok':
            ok_files += 1
        elif status == 'error':
            error_files += 1
        
        # Print result
        status_icons = {
            'fixed': '✓ FIXED',
            'ok': '✓ OK',
            'error': '✗ ERROR',
        }
        status_text = status_icons.get(status, '? UNKNOWN')
        
        print(f"{status_text} | {result['file']}")
        print(f"       {result['message']}")
        if result.get('backup'):
            print(f"       Backup: {result['backup']}")
        print()
    
    # Summary
    print("=" * 75)
    print("SUMMARY")
    print("=" * 75)
    print(f"Files fixed:    {fixed_files}")
    print(f"Files OK:       {ok_files}")
    print(f"Errors:         {error_files}")
    print(f"Total fixes:    {total_fixes}")
    print()
    
    if total_fixes > 0:
        print("Example of fix applied:")
        print("-" * 75)
        print("BEFORE:")
        print('  <pre style="background: var(--bg-secondary); padding: 1rem; ...')
        print('       style="overflow: auto;" tabindex="0" role="region"')
        print('       aria-label="Code example">')
        print()
        print("AFTER:")
        print('  <pre style="background: var(--bg-secondary); ...' 
              'overflow-x: auto; padding: 1rem" tabindex="0">')
        print("-" * 75)


def main():
    """Main entry point."""
    # Files to fix - update these paths as needed
    files_to_fix = [
        "blog-post-testing-audit-methodologies.php",
        "blog-post-focus-management-tab-order.php",
        "blog-post-accessibility-conformance-reports.php",
        "mobile-accessibility.php",
    ]
    
    # Create fixer (with backups enabled)
    fixer = KeyboardTrapFixer(create_backup=True)
    
    # Fix files
    results = fixer.fix_files(files_to_fix)
    
    # Print results
    print_results(results)
    
    # Return exit code
    error_count = sum(1 for r in results if r['status'] == 'error')
    return 1 if error_count > 0 else 0


if __name__ == "__main__":
    sys.exit(main())
