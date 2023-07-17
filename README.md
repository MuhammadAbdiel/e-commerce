## Project Setup

### The first, we need to create `.env` file based on `.env.example` file, run command:
```
copy .env.example .env
```

### Then, we need to install packages that installed in composer, where that packages will be saved in `vendor` folder, run command:
```
composer install
```

### After that, next step is run that command:
```
php artisan key:generate
```
### This command will generate key to put in `APP_KEY` in `.env` file.

### Then, if this laravel application have a database, create a new database. Then, adjust `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` and `DB_HOST` in `.env` file.

### Next step is run that command:
```
php artisan migrate:fresh --seed
```

### Finally, to open the application in browser, run command:
```
php artisan serve
```
