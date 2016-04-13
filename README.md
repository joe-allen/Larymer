# Larymer
A marriage of Laravel 5 and Polymer 1.

[![Laravel](https://laravel.com/assets/img/laravel-logo.png)](https://github.com/laravel/laravel)
[![Polymer](https://www.polymer-project.org/images/logos/lockup.svg)](https://github.com/Polymer/polymer)

## Larymer Setup

- Clone repo

- Change chmod -R 777 storage and bootstrap/cache

In your config/app.php file

- Set the application URL

- Set Encryption Key (php artisan key:generate on CLI)

- Should be set up now. Visit your application's URL to verify


(BELOW IS HOW THE INITIAL SETUP WENT).

## Laravel Setup

Laravel 5.1 (Change to 5.2 if you want the most current install of Laravel)

- On the command line: composer create-project laravel/laravel blog "5.1.*"

- move directory out of blog into current folder "mv blog/* ./" 

- Change chmod -R 777 storage and bootstrap/cache

In your config/app.php file

- set the application URL

- set Encryption Key (php artisan key:generate on CLI)

In your config/database.php file

- set up .env file w/ db creds

- reference your .env DB credentials if you plan to use a DB

## Polymer Setup

Install with Bower

- https://www.polymer-project.org/1.0/docs/start/getting-the-code.html

- You will be prompted to setup your bower.json file

- Once install move you bower_components and bower.json file into Laravel's 'public' folder

- You should be able to now use Laravel normally

- If using the blade templating engine with Laravel make sure to use the @{{}} syntax on Polymer's bound data since both use the curly bracket syntax. (the @ sign tells blade not to touch https://laravel.com/docs/5.1/blade)