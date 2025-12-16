# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

WordPress site for "7 Figure Affiliate" - an affiliate marketing site for Michael Cheney's products. Runs via Docker with nginx-proxy for SSL/reverse proxy.

## Architecture

```
/                           # WordPress root (Docker-managed)
├── docker-compose.yml      # MySQL 8.0 + WordPress containers
├── wp-content/
│   └── themes/
│       └── 7_Figure_Affiliate/  # Custom theme (main development area)
└── [WordPress core files]  # Managed by Docker, don't modify
```

**Custom theme contains detailed documentation:** `wp-content/themes/7_Figure_Affiliate/CLAUDE.md`

## Development Commands

### Docker Operations
```bash
# Start services (from project root)
docker-compose up -d

# View logs
docker-compose logs -f wordpress
docker-compose logs -f db_2

# Restart services
docker-compose restart wordpress
```

### Theme Development (from wp-content/themes/7_Figure_Affiliate/)
```bash
npm install                    # Install dependencies
npm run send-email             # Test Resend email integration

# Compile Tailwind CSS
npx @tailwindcss/cli build -o assets/css/src/output.css
```

## Environment

- **Domain:** 7figure.affiliatemarketconnect.com
- **MySQL:** Port 3302 (external), database `wp_db_7figure`
- **Network:** Uses external `affiliatemarketconnectcom_webproxy` network for nginx-proxy/letsencrypt

## Key Development Areas

All custom code lives in the theme directory. The theme includes:
- Custom post type `affiliate_product` with extensive meta fields
- Tailwind CSS v4 styling
- TypeScript email integration via Resend API
- Database query tool at `database-query.php`

See `wp-content/themes/7_Figure_Affiliate/CLAUDE.md` for detailed architecture, meta field references, and security notes.
