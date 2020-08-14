# Simple Laravel MySQL App

## How to run
### Clone code
```
git clone https://github.com/tetsis/simple-laravel-mysql-app.git
cd simple-laravel-mysql-app
```

### MySQL
This app is requred MySQL connection.
For example, you can use docker-compose to run MySQL process.

```
cd mysql
docker-compose up -d
cd ..
```

### Laravel
You should install [composer](https://getcomposer.org/) command.

```
composer install
cp .env.example .env
php artisan key:generate
```

### Migration
```
php artisan migrate
```

### Run
```
php artisan serve --host 0.0.0.0
```

See `http://(server address):8000/hello` by your web browser.
