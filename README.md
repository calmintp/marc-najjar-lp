# Marc Najjar — Official Website

Admin-driven institutional website built with Laravel 12 and Filament 4.

---

## 🚀 Overview

This project includes:

- 🌐 Public-facing website
- 🛠️ Filament admin panel
- 📚 CRUD management (Books, Videos, Speaking Requests, Subscribers)
- 📊 Custom dashboard with stats widgets
- 🔐 Profile-based password management
- 🐳 Containerized development with DevContainers
- 🗄️ SQLite database (no MySQL)

---

## 🧱 Tech Stack

![Laravel](https://img.shields.io/badge/Laravel-12-red?logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.3-777BB4?logo=php&logoColor=white)
![Filament](https://img.shields.io/badge/Filament-4-orange)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3-38B2AC?logo=tailwind-css&logoColor=white)
![SQLite](https://img.shields.io/badge/SQLite-Database-003B57?logo=sqlite&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-BuildTool-646CFF?logo=vite&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-DevContainer-2496ED?logo=docker&logoColor=white)

---

## 🐳 Development Setup (DevContainers)

This project runs fully inside a Docker-based DevContainer.

### ✅ Requirements

- Docker Desktop
- Visual Studio Code
- Dev Containers extension (Microsoft)

---

## 1️⃣ Open in DevContainer

Open the project in VSCode.

When prompted, click:

**Reopen in Container**

Or manually via:

Command Palette → Dev Containers: Reopen in Container

Docker will automatically:

- Build the PHP container
- Configure SQLite
- Install required extensions

---

## 2️⃣ Install Dependencies

Inside the container terminal:

    composer install
    npm install

---

## 3️⃣ Environment Setup

Copy environment file:

    cp .env.example .env

Generate application key:

    php artisan key:generate

---

## 4️⃣ Database Setup (SQLite)

The project uses SQLite.

Ensure the database file exists:

    touch database/database.sqlite

Make sure `.env` contains:

    DB_CONNECTION=sqlite
    DB_DATABASE=/workspace/database/database.sqlite

Run migrations and seeders:

    php artisan migrate --seed

---

## 5️⃣ Run Frontend Assets

    npm run dev

---

## 6️⃣ Access the Application

Public website:  
http://localhost

Admin panel:  
http://localhost/admin

---

## 🔐 Default Admin Access

An admin user is created via seeder.

If you need to manually create one:

    php artisan tinker

Then:

    \App\Models\User::create([
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'password' => bcrypt('password'),
    ]);

---

## 🆘 Reset Admin Password (Emergency)

If credentials are lost:

    php artisan tinker

Then:

    $user = \App\Models\User::first();
    $user->password = bcrypt('newpassword');
    $user->save();

---

## 🏗️ Production Build

Build optimized frontend assets:

    npm run build

Optimize Laravel:

    php artisan optimize

Ensure:

- APP_ENV=production
- APP_DEBUG=false
- Storage is linked

    php artisan storage:link

---

## 📁 Project Structure

    app/
        Filament/
        Models/

    resources/
        views/

    routes/

    database/
        migrations/
        seeders/
        database.sqlite

    .devcontainer/
    docker-compose.yml

---

## 🛠️ Useful Artisan Commands

Run migrations:

    php artisan migrate

Rollback:

    php artisan migrate:rollback

Clear caches:

    php artisan optimize:clear

---

## 🎛️ Admin Panel

Built with Filament 4.

Includes:

- Custom dashboard with stats widgets
- Profile management (change password)
- Sidebar customization
- CRUD management for:
    - Books
    - Videos
    - Speaking Requests
    - Subscribers

---

## 📄 License

Private project. All rights reserved.
