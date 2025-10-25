<?php
/**
 * Blog Post Generator
 * Automatically scans /blog/posts/ and generates blog listing
 */

class BlogGenerator {
    private $postsDir;
    private $posts = [];

    public function __construct($postsDir = null) {
        // Use absolute path based on this file's location
        if ($postsDir === null) {
            $postsDir = __DIR__ . '/../posts/';
        }
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
