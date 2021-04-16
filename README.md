<p align="center">

![Platform Logo](https://github.com/mariamelfeky/Tech-Task-Laravel/blob/master/public/img/logo.png?raw=true)

</p>
<h2 align="center">
Online News Platform Application
</h2>
<p align="center">
PHP , Laravel , Bootstrap
</p>

## Description

<p>
A news platform that is based on news agencies, It calls their daily news.
I used json files as endpoint to call it and read data.
</p>

## Clone or download

```terminal
$ git clone https://github.com/mariamelfeky/Tech-Task-Laravel.git
```

## Website Screenshots

<h4 align="center">Home Page</h4>

![Home Page](https://github.com/mariamelfeky/Tech-Task-Laravel/blob/master/public/img/home.PNG?raw=true)

<h4 align="center"> Daily News</h4>

![Daily News](https://github.com/mariamelfeky/Tech-Task-Laravel/blob/master/public/img/news.PNG?raw=true)

<h4 align="center"> Latest News </h4>

![Latest News](https://github.com/mariamelfeky/Tech-Task-Laravel/blob/master/public/img/latest.PNG?raw=true)

<h4 align="center"> Top Rating</h4>

![Top Rating](https://github.com/mariamelfeky/Tech-Task-Laravel/blob/master/public/img/top.PNG?raw=true)

<h4 align="center"> Oldest News </h4>

![Oldest News](https://github.com/mariamelfeky/Tech-Task-Laravel/blob/master/public/img/oldest.PNG?raw=true)

## Prerequirements

-   [PHP](https://www.php.net/downloads.php)
-   [Composer](https://getcomposer.org/)
-   [Node](https://nodejs.org/en/download/)
-   [npm](https://nodejs.org/en/download/package-manager/)

### Start

```terminal
$ cd Tech-Task-Laravel     // go to app folder
$ composer install         // install required
$ copy .env.example .env   // copy .env.example file to root folder (Windows)
$ cp .env.example .env     // copy .env.example file to root folder (Linux)
$ php artisan key:generate // generate key
$ php artisan serve        // run it locally
Go to http://localhost:8000/index

```

### Dependencies(tech-stacks)

-   php: ^7.3|^8.0
-   laravel/framework: ^8.12
-   laravel/ui: ^3.2
-   bootstrap: ^4.6.0

## Author

Mariam Elfeky

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
