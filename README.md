# Product Management Project

This Laravel project provides a **CRUD system for managing Products, Product Categories, Product Colors, Product Types, and Type Assignments** using [Filament Admin](https://filamentphp.com/). It includes relational dropdowns, polymorphic assignments, and read-only views.

---

## Table of Contents

- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Setup](#setup)
- [Database Migrations & Seeders](#database-migrations--seeders)
- [Filament Admin](#filament-admin)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Notes](#notes)
- [License](#license)

---

## Features

- Full CRUD for:
  - Product Colors
  - Product Categories
  - Products
  - Product Types
  - Type Assignments (polymorphic relation)
- Dropdowns for selecting related models (categories, colors, types)
- Read-only “View” pages
- Proper relational database constraints
- Uses Filament Admin for fast development

---

## Requirements

- PHP >= 8.2  
- Composer  
- Laravel >= 10  
- MySQL / sqlite

---

## Installation & Setup

1. Clone the repository:
git clone https://github.com/ChamilaGayan/Laravel-and-Filament-Test.git
cd Laravel-and-Filament-Test

2. Install PHP dependencies:
composer install

3. Install PHP dependencies:
composer install

4. Copy the environment file and generate the app key:
cp .env.example .env
php artisan key:generate

5. Set your database credentials in .env:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

6. Run database migrations:
php artisan migrate

7. Seed your tables:
php artisan db:seed

8. Run the development server:
php artisan serve


## Filament Admin

## Create an admin user:
php artisan make:filament-user

## Manage resources:

- Product Colors
- Product Categories
- Products
- Product Types
- Type Assignments

## Database Migrations & Seeders

The project includes migrations for:

- product_colors
- product_categories
- products
- product_types
- type_assignments

Make sure relationships are maintained to avoid foreign key errors.

## Usage

- Create, edit, delete products and related models via the Filament admin panel.
- Use dropdowns to select related models:
    - Product → Category & Color
    - Type Assignment → ProductType + Product/Category
- View read-only pages for detailed info.

## Project Structure

- app/Models → Eloquent models
- app/Filament/Resources → Filament resources and pages
- database/migrations → Table migrations
- database/seeders → Seeder files
