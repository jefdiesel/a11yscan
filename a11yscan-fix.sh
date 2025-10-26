#!/bin/bash

RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
MAGENTA='\033[0;35m'
NC='\033[0m'

PROJECT_ROOT="${1:-.}"
BLOG_POSTS_DIR="$PROJECT_ROOT/blog/posts"
BLOG_INDEX="$PROJECT_ROOT/blog/index.php"

ISSUES_FOUND=0
ISSUES_FIXED=0
POSTS_CHECKED=0

print_header() {
    echo -e "\n${BLUE}═══════════════════════════════════════════════════════════${NC}"
    echo -e "${BLUE}$1${NC}"
    echo -e "${BLUE}═══════════════════════════════════════════════════════════${NC}\n"
}

success() {
    echo -e "${GREEN}✓ $1${NC}"
}

error() {
    echo -e "${RED}✗ $1${NC}"
    ((ISSUES_FOUND++))
}

warning() {
    echo -e "${YELLOW}⚠ $1${NC}"
}

info() {
    echo -e "${BLUE}ℹ $1${NC}"
}

validate_setup() {
    print_header "STEP 1: VALIDATING SETUP"
    
    if [ ! -d "$PROJECT_ROOT" ]; then
        error "Project root not found: $PROJECT_ROOT"
        exit 1
    fi
    success "Project root found: $PROJECT_ROOT"
    
    if [ ! -d "$BLOG_POSTS_DIR" ]; then
        error "blog/posts directory not found"
        exit 1
    fi
    success "blog/posts directory found"
    
    POST_COUNT=$(find "$BLOG_POSTS_DIR" -name "*.php" -type f 2>/dev/null | wc -l)
    info "Found $POST_COUNT blog post files"
    
    if [ "$POST_COUNT" -eq 0 ]; then
        exit 0
    fi
}

check_header_outside_section() {
    print_header "CHECK 1: HEADER OUTSIDE SECTION (Root Cause)"
    
    local found_issues=0
    
    for post in "$BLOG_POSTS_DIR"/*.php; do
        [ -f "$post" ] || continue
        ((POSTS_CHECKED++))
        
        if grep -q '<header class="post-header">' "$post"; then
            error "$(basename "$post"): Header outside section"
            ((found_issues++))
        fi
    done
    
    if [ $found_issues -eq 0 ]; then
        success "All posts have correct header positioning ✓"
    fi
}

check_section_ids() {
    print_header "CHECK 2: SECTION ID ATTRIBUTES"
    
    local found_issues=0
    
    for post in "$BLOG_POSTS_DIR"/*.php; do
        [ -f "$post" ] || continue
        
        local sections=$(grep -c '<section' "$post" 2>/dev/null || echo 0)
        local with_id=$(grep -c '<section id=' "$post" 2>/dev/null || echo 0)
        
        if [ "$sections" -gt "$with_id" ]; then
            warning "$(basename "$post"): $sections sections but only $with_id have ids"
            ((found_issues++))
        fi
    done
    
    if [ $found_issues -eq 0 ]; then
        success "All sections have ids ✓"
    fi
}

check_h2_headings() {
    print_header "CHECK 3: H2 HEADINGS IN SECTIONS"
    
    local found_issues=0
    
    for post in "$BLOG_POSTS_DIR"/*.php; do
        [ -f "$post" ] || continue
        
        local sections=$(grep -c '<section id=' "$post" 2>/dev/null || echo 0)
        local h2s=$(grep -c '<h2' "$post" 2>/dev/null || echo 0)
        
        if [ "$sections" -gt 0 ] && [ "$h2s" -lt "$sections" ]; then
            warning "$(basename "$post"): $sections sections but only $h2s h2 headings"
            ((found_issues++))
        fi
    done
    
    if [ $found_issues -eq 0 ]; then
        success "All sections have h2 headings ✓"
    fi
}

check_legal_disclaimer() {
    print_header "CHECK 4: LEGAL DISCLAIMER"
    
    local found_issues=0
    
    for post in "$BLOG_POSTS_DIR"/*.php; do
        [ -f "$post" ] || continue
        
        if ! grep -q "Legal Disclaimer" "$post"; then
            warning "$(basename "$post"): Missing legal disclaimer"
            ((found_issues++))
        fi
    done
    
    if [ $found_issues -eq 0 ]; then
        success "All posts have disclaimers ✓"
    fi
}

check_customized_cta() {
    print_header "CHECK 5: CUSTOMIZED CTA"
    
    local found_issues=0
    
    for post in "$BLOG_POSTS_DIR"/*.php; do
        [ -f "$post" ] || continue
        
        if ! grep -q 'class="highlight"' "$post"; then
            warning "$(basename "$post"): Missing highlight CTA"
            ((found_issues++))
        fi
        
        if grep -q 'Read More' "$post"; then
            warning "$(basename "$post"): Contains generic 'Read More'"
            ((found_issues++))
        fi
    done
    
    if [ $found_issues -eq 0 ]; then
        success "All posts have customized CTAs ✓"
    fi
}

check_blog_index_buttons() {
    print_header "CHECK 6: BLOG INDEX BUTTONS"
    
    if [ ! -f "$BLOG_INDEX" ]; then
        return
    fi
    
    local read_more=$(grep -c 'Read More' "$BLOG_INDEX" 2>/dev/null || echo 0)
    
    if [ "$read_more" -gt 0 ]; then
        warning "blog/index.php: $read_more 'Read More' buttons"
    else
        success "Blog index buttons use action text ✓"
    fi
}

check_absolute_urls() {
    print_header "CHECK 7: ABSOLUTE URLS"
    
    if [ ! -f "$BLOG_INDEX" ]; then
        return
    fi
    
    local relative=$(grep -c 'href="blog/posts/' "$BLOG_INDEX" 2>/dev/null || echo 0)
    
    if [ "$relative" -gt 0 ]; then
        warning "blog/index.php: $relative relative URLs"
    else
        success "All links use absolute URLs ✓"
    fi
}

fix_header_outside_section() {
    print_header "FIX: MOVING HEADERS"
    
    local fixed_count=0
    
    for post in "$BLOG_POSTS_DIR"/*.php; do
        [ -f "$post" ] || continue
        
        if ! grep -q '<header class="post-header">' "$post"; then
            continue
        fi
        
        info "Processing: $(basename "$post")"
        
        cp "$post" "${post}.backup"
        info "  Backup: $(basename "$post").backup"
        
        perl -i.tmp -0pe 's/<header\s+class="post-header">\s*(<time[^>]*>.*?<\/time>)\s*(<h1[^>]*>.*?<\/h1>)\s*<\/header>\s*(<section\s+id="intro"[^>]*>)/$3\n        $1\n        $2/s' "$post"
        
        if [ $? -eq 0 ]; then
            rm -f "${post}.tmp"
            success "  $(basename "$post"): Fixed"
            ((fixed_count++))
            ((ISSUES_FIXED++))
        else
            mv "${post}.backup" "$post"
            error "  $(basename "$post"): Fix failed"
        fi
    done
    
    if [ $fixed_count -eq 0 ]; then
        success "No posts needed repositioning"
    fi
}

print_summary() {
    print_header "SUMMARY"
    
    echo -e "Posts Checked:     ${MAGENTA}$POSTS_CHECKED${NC}"
    echo -e "Issues Found:      ${RED}$ISSUES_FOUND${NC}"
    echo -e "Issues Fixed:      ${GREEN}$ISSUES_FIXED${NC}\n"
    
    if [ $ISSUES_FOUND -eq 0 ]; then
        echo -e "${GREEN}✓ No issues detected${NC}\n"
    fi
}

main() {
    clear
    echo -e "${MAGENTA}"
    echo "╔════════════════════════════════════════════════════════════╗"
    echo "║          A11yscan Blog Post Diagnostic Tool                ║"
    echo "╚════════════════════════════════════════════════════════════╝"
    echo -e "${NC}"
    
    validate_setup
    
    check_header_outside_section
    check_section_ids
    check_h2_headings
    check_legal_disclaimer
    check_customized_cta
    check_blog_index_buttons
    check_absolute_urls
    
    print_summary
    
    if [ $ISSUES_FOUND -gt 0 ]; then
        echo -e "${YELLOW}Attempt automatic fixes? (y/n): ${NC}"
        read -r response
        if [[ "$response" =~ ^[Yy]$ ]]; then
            fix_header_outside_section
            print_summary
        fi
    fi
}

main "$@"
