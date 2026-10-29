# AeroMFG AI - Custom WordPress Theme

A custom, high-performance, and accessible WordPress theme built for the **AeroMFG AI** project. Tailored for commercial aircraft manufacturing, space flight hardware integration, and ISO-classified cleanroom environments.

---

## Theme Specifications

- **Theme Name**: AeroMFG AI
- **Version**: 1.0.0
- **Requires at least**: WordPress 6.0
- **Tested up to**: WordPress 6.7
- **PHP Version**: 7.4+
- **License**: GPL v2 or later
- **Typography**: Google Fonts (*Space Grotesk* for technical headings, *Inter* for body copy)
- **Design System**: Industrial Aerospace Light Palette (Deep Navy `#0f172a`, Steel Blue `#2563eb`, Restrained Copper `#c2632b`, Cleanroom Base `#f8fafc`)

---

## File Structure

```text
aeromfg-theme/
├── assets/
│   ├── css/
│   │   └── theme.css              # Master industrial layout, typography, grid & responsive styles
│   ├── js/
│   │   └── main.js                # Accessible mobile drawer, keyboard trap & active route controller
│   └── images/
│       ├── hero-diagram.svg       # Commercial aircraft telemetry schematic
│       ├── aiot-architecture.svg  # 3-layer sensor edge, gateway bus & AI core
│       ├── video-inspection.svg   # Optical inspection HUD & defect analysis
│       └── cleanroom-monitoring.svg # Cleanroom telemetry & hazardous propellant zone locks
├── style.css                      # WordPress theme declaration & metadata
├── functions.php                  # Theme setup, asset enqueuing, custom nav walker & helpers
├── header.php                     # Accessible site header, brand badge & responsive navigation
├── footer.php                     # 4-column enterprise footer, dynamic copyright & compliance links
├── front-page.php                 # Page 1: Commercial Aircraft Manufacturing Command
├── page-about.php                 # Page 2: Mission Architecture & Engineering Pedigree
├── page-aiot-intelligence.php     # Page 3: AIoT Sensing Technologies & Telemetry Infrastructure
├── page-video-ai.php              # Page 4: Video AI & Automated Optical Quality Inspection
├── page-solutions.php             # Page 5: Aerospace & Orbital Hardware Manufacturing Solutions
├── page-insights.php              # Page 6: Industry Insights & Smart Manufacturing Analytics
├── page-resources.php             # Page 7: Technical Resources & RESTful API Schematics
├── page-security.php              # Page 8: Enterprise Security, Cleanroom Compliance & Governance
├── page-contact.php               # Page 9: Engineering Consultation & Site Assessment Inquiries
├── page.php                       # Default WordPress page template
└── index.php                      # Core WordPress fallback template
```

---

## Installation & Deployment Guide

### Option 1: Direct Directory Copy (Local or FTP)

1. Copy the entire `aeromfg-theme/` directory into your WordPress installation:
   ```text
   wp-content/themes/aeromfg-theme/
   ```
2. Log into your WordPress Administration Panel (`/wp-admin`).
3. Navigate to **Appearance > Themes**.
4. Locate **AeroMFG AI** and click **Activate**.

### Option 2: Zip Upload via WordPress Admin

1. Compress the contents of `aeromfg-theme/` into a `.zip` archive named `aeromfg-theme.zip`.
2. Go to **Appearance > Themes > Add New > Upload Theme**.
3. Select `aeromfg-theme.zip` and click **Install Now**.
4. Click **Activate**.

---

## Configuring the Nine Pages

To link the 9 templates in WordPress:

1. In the WordPress Admin, go to **Pages > Add New** for each of the 9 sections:
   - **Page 1: Command Center**
     - Slug: `home` or leave default for front page
     - Template in *Page Attributes*: `Command Center (Homepage)`
   - **Page 2: About Us**
     - Slug: `about`
     - Template: `About Us`
   - **Page 3: AIoT Sensing**
     - Slug: `aiot-sensing`
     - Template: `AIoT Sensing Technologies`
   - **Page 4: Video AI**
     - Slug: `video-ai`
     - Template: `Video AI & Optical Inspection`
   - **Page 5: Solutions**
     - Slug: `solutions`
     - Template: `Aerospace Solutions`
   - **Page 6: Insights**
     - Slug: `insights`
     - Template: `Industry Insights`
   - **Page 7: Resources**
     - Slug: `resources`
     - Template: `Technical Resources & API`
   - **Page 8: Security**
     - Slug: `security`
     - Template: `Security & Cleanroom Compliance`
   - **Page 9: Contact**
     - Slug: `contact`
     - Template: `Engineering Contact & Assessment`

2. Set the Static Front Page:
   - Navigate to **Settings > Reading**.
   - Under **Your homepage displays**, select **A static page**.
   - Set **Homepage** to your **Command Center** page.
   - Click **Save Changes**.

---

## Navigation Menu Setup

The theme includes an autonomous fallback navigation that outputs all 9 pages automatically. To customize the order or add custom links:

1. Go to **Appearance > Menus**.
2. Click **Create a new menu** (name it e.g., "Main Aerospace Navigation").
3. Add the 9 pages to your menu.
4. Under **Menu Settings > Display location**, check **Primary Aerospace Navigation**.
5. Click **Save Menu**.

---

## Security & Best Practices Verified

- **No Hardcoded URLs**: All internal links utilize `home_url()`, and all asset references utilize `get_template_directory_uri()` and `aeromfg_asset()`.
- **Output Escaping**: All dynamic strings and attribute tags utilize WordPress sanitization functions: `esc_html()`, `esc_attr()`, `esc_url()`, and `esc_html_e()`.
- **CSRF Protection**: Contact form incorporates `wp_nonce_field()` for submission security.
- **Strict Separation**: Original static HTML backups remain completely preserved in the workspace root directory.
