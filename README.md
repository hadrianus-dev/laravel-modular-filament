## About

This app is a starting point for modular development in Php using the Laravel and Filament framework.

If necessary, consult the documentation of the packages used in this project:

- [Laravel Modules](https://github.com/nWidart/laravel-modules).
- [Filament Modules](https://github.com/savannabits/filament-modules).

## Usuge


after cloning the repository, do the following:

```bash
composer update
```

### Create your laravel module:
If the module that you want to work on does not exist, create it using nwidart/laravel-modules

```bash
php artisan module:make Blog # Create the blog module
```

### Generate a new Panel inside your module

```bash
php artisan module:make-filament-panel admin Blog # php artisan module:make-filament-panel [id] [module]
```
If none of the two arguments are passed, the command will ask for each of them interactively.
In this example, if the Panel id passed is `admin` and the module is blog, the command will generate a panel with
id `blog::admin`. This ID should be used in the next step when generating resources, pages and widgets.

### Generate your resources, pages and widgets as usual, selecting the panel you just created above.
From here on, use filament as you would normally to generate `resources`, `Pages` and `Widgets`. Be sure to specify the `--panel` option as the ID generated earlier.
If the `--panel` option is not passed, the command will ask for it interactively.
```bash
# For each of these commands, the package will ask for the Model and Panel.
php artisan make:filament-resource
php artisan make:filament-page
php artisan make:filament-widget
```

```bash
# The Model and Panel arguments are passed inline
php artisan make:filament-resource Author blog::admin
php artisan make:filament-page Library blog::admin
php artisan make:filament-widget BookStats blog::admin
```
