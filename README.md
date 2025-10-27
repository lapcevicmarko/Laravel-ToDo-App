# Laravel To-Do App

A simple task management application built with Laravel..

---

## Features

- Add, edit, and delete tasks
- Mark tasks as completed
- Filter tasks by status
- Responsive UI with Blade templates

---

## Tech Stack

- Laravel 12.0
- PHP 8.1+
- MySQL
- Blade templating engine
- CSS
- Composer & npm

---

## Installation

Clone the repository and install dependencies:

- git clone https://github.com/lapcevicmarko/Laravel-ToDo-App.git
- cd Laravel-ToDo-App
- composer install
- npm install

Copy the example environment file and generate the app key:

- cp .env.example .env
- php artisan key:generate

Configure your .env file with database credentials:

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=todo_app
- DB_USERNAME=root
- DB_PASSWORD=

Run migrations and optionally seed the database:

- php artisan migrate
- php artisan db:seed

Start the development server:

- php artisan serve

Visit http://127.0.0.1:8000 to view the app.

---

## Testing

Run unit and feature tests using PHPUnit:

- php artisan test

---

## Project Structure

- routes/web.php – Application routes
- app/Models/Task.php – Task model
- app/Http/Controllers/TaskController.php – CRUD logic
- resources/views/ – Blade templates

---

## Author

Developed by Marko Lapčević.
