#!/usr/bin/env python3

import os
import re
import sys
import shutil
from pathlib import Path
from typing import List, Dict

class Colors:
    RED = '\033[0;31m'
    GREEN = '\033[0;32m'
    YELLOW = '\033[1;33m'
    BLUE = '\033[0;34m'
    MAGENTA = '\033[0;35m'
    NC = '\033[0m'

class A11yscanDiagnostic:
    
    def __init__(self, project_root: str):
        self.project_root = Path(project_root)
        self.blog_posts_dir = self.project_root / 'blog' / 'posts'
        self.blog_index = self.project_root / 'blog' / 'index.php'
        self.issues = []
        self.posts_checked = 0
        self.issues_fixed = 0
        
    def print_header(self, title: str):
        print(f"\n{Colors.BLUE}{'═' * 60}{Colors.NC}")
        print(f"{Colors.BLUE}{title}{Colors.NC}")
        print(f"{Colors.BLUE}{'═' * 60}{Colors.NC}\n")
    
    def success(self, msg: str):
        print(f"{Colors.GREEN}✓ {msg}{Colors.NC}")
    
    def error(self, msg: str, post: str = ""):
        print(f"{Colors.RED}✗ {msg}{Colors.NC}")
        self.issues.append({'message': msg, 'file': post})
    
    def warning(self, msg: str):
        print(f"{Colors.YELLOW}⚠ {msg}{Colors.NC}")
    
    def info(self, msg: str):
        print(f"{Colors.BLUE}ℹ {msg}{Colors.NC}")
    
    def validate_setup(self):
        self.print_header("STEP 1: VALIDATING PROJECT SETUP")
        
        if not self.project_root.exists():
            self.error(f"Project root not found: {self.project_root}")
            sys.exit(1)
        self.success(f"Project root found: {self.project_root}")
        
        if not self.blog_posts_dir.exists():
            self.error(f"blog/posts directory not found")
            sys.exit(1)
        self.success(f"blog/posts directory found")
        
        posts = list(self.blog_posts_dir.glob("*.php"))
        self.info(f"Found {len(posts)} blog post files")
        
        if len(posts) == 0:
            sys.exit(0)
    
    def read_file(self, filepath: Path) -> str:
        try:
            return filepath.read_text(encoding='utf-8')
        except:
            return ""
    
    def check_header_outside_section(self):
        self.print_header("CHECK 1: HEADER OUTSIDE SECTION (Root Cause)")
        
        issues_found = 0
        for post_file in self.blog_posts_dir.glob("*.php"):
            self.posts_checked += 1
            content = self.read_file(post_file)
            
            if '<header class="post-header">' in content:
                self.error(f"{post_file.name}: Header outside section (CRITICAL)", post_file.name)
                issues_found += 1
        
        if issues_found == 0:
            self.success("All posts have correct header positioning ✓")
    
    def check_section_ids(self):
        self.print_header("CHECK 2: SECTION ID ATTRIBUTES")
        
        issues_found = 0
        for post_file in self.blog_posts_dir.glob("*.php"):
            content = self.read_file(post_file)
            
            sections = len(re.findall(r'<section[^>]*>', content))
            sections_with_id = len(re.findall(r'<section\s+id=["\']', content))
            
            if sections > 0 and sections_with_id < sections:
                self.warning(f"{post_file.name}: {sections} sections but only {sections_with_id} have ids")
                issues_found += 1
        
        if issues_found == 0:
            self.success("All sections have id attributes ✓")
    
    def check_h2_headings(self):
        self.print_header("CHECK 3: H2 HEADINGS IN SECTIONS")
        
        issues_found = 0
        for post_file in self.blog_posts_dir.glob("*.php"):
            content = self.read_file(post_file)
            
            sections = len(re.findall(r'<section\s+id=["\'][^"\']*["\']', content))
            h2s = len(re.findall(r'<h2[^>]*>', content))
            
            if sections > 0 and h2s < sections:
                self.warning(f"{post_file.name}: {sections} sections but only {h2s} h2 headings")
                issues_found += 1
        
        if issues_found == 0:
            self.success("All sections have h2 headings ✓")
    
    def check_legal_disclaimer(self):
        self.print_header("CHECK 4: LEGAL DISCLAIMER")
        
        issues_found = 0
        for post_file in self.blog_posts_dir.glob("*.php"):
            content = self.read_file(post_file)
            
            if "Legal Disclaimer" not in content:
                self.warning(f"{post_file.name}: Missing legal disclaimer")
                issues_found += 1
        
        if issues_found == 0:
            self.success("All posts have legal disclaimers ✓")
    
    def check_customized_cta(self):
        self.print_header("CHECK 5: CUSTOMIZED CTA")
        
        issues_found = 0
        for post_file in self.blog_posts_dir.glob("*.php"):
            content = self.read_file(post_file)
            
            has_highlight = 'class="highlight"' in content
            has_generic_cta = 'Read More' in content
            
            if not has_highlight:
                self.warning(f"{post_file.name}: Missing highlight CTA")
                issues_found += 1
            
            if has_generic_cta:
                self.warning(f"{post_file.name}: Contains generic 'Read More'")
                issues_found += 1
        
        if issues_found == 0:
            self.success("All posts have customized CTAs ✓")
    
    def check_blog_index_buttons(self):
        self.print_header("CHECK 6: BLOG INDEX BUTTONS")
        
        if not self.blog_index.exists():
            return
        
        content = self.read_file(self.blog_index)
        read_more_count = content.count('Read More')
        
        if read_more_count > 0:
            self.warning(f"blog/index.php: Found {read_more_count} 'Read More' buttons")
        else:
            self.success("Blog index buttons use action-specific text ✓")
    
    def check_absolute_urls(self):
        self.print_header("CHECK 7: ABSOLUTE URLS")
        
        if not self.blog_index.exists():
            return
        
        content = self.read_file(self.blog_index)
        relative_links = len(re.findall(r'href=["\']blog/posts/', content))
        
        if relative_links > 0:
            self.warning(f"blog/index.php: {relative_links} relative URLs")
        else:
            self.success("All links use absolute URLs ✓")
    
    def fix_header_outside_section(self):
        self.print_header("FIX: MOVING HEADERS INSIDE SECTIONS")
        
        fixed_count = 0
        for post_file in self.blog_posts_dir.glob("*.php"):
            content = self.read_file(post_file)
            
            if '<header class="post-header">' not in content:
                continue
            
            self.info(f"Processing: {post_file.name}")
            
            backup_file = Path(str(post_file) + ".backup")
            shutil.copy(post_file, backup_file)
            self.info(f"  Backup: {backup_file.name}")
            
            try:
                pattern = r'<header\s+class="post-header">\s*(<time[^>]*>.*?</time>)\s*(<h1[^>]*>.*?</h1>)\s*</header>\s*(<section\s+id="intro"[^>]*>)'
                replacement = r'\3\n        \1\n        \2'
                
                fixed_content = re.sub(pattern, replacement, content, flags=re.DOTALL)
                
                if fixed_content != content:
                    post_file.write_text(fixed_content, encoding='utf-8')
                    self.success(f"  {post_file.name}: Fixed")
                    fixed_count += 1
                    self.issues_fixed += 1
                else:
                    self.warning(f"  {post_file.name}: Pattern not matched")
                    
            except Exception as e:
                self.error(f"  {post_file.name}: {e}")
                shutil.copy(backup_file, post_file)
        
        if fixed_count == 0:
            self.success("No posts needed header repositioning")
    
    def print_summary(self):
        self.print_header("SUMMARY")
        
        print(f"Posts Checked:     {Colors.MAGENTA}{self.posts_checked}{Colors.NC}")
        print(f"Issues Found:      {Colors.RED}{len(self.issues)}{Colors.NC}")
        print(f"Issues Fixed:      {Colors.GREEN}{self.issues_fixed}{Colors.NC}\n")
        
        if len(self.issues) == 0:
            print(f"{Colors.GREEN}✓ No issues detected{Colors.NC}\n")
    
    def run(self, fix: bool = False):
        print(f"\n{Colors.MAGENTA}")
        print("╔════════════════════════════════════════════════════════════╗")
        print("║          A11yscan Blog Post Diagnostic Tool                ║")
        print("╚════════════════════════════════════════════════════════════╝")
        print(f"{Colors.NC}")
        
        self.validate_setup()
        
        self.check_header_outside_section()
        self.check_section_ids()
        self.check_h2_headings()
        self.check_legal_disclaimer()
        self.check_customized_cta()
        self.check_blog_index_buttons()
        self.check_absolute_urls()
        
        self.print_summary()
        
        if fix and len(self.issues) > 0:
            response = input(f"{Colors.YELLOW}Attempt automatic fixes? (y/n): {Colors.NC}").strip().lower()
            if response in ['y', 'yes']:
                self.fix_header_outside_section()
                self.print_summary()

def main():
    project_root = sys.argv[1] if len(sys.argv) > 1 else '.'
    fix_mode = '--fix' in sys.argv
    
    diagnostic = A11yscanDiagnostic(project_root)
    diagnostic.run(fix=fix_mode)

if __name__ == '__main__':
    main()
