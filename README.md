<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p> <p align="center"> <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a> <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a> <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a> <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a> </p>
About Laravel

Laravel is a web application framework with expressive, elegant syntax. It eases common tasks used in many web projects, such as routing, database ORM, migrations, caching, queues, and broadcasting.

For full details, visit the Laravel documentation
.

Bible Verse API – Project Overview

This project provides a simple API for Bible verses built using Laravel and SQLite.
It allows you to retrieve all verses, a specific verse by ID, or search verses by keyword.

Features

Retrieve all Bible verses

Retrieve a specific verse by ID

Search verses by book name or text

Requirements

PHP >= 8.0

Composer

Laravel >= 10.x

SQLite

Git

Installation

Clone the repository:

git clone https://github.com/Vince2245/IT-SIA31---API-Development-Project.git
cd "API-bibble verse/IT-SIA31---API-Development-Project"


Install dependencies:

composer install


Create the SQLite database file:

touch database/database.sqlite


Set up .env file (copy .env.example if needed):

DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database/database.sqlite

Setup & Run

To migrate the database, seed it with sample verses, and start the server:

php artisan config:clear && php artisan migrate:fresh --seed && php artisan serve


The server will run at: http://127.0.0.1:8000

API Endpoints
Method	Endpoint	Description
GET	/api/verses	Get all verses
GET	/api/verses/{id}	Get a specific verse by ID
GET	/api/search?q=term	Search verses by keyword

Example Requests:

GET http://127.0.0.1:8000/api/verses
GET http://127.0.0.1:8000/api/verses/1
GET http://127.0.0.1:8000/api/search?q=John

Database Seeder

VerseSeeder seeds sample verses into the verses table.

Run manually if needed:

php artisan db:seed --class=VerseSeeder

Notes

Ensure the SQLite database file exists at the path specified in .env.

Use Postman or any API client to test the endpoints.

Contributing

Thank you for considering contributing! Refer to the Laravel contribution guide
.

License

The Laravel framework is open-sourced software licensed under the MIT license
.