# Pizza Maker - API

Laravel api to calculate the right weight of dough in the pan for a pizza

## Requirements 

    Composer
    PHP >= 7.2.5

## Installation

You can install the project via composer:
```sh
git clone git@github.com:cfioretti/pizzamaker-api.git
cd pizzamaker-api && composer install
```

## Configuration

From project folder:
```sh
cp .env.example .env
php artisan key:generate
php artisan apidoc:generate
php artisan migrate
php artisan module:seed
```
To run in local environment:
```sh
php artisan serve
```


## License

This project is licensed under the [MIT license](LICENSE).
