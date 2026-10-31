<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


QTN 1 C
![alt text](image.png)
![alt text](image.png)
## About Laravel
![alt text](image.png)![alt text](image.png)
![alt text](image-1.png)
![alt text](image-2.png)
![alt text](image-2.png)
![alt text](image-2.png)
![alt text](image-2.png)

DOCUMENT USER ROLES AND SAMPLE LOGIN CREDENTIALS
# Student Management System

## 1. Project Description

The Student Management System is a web-based application developed using Laravel and PHP. It helps manage students, courses and course registrations.

The system provides different user roles to control access to the available features.

## 2. Technologies Used

- PHP
- Laravel Framework
- MySQL Database
- HTML
- CSS
- JavaScript
- Blade Templates
- Composer
- Node.js and NPM

## 3. Installation Instructions

Follow these steps to install and run the Student Management System.

### Step 1: Install the Requirements

Make sure the following software is installed:

- PHP (version compatible with the project)
- Composer
- MySQL
- Node.js and NPM
- XAMPP or another local server environment
- Git

### Step 2: Download the Project

Clone the project repository:

```bash
git https://github.com/Eugenia-Maria/superior-awad-coursework2.git
```

Navigate into the project folder:

```bash
cd superiorsstudentmgtsystem
```

### Step 3: Install Dependencies

Install the PHP dependencies:

```bash
composer install
```

Install the frontend dependencies:

```bash
npm install
```

### Step 4: Configure the Environment

Create the environment configuration file:

```bash
copy .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

### Step 5: Configure the Database

1. Start Apache and MySQL using XAMPP.
2. Open phpMyAdmin.
3. Create a new MySQL database named `student_management_system`.
4. Open the `.env` file in the project.
5. Update the database configuration:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=student_management_system
DB_USERNAME=root
DB_PASSWORD=
```

Note: Update the database name, username and password to match your local MySQL configuration.

### Step 6: Run Database Migrations

Run the following command to create the database tables:

```bash
php artisan migrate
```

If the project has database seeders configured, run:

```bash
php artisan db:seed
```

### Step 7: Build Frontend Assets

Run:

```bash
npm run build
```

### Step 8: Start the Application

Run the Laravel development server:

```bash
php artisan serve
```

Open the application in your browser:

```text
http://127.0.0.1:8000
```

## 4. User Roles and Responsibilities

The system supports three user roles:

### Administrator

The Administrator has access to the management features of the system.

Responsibilities include:

- Viewing and managing student records.
- Adding, editing and deleting students.
- Managing courses.
- Viewing course registrations.
- Registering students for courses.
- Deleting course registrations.

### Lecturer

The Lecturer has access to the lecturer dashboard.

The lecturer role is provided with a separate dashboard to support lecturer-related activities.

### Student

The Student has access to the student dashboard.

Responsibilities and available features include:

- Accessing the student dashboard.
- Viewing their registered courses through the My Courses page.
- Accessing their profile.

## 5. Sample Login Credentials

Use the sample accounts created for the application to test the different user roles.

| User Role     | Email Address        | Password      |
| ------------- | -------------------- | ------------- |
| Administrator | admin@gmail.com     | Admin12345    |
| Lecturer      | lecturer1@gmail.com | Lecturer12345 |
| Student       | student1@gmail.com  | Student12345  |



## 6. Access Control

The application uses authentication and role-based middleware to restrict access to certain features.

- Administrators can access student, course and registration management routes.
- Lecturers can access the lecturer dashboard.
- Students can access their dashboard and My Courses page.

Users must log in before accessing protected application features.

## 7. Conclusion

The Student Management System provides a centralized platform for managing student information, courses and course registrations. It uses role-based access control to ensure that users can access features according to their assigned roles.





Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

