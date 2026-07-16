# EnterpriseCore Website Integration

A high-performance, dynamic enterprise software company CMS website built with PHP, SQLite, and Vanilla CSS. It incorporates professional modern aesthetics, dynamic content management, and zero-config local setup.

## Features
- **Hero Video Integration:** Muted autoplaying and looping HD hero video on the home page.
- **Dynamic Content Modules:**
  - **Services:** Loaded dynamically from the database.
  - **Insights (Blog):** Supports search input, sorting, and category filters.
  - **Careers:** Dynamically lists jobs, handles file uploads for applications, and pre-fills role selections.
- **Secure Lead Handling:** Multi-step quote requests with AJAX submissions and file upload attachments.
- **Clean URLs:** Optimized `.htaccess` rules for Apache and route rewriting for Vercel.
- **GitHub Pages Fallback:** Includes fully connected static HTML fallback pages (`index.html`, `services.html`, etc.) for seamless static preview on GitHub Pages.

---

## Local Setup Instructions (Zero Config with SQLite)

This project has been pre-configured with a local SQLite database (`database/enterprise.db`) and pre-seeded. No separate MySQL server installation is required.

### 1. Requirements
Ensure you have PHP 8.2 or newer installed on your machine.

### 2. Start the Development Server
Run the built-in PHP web server from the project directory:
```bash
php -S localhost:80
```
*(If port 80 is occupied, you can run on any other port e.g. `php -S localhost:8000`).*

### 3. Open the Site
Visit [http://localhost/](http://localhost/) (or `http://localhost:8000/`) in your browser to access the website.

---

## Vercel Deployment

This repository is optimized for Vercel deployment out-of-the-box using the community-maintained `vercel-php@0.9.0` runtime.

1. Import this repository in your **Vercel** dashboard.
2. Click **Deploy**. Vercel will automatically build the serverless routing using `api/index.php` and deploy the dynamic PHP pages.

---

## Directory Structure
- `/api` - Backend REST endpoint handlers (`submit-quote.php`, `submit-application.php`) and Vercel routing entrypoint (`index.php`).
- `/assets` - CSS templates, fonts, images, and videos (including `hero_video.mp4`).
- `/config` - Database connections wrapper (`db.php`).
- `/database` - SQLite DB (`enterprise.db`), SQLite schema (`setup_sqlite.sql`), and MySQL schema (`setup.sql`).
- `/uploads` - Target folders for RFP/CV uploads.
- `index.php`, `services.php`, `industries.php`, `case-studies.php`, `blog.php`, `careers.php`, `request-quote.php` - Dynamic PHP pages.
- `index.html`, `services.html`, `industries.html`, `case-studies.html`, `blog.html`, `careers.html`, `request-quote.html` - Static fallback pages.
- `vercel.json` - Vercel deployment configuration.
