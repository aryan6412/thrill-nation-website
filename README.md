# Thrill Nation Website

Welcome to the **Thrill Nation** website! This is a modern, responsive web application built with PHP and Vanilla CSS, featuring extensionless clean URLs, an optimized layout, and an interactive park map.

## Key Features

- **Interactive Park Map (`map.php`)**:
  - Drag-to-pan and pinch-to-zoom controls (works on desktop and mobile).
  - Floating controls for zoom, pan reset, and fullscreen toggling.
  - Responsive aspect-ratio lock to keep pins perfectly aligned on all screen sizes.
  - Interactive pins that highlight and open detailed descriptions.
  - Mobile-optimized sliding details sheet.
- **Clean Routing**:
  - Configured with Vercel rewrites (`vercel.json`) for clean, extensionless URLs (e.g., `/attractions` instead of `/attractions.php`).
  - Includes a local development router (`router.php`) for testing extensionless URLs locally.
- **Layout & Optimization**:
  - Global header and footer components consolidated to prevent duplication.
  - Upgraded mobile navigation toggles with robust JavaScript behavior.
  - Optimized image assets and logo layout.

## Local Development

To run the project locally with extensionless URL routing:

1. Open a terminal in the project directory.
2. Run the PHP built-in server with the router script:
   ```bash
   php -S localhost:8080 router.php
   ```
3. Open `http://localhost:8080` in your web browser.
