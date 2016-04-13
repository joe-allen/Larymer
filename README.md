# Larymer
A marriage of Laravel 5 and Polymer 1

[![Laravel](http://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2015/02/1423519219laravel-l-slant.png)](https://laravel.com/)
[![Polymer](https://blog.polymer-project.org/images/logos/p-logo.png)](https://www.polymer-project.org/1.0/)

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

