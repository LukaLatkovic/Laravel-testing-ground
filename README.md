## INTRODUCTION
This repository is simply for testing purposes of various functions and libraries in Laravel.
If you need this repository you can fork it anytime, and full documentation what has been doing here will be in this ReadMe file.

## Contents
 1. [Routing (For learning how routes work)](#routing-for-learning-how-routes-work)
 2. [Controllers](#controllers)
 3. [Views](#views)
 4. [Blade components](#blade-components)
 5. [HTTP Client](#http-client)
 6. [Fluent Strings](#fluent-strings) 
 7. [Stub customisation](#stub-customisation)

### Laravel installation
For new installation of Laravel project:
```php
laravel new Laravel8
```
or

```php
composer create-project --prefer-dist laravel/laravel Laravel8
```
[See more in documentation](https://laravel.com/docs/8.x/installation#installing-laravel)  
---

### Routing (For learning how routes work)
[Commit](https://github.com/LukaLatkovic/Laravel-testing-ground/commit/fa1fc864cb308f8d175d9187c49e7db787194de2)  
[See more in documentation](https://laravel.com/docs/8.x/routing#basic-routing)  
---

### Controllers
To create new controller:
```php
php artisan make:controller HomeController
```
[Commit](https://github.com/LukaLatkovic/Laravel-testing-ground/commit/c77a64f410d5edb15f90de267300f21d29f146de)  
[See more in documentation](https://laravel.com/docs/8.x/controllers#basic-controllers)  
---

### Views
Views are made by making new file with extesion .blade.php 

[Commit](https://github.com/LukaLatkovic/Laravel-testing-ground/commit/221432e8cd9c6554d31ebe4de68ef4b15b1e902e)  
[See more in documentation](https://laravel.com/docs/8.x/views#creating-views)  
---

### Blade components
Components and slots provide similar benefits to sections and layouts.
```php
php artisan make:component Alert
```
[Commit](https://github.com/LukaLatkovic/Laravel-testing-ground/commit/4b2b0fb82ca7fe661e257d3d7001edf7d20c6cec)  
[See more in documentation](https://laravel.com/docs/8.x/blade#components)  
---

### HTTP Client
For fetching data from some web app or web page. 
In this case [JsonPlaceHolder](https://jsonplaceholder.typicode.com/) was used for fetching fake data.
[Commit](https://github.com/LukaLatkovic/Laravel-testing-ground/commit/2a5e5e66d30dda102b1ca1e0c2db243fd0ae1b28)  
[See more in documentation](https://laravel.com/docs/8.x/http-client#making-requests)  
---

### Fluent Strings
Fluent string is a type of helpers in Php and Laravel framework
Fluent strings provide a more fluent, object-oriented interface for working with string values, allowing you to chain multiple string operations together using a more readable syntax compared to traditional string operations.
[Commit](https://github.com/LukaLatkovic/Laravel-testing-ground/commit/e65e46c4f15807ea34cad9e5e1c7d63d840f26f1)  
[See more in documentation](https://laravel.com/docs/8.x/helpers#method-fluent-str-after)
---

### Stub customisation
The Artisan console's make commands are used to create a variety of classes, such as controllers, jobs, migrations, and tests. These classes are generated using "stub" files that are populated with values based on your input.  
```php
php artisan stub:publish
```  
[Commit]  
[See more in documentation](https://laravel.com/docs/8.x/artisan#stub-customization) 