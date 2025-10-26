#!/usr/bin/env python3

import re
from pathlib import Path

class Colors:
    RED = '\033[0;31m'
    GREEN = '\033[0;32m'
    YELLOW = '\033[1;33m'
    BLUE = '\033[0;34m'
    MAGENTA = '\033[0;35m'
    NC = '\033[0m'

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
        print(f"{Colors.RED}✗ Could not write: {e}{Colors.NC}")
        return False

def main():
    blog_posts_dir = Path('blog/posts')
    blog_index = Path('blog/index.php')
    
    print(f"\n{Colors.MAGENTA}═════════════════════════════════════════════════════{Colors.NC}")
    print(f"{Colors.MAGENTA}   Fix Broken Blog Links{Colors.NC}")
    print(f"{Colors.MAGENTA}═════════════════════════════════════════════════════{Colors.NC}\n")
    
    # Get all actual PHP files (exclude template/contact files)
    exclude_files = {'index.php', 'template.php', 'template-fixed.php', 'contact-handler.php', 'pricing-modal.php', 'migrate-blog-system.sh'}
    actual_files = {f.name for f in blog_posts_dir.glob("*.php") if f.name not in exclude_files}
    
    print(f"{Colors.GREEN}Found {len(actual_files)} actual blog post files{Colors.NC}\n")
    
    # Read blog/index.php
    index_content = read_file(blog_index)
    original_content = index_content
    
    # Find all links and check if they match actual files
    link_pattern = r'href="https://a11yscan\.xyz/blog/posts/([^"]+)"'
    broken_links = {}
    fixed_links = {}
    
    for match in re.finditer(link_pattern, index_content):
        linked_file = match.group(1)
        
        if linked_file not in actual_files:
            # Try to find matching file
            # Remove .php
            basename = linked_file.replace('.php', '')
            
            # Look for similar names
            possible_matches = []
            for actual_file in actual_files:
                actual_basename = actual_file.replace('.php', '')
                
                # Exact match
                if actual_basename == basename:
                    possible_matches.append(actual_file)
                # Partial match (check if one contains the other)
                elif basename in actual_basename or actual_basename in basename:
                    possible_matches.append(actual_file)
            
            if possible_matches:
                # Use first match
                correct_file = possible_matches[0]
                broken_links[linked_file] = correct_file
                
                print(f"{Colors.YELLOW}✗ {linked_file}{Colors.NC}")
                print(f"  → {Colors.GREEN}{correct_file}{Colors.NC}\n")
                
                # Replace in content
                old_href = f'href="https://a11yscan.xyz/blog/posts/{linked_file}"'
                new_href = f'href="https://a11yscan.xyz/blog/posts/{correct_file}"'
                index_content = index_content.replace(old_href, new_href)
                fixed_links[linked_file] = correct_file
            else:
                print(f"{Colors.RED}✗ {linked_file}{Colors.NC}")
                print(f"  NO MATCH FOUND\n")
    
    if not broken_links:
        print(f"{Colors.GREEN}✓ All links are correct!{Colors.NC}\n")
        return
    
    # Write fixed content
    if index_content != original_content:
        if write_file(blog_index, index_content):
            print(f"\n{Colors.MAGENTA}═════════════════════════════════════════════════════{Colors.NC}")
            print(f"{Colors.GREEN}✓ Fixed {len(fixed_links)} broken links{Colors.NC}")
            print(f"{Colors.MAGENTA}═════════════════════════════════════════════════════{Colors.NC}\n")
            
            for old, new in fixed_links.items():
                print(f"  {old} → {new}")
            print()

if __name__ == '__main__':
    main()
