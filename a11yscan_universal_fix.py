#!/usr/bin/env python3

import re
import shutil
from pathlib import Path

class Colors:
    RED = '\033[0;31m'
    GREEN = '\033[0;32m'
    YELLOW = '\033[1;33m'
    BLUE = '\033[0;34m'
    MAGENTA = '\033[0;35m'
    NC = '\033[0m'

def success(msg: str):
    print(f"{Colors.GREEN}✓ {msg}{Colors.NC}")

def warning(msg: str):
    print(f"{Colors.YELLOW}⚠ {msg}{Colors.NC}")

def info(msg: str):
    print(f"{Colors.BLUE}ℹ {msg}{Colors.NC}")

def read_file(filepath: Path) -> str:
    try:
        return filepath.read_text(encoding='utf-8')
    except:
        return ""

def write_file(filepath: Path, content: str):
    try:
        filepath.write_text(content, encoding='utf-8')
        return True
    except Exception as e:
        print(f"{Colors.RED}✗ Could not write {filepath.name}: {e}{Colors.NC}")
        return False

def fix_post(post_file: Path) -> bool:
    """Fix header by moving it inside first section (ANY id)"""
    
    content = read_file(post_file)
    
    # Check if post has the problem
    if '<header class="post-header">' not in content and '<header class=\'post-header\'>' not in content:
        return False
    
    # Extract the entire header block (flexible whitespace)
    header_pattern = r'<header\s+class=["\']post-header["\'][^>]*>\s*(<time[^>]*>.*?</time>)\s*(<h1[^>]*>.*?</h1>)\s*</header>'
    header_match = re.search(header_pattern, content, re.DOTALL)
    
    if not header_match:
        return False
    
    time_elem = header_match.group(1)
    h1_elem = header_match.group(2)
    header_full = header_match.group(0)
    
    # Find FIRST <section> tag (any id)
    first_section_pattern = r'(<section\s+id=["\'][^"\']*["\'][^>]*>)'
    first_section_match = re.search(first_section_pattern, content)
    
    if not first_section_match:
        return False
    
    first_section_tag = first_section_match.group(1)
    
    # Replace: remove header + insert elements inside first section
    fixed_content = content.replace(
        header_full,
        ''  # Remove header
    )
    
    # Insert time and h1 inside first section (after opening tag)
    fixed_content = fixed_content.replace(
        first_section_tag,
        first_section_tag + '\n        ' + time_elem + '\n        ' + h1_elem
    )
    
    # Write fixed content
    return write_file(post_file, fixed_content)

def main():
    blog_posts_dir = Path('blog/posts')
    
    print(f"\n{Colors.MAGENTA}═════════════════════════════════════════════════════{Colors.NC}")
    print(f"{Colors.MAGENTA}   Universal Header Fix (ANY first section ID){Colors.NC}")
    print(f"{Colors.MAGENTA}═════════════════════════════════════════════════════{Colors.NC}\n")
    
    # Find all posts with header issues
    posts_with_issues = []
    for post in blog_posts_dir.glob("*.php"):
        content = read_file(post)
        if '<header class="post-header">' in content or '<header class=\'post-header\'>' in content:
            posts_with_issues.append(post)
    
    if not posts_with_issues:
        success("No posts with header issues found")
        return
    
    info(f"Found {len(posts_with_issues)} posts to fix\n")
    
    fixed_count = 0
    
    for post_file in posts_with_issues:
        info(f"Processing: {post_file.name}")
        
        # Create backup
        backup_file = Path(str(post_file) + ".backup")
        shutil.copy(post_file, backup_file)
        info(f"  Backup: {backup_file.name}")
        
        # Try to fix
        if fix_post(post_file):
            success(f"  {post_file.name}: Fixed")
            fixed_count += 1
        else:
            warning(f"  {post_file.name}: Fix failed")
            # Restore backup
            shutil.copy(backup_file, post_file)
    
    print(f"\n{Colors.MAGENTA}═════════════════════════════════════════════════════{Colors.NC}")
    print(f"Fixed:     {Colors.GREEN}{fixed_count}/{len(posts_with_issues)}{Colors.NC}")
    print(f"{Colors.MAGENTA}═════════════════════════════════════════════════════{Colors.NC}\n")

if __name__ == '__main__':
    main()
