#!/bin/bash

# A11yscan Blog Automation Migration Script
# This script will transform your existing blog files into an automated blog system

echo "========================================="
echo "A11yscan Blog Automation Migration"
echo "========================================="
echo ""

# Check if we're in the right directory
if [ ! -f "blog.php" ]; then
    echo "Error: blog.php not found. Please run this script from your a11yscan directory."
    exit 1
fi

echo "✓ Found blog.php - we're in the right place"
echo ""

# Step 1: Create directory structure
echo "Step 1: Creating directory structure..."
mkdir -p blog/posts
mkdir -p blog/includes
echo "✓ Created blog/posts/ and blog/includes/"
echo ""

# Step 2: Create blog-generator.php
echo "Step 2: Creating blog-generator.php..."
cat > blog/includes/blog-generator.php << 'EOFGEN'
<?php
/**
 * Blog Post Generator
 * Automatically scans /blog/posts/ and generates blog listing
 */

class BlogGenerator {
    private $postsDir;
    private $posts = [];

    public function __construct($postsDir = '../posts/') {
        $this->postsDir = $postsDir;
    }

    /**
     * Scan posts directory and extract metadata
     */
    public function scanPosts() {
        $files = glob($this->postsDir . '*.php');

        foreach ($files as $file) {
            $metadata = $this->extractMetadata($file);
            if ($metadata) {
                $metadata['filename'] = basename($file);
                $metadata['url'] = 'posts/' . basename($file);
                $this->posts[] = $metadata;
            }
        }

        // Sort by date (newest first)
        usort($this->posts, function($a, $b) {
            return strtotime($b['date']) - strtotime($a['date']);
        });

        return $this->posts;
    }

    /**
     * Extract metadata from PHP doc comment
     */
    private function extractMetadata($file) {
        $content = file_get_contents($file);

        // Extract PHP doc comment
        preg_match('/\/\*\*(.*?)\*\//s', $content, $matches);
        if (!isset($matches[1])) {
            return null;
        }

        $docComment = $matches[1];
        $metadata = [];

        // Extract @title
        if (preg_match('/@title\s+(.+)$/m', $docComment, $m)) {
            $metadata['title'] = trim($m[1]);
        }

        // Extract @description
        if (preg_match('/@description\s+(.+)$/m', $docComment, $m)) {
            $metadata['description'] = trim($m[1]);
        }

        // Extract @date
        if (preg_match('/@date\s+(\d{4}-\d{2}-\d{2})$/m', $docComment, $m)) {
            $metadata['date'] = $m[1];
            $metadata['formatted_date'] = date('F j, Y', strtotime($m[1]));
            $metadata['short_date'] = date('M j, Y', strtotime($m[1]));
        }

        // Extract @category
        if (preg_match('/@category\s+(.+)$/m', $docComment, $m)) {
            $metadata['category'] = trim($m[1]);
        }

        // Extract @author
        if (preg_match('/@author\s+(.+)$/m', $docComment, $m)) {
            $metadata['author'] = trim($m[1]);
        }

        // Extract @featured
        if (preg_match('/@featured\s+(true|false)$/m', $docComment, $m)) {
            $metadata['featured'] = ($m[1] === 'true');
        }

        return $metadata;
    }

    /**
     * Group posts by category
     */
    public function groupByCategory() {
        $grouped = [];
        foreach ($this->posts as $post) {
            $category = $post['category'] ?? 'uncategorized';
            if (!isset($grouped[$category])) {
                $grouped[$category] = [];
            }
            $grouped[$category][] = $post;
        }
        return $grouped;
    }

    /**
     * Generate HTML for a blog card
     */
    public function generateCard($post) {
        $html = '<article class="card blog-card">';
        $html .= '<time datetime="' . htmlspecialchars($post['date']) . '" class="blog-date">';
        $html .= htmlspecialchars($post['short_date']) . '</time>';
        $html .= '<h2 style="font-size: 1.3rem; margin-top: 0.5rem;">';
        $html .= htmlspecialchars($post['title']) . '</h2>';
        $html .= '<p>' . htmlspecialchars($post['description']) . '</p>';
        $html .= '<a href="' . htmlspecialchars($post['url']) . '" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>';
        $html .= '</article>';
        return $html;
    }

    /**
     * Generate complete blog listing HTML
     */
    public function generateBlogHTML() {
        $this->scanPosts();
        $grouped = $this->groupByCategory();

        // Category display names
        $categoryNames = [
            'litigation' => 'Litigation & Legal Risk',
            'personas' => 'User Accessibility Personas',
            'fundamentals' => 'Fundamentals & Best Practices',
            'wcag' => 'WCAG Standards & Guidelines',
            'technical' => 'Technical Implementation',
            'uncategorized' => 'Latest Posts'
        ];

        $html = '';

        // Featured posts section (if any)
        $featured = array_filter($this->posts, function($post) {
            return isset($post['featured']) && $post['featured'] === true;
        });

        if (!empty($featured)) {
            $html .= '<section>';
            $html .= '<h2>Featured Posts</h2>';
            $html .= '<div class="grid">';
            foreach (array_slice($featured, 0, 3) as $post) {
                $html .= $this->generateCard($post);
            }
            $html .= '</div>';
            $html .= '</section>';
        }

        // Posts by category
        foreach ($grouped as $category => $posts) {
            $categoryName = $categoryNames[$category] ?? ucfirst($category);

            $html .= '<section>';
            $html .= '<h2>' . htmlspecialchars($categoryName) . '</h2>';
            $html .= '<div class="grid">';

            foreach ($posts as $post) {
                $html .= $this->generateCard($post);
            }

            $html .= '</div>';
            $html .= '</section>';
        }

        return $html;
    }
}
?>
EOFGEN

echo "✓ Created blog/includes/blog-generator.php"
echo ""

# Step 3: Create blog/index.php
echo "Step 3: Creating blog/index.php..."
cat > blog/index.php << 'EOFINDEX'
<?php
$pageTitle = 'Accessibility Blog - A11yscan';
$pageDescription = 'Expert insights on web accessibility, WCAG compliance, and inclusive design practices.';
$currentPage = 'blog';

// Include blog generator
require_once 'includes/blog-generator.php';

// Generate blog listing
$generator = new BlogGenerator();
$blogHTML = $generator->generateBlogHTML();

$pageContent = <<<HTML
<div class="hero">
    <h1>Accessibility Insights</h1>
    <p>Expert guidance on web accessibility, WCAG compliance, and inclusive design</p>
</div>

{$blogHTML}

<section style="margin-top: 3rem;">
    <div class="highlight">
        <h2 style="margin-top: 0;">Stay Updated</h2>
        <p>Get accessibility insights delivered to your inbox monthly.</p>
        <form style="display: flex; gap: 1rem; max-width: 500px; margin: 1.5rem auto 0;">
            <input type="email" placeholder="Your email" style="flex: 1; padding: 0.85rem; border: 2px solid var(--border); border-radius: 6px; font-size: 1rem;" required>
            <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
    </div>
</section>
HTML;

include '../template.php';
?>
EOFINDEX

echo "✓ Created blog/index.php"
echo ""

echo "Step 4: Moving and updating blog post files..."
echo "This will add metadata headers to your existing blog posts..."
echo ""

# Move and update each file
moved=0

for file in *.php; do
    # Skip special files
    if [[ "$file" == "blog.php" ]] || [[ "$file" == "index.php" ]] || [[ "$file" == "template.php" ]] || [[ "$file" == "contact-handler.php" ]] || [[ "$file" == "deploy.php" ]] || [[ "$file" == "pricing-modal.php" ]]; then
        continue
    fi
    
    # Check if it's a blog post file
    if [ -f "$file" ]; then
        # Determine category and metadata based on filename
        category="fundamentals"
        featured="false"
        date="2024-10-25"
        
        # Categorize based on filename patterns
        if [[ "$file" =~ (lawsuit|litigation|legal|settlement|ada-lawsuit|defense|risk-management|serial-filer|finding-legal|disability-rights|platform-liability) ]]; then
            category="litigation"
        elif [[ "$file" =~ (designing-for) ]]; then
            category="personas"
        elif [[ "$file" =~ (wcag) ]]; then
            category="wcag"
        elif [[ "$file" =~ (aria|div-soup|mobile) ]]; then
            category="technical"
        fi
        
        # Mark featured posts
        if [[ "$file" =~ (ada-lawsuits-2025|accessibility-overlays-fail|2024-lawsuit-trends) ]]; then
            featured="true"
        fi
        
        # Extract title from filename
        title=$(echo "$file" | sed 's/\.php$//' | sed 's/-/ /g' | sed 's/\b\(.\)/\u\1/g')
        description="Learn more about $title and web accessibility best practices."
        
        # Create new file with metadata header
        {
            echo "<?php"
            echo "/**"
            echo " * @title $title"
            echo " * @description $description"  
            echo " * @date $date"
            echo " * @category $category"
            echo " * @author A11yscan Team"
            echo " * @featured $featured"
            echo " */"
            echo ""
            tail -n +2 "$file"  # Skip first line (<?php) from original
        } > "blog/posts/$file"
        
        moved=$((moved + 1))
        echo "  ✓ Migrated: $file → blog/posts/$file"
    fi
done

echo ""
echo "✓ Moved and updated $moved blog post files"
echo ""

# Backup original blog.php
echo "Step 5: Backing up original blog.php..."
cp blog.php blog.php.backup
echo "✓ Created blog.php.backup"
echo ""

echo "========================================="
echo "Migration Complete!"
echo "========================================="
echo ""
echo "Summary:"
echo "  • Created blog/ directory structure"
echo "  • Moved $moved blog posts to blog/posts/"
echo "  • Added metadata to all posts"
echo "  • Created automated blog generator"
echo "  • Created new blog/index.php"
echo "  • Backed up original blog.php"
echo ""
echo "Next Steps:"
echo "  1. Visit blog/index.php to see your automated blog"
echo "  2. Review the migrated files in blog/posts/"
echo "  3. Adjust metadata in individual files if needed"
echo "  4. Commit changes to git"
echo ""
echo "To commit:"
echo "  git add blog/"
echo "  git commit -m 'Implement automated blog system'"
echo "  git push origin main"
echo ""
echo "Backup saved: blog.php.backup"
echo ""
echo "Happy blogging! 🚀"
