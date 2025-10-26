#!/usr/bin/env python3

import os
import re
import sys
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

def error(msg: str):
    print(f"{Colors.RED}✗ {msg}{Colors.NC}")

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
        error(f"Could not write {filepath.name}: {e}")
        return False

def extract_header_content(content: str):
    """Extract time and h1 from header, handling various formats"""
    
    # Pattern 1: Standard format with tabs/spaces
    pattern = r'<header\s+class=["\']post-header["\']>\s*(<time[^>]*>.*?</time>)\s*(<h1[^>]*>.*?</h1>)\s*</header>'
    match = re.search(pattern, content, re.DOTALL)
    if match:
        return match.group(1), match.group(2), match.group(0)
    
    # Pattern 2: Multiline with various spacing
    pattern = r'<header[^>]*class=["\']post-header["\'][^>]*>\s*\n\s*(<time[^>]*>.*?</time>)\s*\n\s*(<h1[^>]*>.*?</h1>)\s*\n\s*</header>'
    match = re.search(pattern, content, re.DOTALL)
    if match:
        return match.group(1), match.group(2), match.group(0)
    
    return None, None, None

def extract_section_intro(content: str):
    """Extract the opening <section id="intro"> tag"""
    pattern = r'(<section\s+id=["\']intro["\'][^>]*>)'
    match = re.search(pattern, content, re.DOTALL)
    if match:
        return match.group(1)
    return None

def fix_post(post_file: Path) -> bool:
    """Attempt to fix a single post"""
    
    content = read_file(post_file)
    
    if '<header class="post-header">' not in content and '<header class=\'post-header\'>' not in content:
        return False
    
    # Extract header content
    time_elem, h1_elem, header_full = extract_header_content(content)
    
    if not time_elem or not h1_elem:
        warning(f"{post_file.name}: Could not extract header elements")
        return False
    
    # Extract section intro tag
    section_tag = extract_section_intro(content)
    
    if not section_tag:
        warning(f"{post_file.name}: Could not find <section id=\"intro\">")
        return False
    
    # Build replacement: remove header, insert elements inside section
    fixed_content = content.replace(
        header_full + '\n' + section_tag,
        section_tag + '\n        ' + time_elem + '\n        ' + h1_elem
    )
    
    # Fallback if above didn't work (different newline pattern)
    if fixed_content == content:
        fixed_content = content.replace(
            header_full + section_tag,
            section_tag + '\n        ' + time_elem + '\n        ' + h1_elem
        )
    
    # Another fallback for different spacing
    if fixed_content == content:
        fixed_content = re.sub(
            re.escape(header_full) + r'\s*' + re.escape(section_tag),
            section_tag + '\n        ' + time_elem + '\n        ' + h1_elem,
            content
        )
    
    if fixed_content == content:
        return False
    
    # Write the fixed content
    if write_file(post_file, fixed_content):
        return True
    
    return False

def main():
    project_root = Path('.')
    blog_posts_dir = project_root / 'blog' / 'posts'
    
    print(f"\n{Colors.MAGENTA}═════════════════════════════════════════════════════{Colors.NC}")
    print(f"{Colors.MAGENTA}   Advanced Header Fix (Handles All Variations){Colors.NC}")
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
    failed_count = 0
    
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
            warning(f"  {post_file.name}: Manual fix needed")
            # Restore backup
            shutil.copy(backup_file, post_file)
            failed_count += 1
    
    print(f"\n{Colors.MAGENTA}═════════════════════════════════════════════════════{Colors.NC}")
    print(f"Fixed:     {Colors.GREEN}{fixed_count}{Colors.NC}")
    print(f"Failed:    {Colors.RED}{failed_count}{Colors.NC}")
    print(f"Total:     {len(posts_with_issues)}")
    print(f"{Colors.MAGENTA}═════════════════════════════════════════════════════{Colors.NC}\n")
    
    if failed_count > 0:
        print(f"{Colors.YELLOW}Posts that need manual fixes:{Colors.NC}")
        for post_file in posts_with_issues:
            content = read_file(post_file)
            if '<header class="post-header">' in content or '<header class=\'post-header\'>' in content:
                print(f"  • {post_file.name}")
        print()

if __name__ == '__main__':
    main()
