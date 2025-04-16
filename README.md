## About TestApp


## Installation (backend)

1. Open your project folder
2. Install all required packages
```
composer install
```
4. Create **.env** file from **.env.example** in the root folder and fill all configurations inside it (APP_, DB_, etc.).
5. Generate new application key
```
php artisan key:generate
```
6. Run to import all DB migrations and fill DB with test data
```
php artisan protokit:migrate
```
7. Install Telescope
```
php artisan telescope:install
```
8. Run all tests
```
php artisan protokit:test
```


## Folders structure

Main folders you need:

-   **app** - contains Laravel core files and custom starter-kit's classes.
-   **modules** - made for project modules. Each module can have it's own migrations, models, resources, etc.
-   **http** - working with HTTP requests. All folders inside are separated by application sections. Each section can have it's own controllers, requests, routes, feature tests, etc. If you want you can use custom model for admin and public parts using inheritance of model from **modules** folder.

