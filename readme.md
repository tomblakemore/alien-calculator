# Alien Calculator

## Approach

The application is written using the Laravel 5.4 framework.

Four classes exist under the main application namespace to perform the 
individual calculations, all bound to the same calculator interface.

Requests to four individual endpoints are routed on to four controllers. The 
application service provider resolves and onjects the correct calculator as a 
dependency on the controller. The four controllers inherit from a parent 
controller which passes the input parameters to the calculator and returns the 
answer. Note only ajax requests are allowed to these endpoints.

Unit tests are written to verify the calculations for a range of string inputs. 
String inputs have been tested because the operands are posted over HTTP and 
arrive as strings from the front-end.

## Installation

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
