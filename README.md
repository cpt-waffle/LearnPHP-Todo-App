# LearnPHP-Todo-App

Basic learning of PHP Laravel. Easy todo app


# Requirements

 - php 7.*
 - Composer
 - Laravel Framework 5.6.26
 - MySQL
 
 # Installation 
 
  - git clone
  - create `.env` and copy the contents of .env.example. Edit the `DB_DATABASE`, `DB_USERNAME` and `DB_PASSWORD` to whatever your mysql is set to.
  - On your mysql create the database with the name that you set  `DB_DATABASE` variable.
  - `php artisan migrate`
  - `php artisan db:seed`
  - `php artisan serve` or `php -S 127.0.0.1:8000 -t public`
  - go to `localhost:8000` on your browser.
