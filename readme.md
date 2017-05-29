# Alien Calculator

Use [Composer](https://getcomposer.org/) to install Laravel and the other 
dependencies of this project.

Install the application dependencies.

    composer install

Run the application.

    php artisan serve

If you receive a permissions error try opening up the permissions on the 
`cache` and `storage` directories.

    sudo chmod -R 777 bootstrap/cache storage

Run the tests.

    vendor/bin/phpunit
