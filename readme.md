# Display 2 layers of geodata with Highmaps

Use [Highmaps](http://www.highcharts.com/products/highmaps) to display a map of population densities in Europe by country/state with flags in the tooltip. This repo contains the final project built on Laravel 5.2, all steps are explained in [this](http://www.jmkleger.com/display-2-layers-of-geodata-with-highmaps) blog post.

## Installation

Make sure you have a running web server on your computer (for example xampp). Open your favorite CLI and move to the folder that will hold the project (typically C:\xampp\htdocs for xampp users). Then type the following commands: 

First clone the repo
```
git clone https://github.com/jeanquark/highmaps.git
```

Install all dependencies
```
composer install
```

Generate application key 
```
php artisan key:generate
```

Create a database that will hold countries and regional tables. You can do so with phpmyadmin.
Open the .env.example file, edit it to match your database name, username and password and save it as .env file. Then build tables with command

```
php artisan migrate
```

Now fill the tables
```
php artisan db:seed
```

Nice. You should be good to go. Open your web browser and go to the login page of the application project (if you followed above-mentioned directives with xampp, path is: http://localhost/highmaps/public).

## Features

1. Drilldown map with country/regional flags.

## Screenshots
![homepage](https://github.com/jeanquark/highmaps/raw/master/public/homepage.png "Homepage")

![login](https://github.com/jeanquark/highmaps/raw/master/public/homepage1.png "Login")

### License
Please refer to [Sentinel 2 The BSD 3-Clause License](https://github.com/cartalyst/sentinel/blob/2.0/LICENSE).
