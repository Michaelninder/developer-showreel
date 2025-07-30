# ROADMAP: Michaelninder's DevHub

This document outlines the planned features, development phases, and future aspirations for "Michaelninder's DevHub" – a personal developer showreel designed to showcase a comprehensive set of full-stack skills using Laravel, TailwindCSS, and various API integrations.

**Domain:** `fabianternis.dev`

---

## Vision

To create a clean, functional, and interactive central hub for an online presence. This project aims to be a living portfolio, demonstrating proficiency in modern web development, API integration, and user experience design, highlighting both the quality of the code and the polished user interface.

---

## Core Technologies

*   **Backend:** Laravel (Version 10+, PHP 8.2+)
*   **Frontend:** TailwindCSS, Custom JavaScript, Alpine.js, Custom CSS
*   **Database:** MySQL (Production) / SQLite (Development) (Eloquent ORM, UUIDs for PKs)
*   **Version Control:** Git / GitHub (`michaelninder`)

---

## Phase 1: Foundation & Core Integrations (MVP)

**Goal:** Establish the basic dashboard structure, integrate key APIs, and implement fundamental UI/UX features to create a demonstrable first version.

### Features:

*   **Dashboard Layout & Responsiveness:**
    *   [ ] A clean, responsive layout will be created using TailwindCSS for optimal viewing across devices.
    *   [ ] A well-structured header, footer, and main content sections will be implemented.
*   **User Interface Enhancements:**
    *   [ ] **Theme Switcher:** A seamless Light/Dark mode toggle with preference persistence via `localStorage` will be implemented.
    *   [ ] **Locale Switcher:** English / German language switching will be enabled using Laravel's i18n features, `localStorage`, and efficient AJAX updates.
    *   [ ] **Scroll-to-Top Button:** A smooth scroll-to-top button with dynamic visibility based on scroll position will be added.
*   **Core API Integrations (Dynamic Widgets):**
    *   [ ] **GitHub Widget:**
        *   Profile picture, total public repositories, and a summary of latest commit activity will be displayed.
        *   A modal or off-canvas element will be included to list recent public repositories (showing name, stars, and primary language).
        *   A dedicated Laravel API endpoint (`/api/github/repos`) responsible for fetching and caching GitHub data will be developed.
    *   [ ] **Twitch Widget:**
        *   Current live stream status, viewer count (if live), and a thumbnail of the latest broadcast will be shown.
        *   A dedicated Laravel API endpoint (`/api/twitch/stream-info`) will be developed for this integration.
*   **API Key Management:**
    *   [ ] Secure storage of all external API keys/tokens (encrypted and managed via environment variables or a secure database table) will be implemented.
    *   [ ] Laravel scheduled tasks for automatic API token refresh (where applicable and supported by the API) will be set up.
*   **Custom Styling:**
    *   [ ] Custom CSS will be applied for unique visual flourishes, specific animations, or detailed component styling that goes beyond standard Tailwind utilities.

### Technical Tasks:

*   [ ] Laravel project initialization (Composer setup, basic configuration).
*   [ ] TailwindCSS configuration with PostCSS and necessary plugins.
*   [ ] Database migrations will be created with UUIDs for all new tables (e.g., API token storage, caching mechanism).
*   [ ] Eloquent models will be developed for managing API token storage and efficient caching.
*   [ ] Dedicated Service classes will be implemented for encapsulating each external API interaction logic.
*   [ ] Laravel routes and corresponding controller methods for all API endpoints will be defined.
*   [ ] Robust error handling for failed external API requests will be established, providing graceful degradation and user-friendly feedback.
*   [ ] The initial deployment of the application to `fabianternis.dev` (e.g., leveraging europehost.eu VPS capabilities) will be performed.

---

## Phase 2: Showcasing & Interaction

**Goal:** Enhance content presentation with dedicated sections for past work and enable direct communication with visitors.

### Features:

*   **Project Showcase Section:**
    *   [ ] A dedicated page or section will be designed and implemented to effectively list and categorize other personal and client projects.
    *   [ ] A database schema will be created for project details (uuid, title, description, technologies\_used, github\_link, demo\_link, image\_path, display\_order).
    *   [ ] Projects will be presented in a visually appealing and responsive grid or card layout.
    *   [ ] Modals or lightboxes will be integrated for detailed project views and interactive image galleries.
*   **Contact Form:**
    *   [ ] A secure and user-friendly contact form with comprehensive client-side and server-side validation will be built.
    *   [ ] Laravel Mailables will be configured and implemented to send email notifications directly to the owner's personal address upon form submission.
    *   [ ] Basic spam protection mechanisms (e.g., a honeypot field) will be incorporated.
    *   [ ] Clear and concise success or error messages will be provided to the user after form submission.
*   **Skills & Technologies Section:**
    *   [ ] A dynamic section will be designed to visually represent proficiency levels across various technologies.
    *   [ ] A database schema will be created for skills (uuid, name, proficiency\_level, category, icon\_path).
    *   [ ] Skills will be displayed using engaging and potentially interactive elements (e.g., skill bars, detailed cards with technology icons).
    *   [ ] Filtering or categorization options for skills (e.g., Frontend, Backend, DevOps, Tools) will be implemented.
*   **General UI/UX Refinement:**
    *   [ ] Subtle yet effective transitions and micro-interactions will be implemented throughout the dashboard for a smoother user experience.
    *   [ ] Good accessibility practices (e.g., appropriate ARIA attributes, keyboard navigation) will be ensured where relevant to enhance usability for all.

### Technical Tasks:

*   [ ] New database migrations for `projects` and `skills` tables will be created.
*   [ ] Eloquent models for `Project` and `Skill` will be developed and any necessary relationships defined.
*   [ ] The necessary Laravel Mailables for the contact form functionality will be implemented.
*   [ ] Alpine.js components for form handling, interactive skill displays, and general dynamic UI elements will be developed.
*   [ ] Image upload and secure storage for project screenshots will be integrated using Laravel's Storage Facade.

---

## Phase 3: Advanced Features & Refinement

**Goal:** Integrate more complex functionalities, ensure high performance and security, and polish the overall experience.

### Features:

*   **Public Dev Status API Endpoint:**
    *   [ ] A public, read-only Laravel API endpoint (e.g., `/api/dev-status`) will be created that exposes a curated subset of aggregated data (e.g., last GitHub activity summary, Twitch stream status).
    *   [ ] Strong API design principles, clear request/response structuring, and appropriate HTTP status codes will be demonstrated.
*   **Performance Optimization:**
    *   [ ] Advanced caching strategies for external API calls, database queries, and view rendering will be implemented to significantly improve response times.
    *   [ ] Frontend asset loading will be optimized (e.g., minification of CSS/JS, efficient image lazy loading, WebP format usage).
*   **Security Enhancements:**
    *   [ ] Laravel's built-in rate limiting for public API endpoints will be implemented to protect against abuse and ensure fair usage.
    *   [ ] A thorough security review will be conducted, and general application security will be hardened, focusing on common vulnerabilities (OWASP Top 10).
*   **SEO & Social Sharing:**
    *   [ ] Proper meta tags (e.g., title, description) and Open Graph tags will be implemented for optimized social media previews when the site link is shared.
    *   [ ] A `sitemap.xml` will be generated and maintained to enhance search engine indexing and discoverability.

### Technical Tasks:

*   [ ] A dedicated Laravel controller/resource for the public API endpoint will be developed.
*   [ ] Laravel's built-in rate limiting middleware will be configured and implemented for selected routes.
*   [ ] Redis or another robust cache driver will be set up and integrated for Laravel caching.
*   [ ] Further performance best practices specific to Laravel and modern frontend development will be researched and applied.

---

## Phase 4: Authentication & Enhanced Communication

**Goal:** Implement robust user authentication using social logins and establish comprehensive notification systems.

### Features:

*   **User Authentication System:**
    *   [ ] A secure user authentication system will be built from scratch, allowing for potential future features requiring user logins.
    *   [ ] **Socialite Integration:** Authentication via GitHub (OAuth), Discord (OAuth), and Twitch (OAuth) will be implemented using Laravel Socialite.
    *   [ ] User profile management (basic details) if logged in.
    *   [ ] Logout functionality.
*   **Extended Emailers:**
    *   [ ] Automated email notifications for specific events (e.g., "Welcome Email" upon first login via socialite, "New Project Posted" alerts if a subscription feature is added).
    *   [ ] Customizable email templates using Laravel Mailables and Blade.
*   **Admin Panel (Basic):**
    *   [ ] A basic, protected admin route/view will be implemented for managing key content (e.g., projects, skills) and potentially viewing contact form submissions. This will likely involve simple gate/policy authorization.

### Technical Tasks:

*   [ ] Laravel Breeze or Jetstream (for rapid scaffolding of authentication) will be evaluated and potentially used as a starting point.
*   [ ] Database migrations for users and potentially connected social accounts will be created (using UUIDs).
*   [ ] Laravel Socialite integration for GitHub, Discord, and Twitch OAuth flows.
*   [ ] Custom Laravel Mailables for different notification types.
*   [ ] Basic Authorization/Authentication middleware for admin routes.

---

## Future Considerations

These are ideas that may be explored beyond the initial roadmap to further enhance the project or demonstrate additional skills.

*   [ ] **WebSockets Integration:** Real-time updates will be implemented (e.g., instantly reflecting Twitch live status without relying on polling).
*   [ ] **CI/CD Pipeline:** An automated Continuous Integration/Continuous Deployment pipeline will be established for streamlined testing and deployment workflows.
*   [ ] **Comprehensive Testing:** A robust suite of Unit and Feature tests will be developed to ensure code reliability and maintainability.
*   [ ] **Full Admin Panel:** A more comprehensive custom admin interface (e.g., using Laravel Nova or Filament) for effortless content management of projects, skills, and other dashboard data.
*   [ ] **Advanced Animations:** More elaborate, performant animations will be explored using a dedicated JavaScript animation library like GSAP for specific, high-impact elements.

---

**Note:** This roadmap is a living document. Features and timelines may be adjusted based on development progress, learning opportunities, and evolving priorities. Feedback and suggestions are always welcome!

---
*This roadmap was initially generated by an AI assistant and subsequently refined and adapted by Fabian Ternis to align with specific project goals and technical preferences.*