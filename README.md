# Shot Wars!
A hackathon entry in the PHP UK 2015 conference. A card based drinking game.

## Technologies
* PHP 5.4+
* MySQL
* [CakePHP 3](http://book.cakephp.org/3.0/en/installation.html)

## Installation
Clone the repo into a folder on your computer and run `composer install` to grab the dependancies.
The current deck of cards are stored in an sql file in `config/schema/phpuk15-cards.sql`

## Configuration
Rename your `config/app.default.php` file to `config/app.php` and configure the datasources to connect
to your local database.

