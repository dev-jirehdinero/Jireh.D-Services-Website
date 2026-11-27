# Jireh.D Services — Laravel Multi-Page Website & Admin Inbox

A full-stack multi-page business website and inquiry management system built with **Laravel** and **Tailwind CSS**. Visitors can browse public pages and submit inquiries with optional file attachments, while authenticated administrators can search, review, and manage incoming messages.

---

## Features

- **Public Website Pages:** Responsive **Home**, **About**, and **Services** pages sharing a unified Blade layout (`layouts/app.blade.php`).
- **Contact Form & File Uploads:**
  - Server-side validation with inline `@error` feedback and `old()` input retention.
  - Optional file attachments (`JPG`, `PNG`, `PDF`) stored securely via Laravel's public storage disk.
  - Flash confirmation banners upon successful submission.
- **Admin Authentication & Security:**
  - Powered by **Laravel Breeze** (`auth` middleware protecting `/admin/inquiries`).
  - Dynamic navigation bar (`@auth` / `@else`) that switches between **Admin Login** and **Admin Inbox / Logout**.
  - Public `/register` routes disabled to prevent unauthorized account creation.
- **Admin Message Inbox (`/admin/inquiries`):**
  - Displays total inquiry count, service category badges, relative timestamps, and clickable attachment links.
  - Live search filtering by sender name or email with pagination.
  - One-click inquiry deletion (automatically cleans up uploaded files from storage).
- **Custom Error Handling:** Branded `404.blade.php` page matching the main site layout.

---

## Tech Stack

- **Backend:** PHP 8.2+, Laravel
- **Frontend:** Blade Templates, Tailwind CSS, Vite
- **Database:** SQLite (default) or MySQL
- **Authentication:** Laravel Breeze

---

## Project Structure

```text
app/
├── Http/Controllers/
│   ├── InquiryController.php   # Handles contact form display, validation, storage, inbox search & delete
│   └── PageController.php      # Renders Home, About, and Services pages
└── Models/
    └── Inquiry.php             # Eloquent model for contact inquiries
database/
└── migrations/
    └── xxxx_create_inquiries_table.php
resources/
└── views/
    ├── errors/
    │   └── 404.blade.php       # Custom 404 Not Found page
    ├── inquiries/
    │   └── index.blade.php     # Protected Admin Inbox view
    ├── layouts/
    │   └── app.blade.php       # Shared public & admin master layout
    ├── pages/
    │   ├── home.blade.php
    │   ├── about.blade.php
    │   └── services.blade.php
    └── contact.blade.php       # Public Contact Us form
routes/
├── web.php                     # Public, contact, and admin routes
└── auth.php                    # Authentication routes (registration disabled)
```

---

## Local Setup & Installation

1. **Clone the repository and enter the project directory:**
   ```bash
   git clone <your-repository-url>
   cd my-website
   ```

2. **Install PHP and JavaScript dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Configure environment variables:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Run database migrations and link storage:**
   ```bash
   php artisan migrate
   php artisan storage:link
   ```

5. **Create an Admin User (via Tinker):**
   Since public registration is disabled, create an administrator account via the CLI:
   ```bash
   php artisan tinker
   ```
   ```php
   App\Models\User::create([
       'name' => 'Admin',
       'email' => 'admin@example.com',
       'password' => bcrypt('password123'),
   ]);
   ```

6. **Start the development servers:**
   ```bash
   php artisan serve
   npm run dev
   ```
   Visit `http://127.0.0.1:8000` in your browser.

---

## Key Routes

| Method | URI | Name | Access | Description |
| :--- | :--- | :--- | :--- | :--- |
| `GET` | `/` | `home` | Public | Landing page |
| `GET` | `/about` | `about` | Public | Company overview & stats |
| `GET` | `/services` | `services` | Public | Service offerings |
| `GET` | `/contact` | `contact` | Public | Contact form |
| `POST` | `/contact` | `contact.store` | Public | Validate & save inquiry |
| `GET` | `/login` | `login` | Guest | Admin login form |
| `GET` | `/admin/inquiries` | `admin.inquiries` | Auth | Searchable admin inbox |
| `DELETE` | `/admin/inquiries/{inquiry}` | `admin.inquiries.destroy` | Auth | Delete inquiry & file |

---

## License

This project was built as a hands-on Laravel learning exercise and is open-sourced under the [MIT License](https://opensource.org).

## Author
Jireh Dinero