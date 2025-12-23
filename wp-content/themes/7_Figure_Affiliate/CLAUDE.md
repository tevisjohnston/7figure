# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Overview

This is a custom WordPress theme for "7 Figure Affiliate" - an affiliate marketing site for Michael Cheney's products. The theme combines traditional PHP WordPress development with modern tooling (Tailwind CSS v4, TypeScript, Resend email API).

## Architecture

### Custom Post Types & Taxonomies

The theme registers a custom post type `affiliate_product` with rich meta fields:
- Core fields: affiliate link, JV page link, subtitle, price point
- Content arrays: key features, benefits, bonuses, testimonials
- All meta fields are managed through custom meta boxes in functions.php:206-513

Product functionality:
- Custom admin dashboard at 'Products' menu (functions.php:97-204)
- Taxonomy: `affiliate_product_category` for organizing products
- Template files: single-affiliate_product.php, page-products.php

### Template Structure

- `front-page.php`: Homepage with hero, about section, featured products, testimonials
- `single-affiliate_product.php`: Individual product pages displaying all meta fields
- `home.php`: Blog/posts listing
- `header.php`, `footer.php`: Standard WordPress template partials
- `index.php`: Fallback template

### Styling System

The theme uses dual CSS approach:
- `style.css`: Custom utility classes mimicking Tailwind (required WordPress theme stylesheet)
- Tailwind CSS v4 via `@tailwindcss/cli` (package.json:15)
- Output compiled to `assets/css/src/output.css` (enqueued in functions.php:5)

Color scheme: slate grays (#0f172a to #f8fafc) with amber accents (#f59e0b)

### Email Integration

TypeScript email script using Resend API:
- Location: `assets/email/index.ts`
- Configured for domain: success@7figure.affiliatemarketconnect.com
- Run with: `npm run send-email` (uses tsx runtime)
- Environment: Requires `.env` file with RESEND_API_KEY

## Development Commands

### Email Testing
```bash
npm run send-email    # Send test email via Resend API
npm start             # Alias for send-email
```

### Tailwind CSS
To compile:
```bash
  npx @tailwindcss/cli -i assets/css/styles.css -o assets/css/src/output.css
 ```
For watch mode during development, use:
```bash
  npx @tailwindcss/cli -i assets/css/styles.css -o assets/css/src/output.css --watch
```

Note: This theme doesn't use a build process for CSS - styles are loaded directly via style.css and the compiled Tailwind output.css

## Database Analysis

A custom database query tool exists at:
```
database-query.php
```

This file loads WordPress and provides:
- Database statistics and table overview
- Affiliate products listing with meta field status
- Custom SQL query interface (SELECT only, admin access required)
- Access requires `manage_options` capability (administrator)

## Key Files

- `functions.php`: All theme setup, CPT registration, meta boxes, admin dashboard
- `database-query.php`: Standalone database inspection tool (loads wp-load.php from parent directories)
- `assets/js/main.js`: Frontend JavaScript (currently minimal/empty)
- `.env`: Contains RESEND_API_KEY for email functionality (not in version control)

## WordPress Integration

Theme enqueues:
- Main stylesheet via `get_stylesheet_uri()` (style.css)
- Tailwind output: `/src/output.css` (functions.php:5)
- jQuery-dependent main.js

Theme supports:
- Post thumbnails (200x200 default)
- Title tag
- HTML5 markup
- Two nav menus: 'primary' and 'footer'
- Translation domain: '7-figure-affiliate'

## Custom Meta Fields

When working with affiliate products, access meta via:
```php
get_post_meta($post_id, '_affiliate_link', true);      // URL
get_post_meta($post_id, '_jv_page_link', true);        // URL
get_post_meta($post_id, '_product_subtitle', true);    // Text
get_post_meta($post_id, '_price_point', true);         // Text (e.g., "From $47")
get_post_meta($post_id, '_key_features', true);        // Array
get_post_meta($post_id, '_product_benefits', true);    // Array
get_post_meta($post_id, '_bonus_offers', true);        // Array
get_post_meta($post_id, '_testimonials', true);        // Array of ['name', 'text']
```

All meta saving is handled via `Theme_7_Figure_Affiliate_save_product_meta()` (functions.php:452-513) with proper nonce verification and capability checks.

## Security Notes

- All admin functions check `current_user_can('manage_options')`
- Nonce verification on meta box saves
- URLs sanitized with `esc_url_raw()`
- Text fields sanitized with `sanitize_text_field()`
- Testimonial text allows HTML via `wp_kses_post()`
- Database query tool restricted to SELECT queries only
