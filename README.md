# Pizza Maker - API

Laravel api to calculate the right weight of dough in the pan for a pizza

By default, api docs will run on the following urls: http://localhost:8080

## Requirements 

    Git >= 1.8
    Docker >= 18.09
    docker-compose >= 1.17

## Installation

You can install the project via composer:
```sh
git clone git@github.com:cfioretti/pizzamaker-api.git
cd pizzamaker-api && docker-composer up -d
```

## Configuration

From project folder:
```sh
cp .env.example .env
docker exec -it pizzamaker-api composer install
docker exec -it pizzamaker-api php artisan key:generate
docker exec -it pizzamaker-api php artisan migrate
docker exec -it pizzamaker-api php artisan apidoc:generate
```

## License

This project is licensed under the [MIT license](LICENSE).
