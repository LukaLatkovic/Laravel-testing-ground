## INTRODUCTION
This repository is simply for testing purposes of various functions and libraries in Laravel.
If you need this repository you can fork it anytime, and full documentation what has been doing here will be in this ReadMe file.

## Contents

### Laravel installation
For new installation of Laravel project:
```php
laravel new Laravel8
```
or

```php
composer create-project --prefer-dist laravel/laravel Laravel8
```
[See more](https://laravel.com/docs/8.x/installation#installing-laravel)

### Routing (For learning how routes work)
[Commit]
[See more](https://laravel.com/docs/8.x/routing#basic-routing)

### Controllers
To create new controller:
```php
php artisan make:controller HomeController
```
[Commit]
[See more](https://laravel.com/docs/8.x/controllers#basic-controllers)

### Views
Views are made by making new file with extesion .blade.php 

[Commit]
[See more](https://laravel.com/docs/8.x/views#creating-views)

### Blade components
Components and slots provide similar benefits to sections and layouts.
```php
php artisan make:component Alert
```
[Commit]  
[See more](https://laravel.com/docs/8.x/blade#components)

### HTTP Client
For fetching data from some web app or web page. 
In this case [Link](https://jsonplaceholder.typicode.com/) was used for fetching fake data.
[Commit]  
[See more](https://laravel.com/docs/8.x/http-client#making-requests)