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

LEGAL_DISCLAIMER = '''    <!-- LEGAL DISCLAIMER -->
    <section style="margin-top: 2rem; padding-top: 1.5rem; border-top: 2px solid var(--border);">
        <div style="background: var(--bg-tertiary); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--accent-primary);">
            <h3 style="margin-top: 0; font-size: 1.1rem;">Legal Disclaimer</h3>
            <p style="font-size: 0.95rem; margin-bottom: 0;"><strong>A11yscan is not a law firm and does not provide legal advice.</strong> We operate under best practices based on WCAG Guidelines, ADA requirements, and applicable jurisdictions. Courts don't always agree on terms and expectations for web accessibility, and legal standards can vary by jurisdiction. However, an accessible website works better for all users regardless of legal requirements. For specific legal guidance, consult with a qualified attorney specializing in accessibility law.</p>
        </div>
    </section>'''

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
        print(f"{Colors.RED}✗ Error writing: {e}{Colors.NC}")
        return False

def process_blog_post(content: str, filename: str) -> tuple:
    """Process blog post: remove old disclaimer, add new one at top"""
    
    # Only process blog posts
    if '<article class="blog-post">' not in content:
        return content, "skipped"
    
    # Remove old disclaimer if it exists anywhere
    old_disclaimer_patterns = [
        r'<!--\s*LEGAL DISCLAIMER\s*-->.*?</section>',
        r'<section style="margin-top: 3rem; padding-top: 2rem; border-top: 2px solid var\(--border\);">.*?</section>',
    ]
    
    cleaned_content = content
    for pattern in old_disclaimer_patterns:
        cleaned_content = re.sub(pattern, '', cleaned_content, flags=re.DOTALL)
    
    # Find first </section> after <article class="blog-post">
    article_start = cleaned_content.find('<article class="blog-post">')
    if article_start == -1:
        return content, "no_article"
    
    first_section_end = cleaned_content.find('</section>', article_start)
    if first_section_end == -1:
        return content, "no_section"
    
    insert_pos = first_section_end + len('</section>')
    
    # Check if already has disclaimer at correct location
    check_window = cleaned_content[insert_pos:insert_pos + 500]
    if 'Legal Disclaimer' in check_window and 'A11yscan is not a law firm' in check_window:
        return cleaned_content, "already_present"
    
    # Insert disclaimer right after first section
    new_content = cleaned_content[:insert_pos] + '\n\n' + LEGAL_DISCLAIMER + cleaned_content[insert_pos:]
    
    if new_content != content:
        return new_content, "added"
    else:
        return content, "unchanged"

def main():
    blog_posts_dir = Path('blog/posts')
    skill_file = Path('SKILL.md')
    
    print(f"\n{Colors.MAGENTA}═════════════════════════════════════════════════════{Colors.NC}")
    print(f"{Colors.MAGENTA}   Add Legal Disclaimers to ALL Blog Posts{Colors.NC}")
    print(f"{Colors.MAGENTA}═════════════════════════════════════════════════════{Colors.NC}\n")
    
    # Only process actual blog posts (exclude template/utility files)
    exclude_files = {'index.php', 'template.php', 'template-fixed.php', 'contact-handler.php', 'pricing-modal.php', 'migrate-blog-system.sh'}
    
    posts = sorted([
        f for f in blog_posts_dir.glob("*.php") 
        if f.name not in exclude_files
    ])
    
    print(f"{Colors.BLUE}Found {len(posts)} blog posts to process{Colors.NC}\n")
    
    stats = {
        'added': 0,
        'already_present': 0,
        'skipped': 0,
        'no_article': 0,
        'no_section': 0,
        'unchanged': 0
    }
    
    for post_file in posts:
        content = read_file(post_file)
        new_content, status = process_blog_post(content, post_file.name)
        stats[status] += 1
        
        if status == 'added':
            if write_file(post_file, new_content):
                print(f"{Colors.GREEN}✓ {post_file.name}: Disclaimer added at top{Colors.NC}")
            else:
                print(f"{Colors.RED}✗ {post_file.name}: Failed to write{Colors.NC}")
        elif status == 'already_present':
            print(f"{Colors.GREEN}✓ {post_file.name}: Disclaimer already present{Colors.NC}")
        elif status == 'skipped':
            print(f"{Colors.YELLOW}⚠ {post_file.name}: Not a blog post (skipped){Colors.NC}")
        else:
            print(f"{Colors.BLUE}ℹ {post_file.name}: {status}{Colors.NC}")
    
    # Update SKILL.md to reflect that disclaimer goes at TOP
    print(f"\n{Colors.MAGENTA}Updating SKILL.md...{Colors.NC}\n")
    
    skill_content = read_file(skill_file)
    
    # Find and replace the disclaimer requirement section
    old_text = """### Mandatory Blog Post Disclaimer

**Every blog post MUST include this disclaimer at the bottom, before the CTA:**"""
    
    new_text = """### Mandatory Blog Post Disclaimer

**Every blog post MUST include this disclaimer at the TOP, right after the first section (before main content):**"""
    
    if old_text in skill_content:
        skill_content = skill_content.replace(old_text, new_text)
        if write_file(skill_file, skill_content):
            print(f"{Colors.GREEN}✓ SKILL.md updated{Colors.NC}\n")
        else:
            print(f"{Colors.RED}✗ Failed to update SKILL.md{Colors.NC}\n")
    
    print(f"{Colors.MAGENTA}═════════════════════════════════════════════════════{Colors.NC}")
    print(f"Added:            {Colors.GREEN}{stats['added']}{Colors.NC}")
    print(f"Already present:  {Colors.GREEN}{stats['already_present']}{Colors.NC}")
    print(f"Total processed:  {len(posts)}")
    print(f"{Colors.MAGENTA}═════════════════════════════════════════════════════{Colors.NC}\n")

if __name__ == '__main__':
    main()
