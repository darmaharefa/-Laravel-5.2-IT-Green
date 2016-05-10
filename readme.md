# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.


### Installation ###

Clone/Downlad Repositorinya
* `git clone https://github.com/darmaharefa/-Laravel-5.2-IT-Green.git projectname` / Download Zip Filenya 

Masuk ke directorinya 
* `cd projectname`

Intall semua dependencinya
* `composer install`

Buat file .env baru untuk tempat penyimpanan user/pass database
* `cp .env.example .env`

Generate key yang akan diinsert ke APP_KEY di file .env
* `php artisan key:generate`

Buka file .env, masukkkan DB_DATABASE = db_itgreen, DB_USERNAME = root, dan DB_PASSWORD nya kosongkan

Start Apache dan MySql (Saya menggunakan XAMPP)
Buka localhost/phpmyadmin, buat database baru dengan nama db_itgreen
Import database db_itgreen.sql nya ke database tersebut

* `php artisan serve` to start the app on http://localhost:8000/

Buka browser dan ketikkan http://localhost:8000/