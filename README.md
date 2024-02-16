<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Todo App
A simple task manager using Laravel and Livewire.

## Project Origin

This project is based on <a href="https://www.youtube.com/playlist?list=PLqDySLfPKRn543NM_fTrJRdhjBgsogzSC">(Laravel Livewire 3 course (Beginners))</a> by "Yelo Code", with some modifications and additions:

## Getting Started

* To get started with app, first you need to install laravel and livewire (you can follow the installation steps at the docs) then clone the code
* Install required Dependencies by running "composer install" command
* Create a new .env file by duplicating the provided .env.example file and updating the necessary configurations. (You can use "cp .env.example .env" command)
* Set the APP_KEY value by generating a new application key using the following command: php artisan key:generate
* Migrate the database using the command: php artisan migrate

## Usage

* Start the development server using the following command: php artisan serve
* Enjoy the app :)

## Acknowledgements

Laravel official docs: https://laravel.com/docs/10.x
Livewire official docs: https://livewire.laravel.com/docs/quickstart

### Tech Stack
* PHP
* Laravel
* Livewire
* MySQL
* HTML
* CSS
* Bootstrap
* Tailwing CSS

### Features
* Login and Registration
* Create, modify and delete todos
* Mark and unmark todos as completed
* Search for specific todos
