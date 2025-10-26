#!/usr/bin/env python3

import re
from pathlib import Path

def process_file(filepath):
    """Add accessibility attributes to pre tags"""
    content = filepath.read_text(encoding='utf-8')
    original = content
    
    # Find all <pre> tags and add attributes if not already present
    # Pattern: <pre...> but not already having tabindex or role
    def add_attrs(match):
        tag = match.group(1)
        
        # Check if already has our attributes
        if 'tabindex' in tag and 'role' in tag:
            return match.group(0)
        
        # Build new tag with attributes
        if tag.endswith('>'):
            tag = tag[:-1]  # Remove closing >
        
        new_tag = f'{tag} style="overflow: auto;" tabindex="0" role="region" aria-label="Code example">'
        return f'<pre{new_tag}' if tag.startswith(' ') else f'<pre {new_tag}'
    
    # Replace <pre> tags
    pattern = r'<pre([^>]*)>'
    new_content = re.sub(pattern, add_attrs, content)
    
    if new_content != original:
        filepath.write_text(new_content, encoding='utf-8')
        return True
    return False

def main():
    blog_posts_dir = Path('blog/posts')
    
    print("\n Adding accessibility attributes to <pre> tags...\n")
    
    updated = 0
    for post_file in sorted(blog_posts_dir.glob("*.php")):
        if process_file(post_file):
            print(f"✓ {post_file.name}")
            updated += 1
    
    print(f"\nUpdated: {updated} files")

if __name__ == '__main__':
    main()
