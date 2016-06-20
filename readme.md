# Display 2 layers of geodata with Highmaps

Use [Highmaps](http://www.highcharts.com/products/highmaps) to display a map of population densities in Europe by country/state with flags in the tooltip. This repo contains the final project built on top of Laravel 5.2, and all steps are explained in [this](http://www.jmkleger.com/display-2-layers-of-geodata-with-highmaps) blog post.

## Installation

Make sure you have a running web server on your computer (for example xampp). Open your favorite CLI and move to the folder that will hold the project (typically C:\xampp\htdocs for xampp users). Then type the following commands: 

First clone the repo
```
git clone https://github.com/jeanquark/highmaps.git
```

cd to the newly created folder and install all dependencies
```
composer install
```

Create a database that will hold countries and regional tables (you can do so with phpmyadmin).
Open the .env.example file, edit it to match your database name, username and password and save it as .env file. Then build tables with command

```
php artisan migrate
```

Now fill in the tables
```
php artisan db:seed
```

Generate application key 
```
php artisan key:generate
```

Nice. You should be good to go. Open your web browser and go to the login page of the application project (if you followed above-mentioned directives with xampp, path is: http://localhost/highmaps/public).

## Features

1. Drilldown map with country/regional flags. Please note that I only included regional data for France, Germany and Switzerland.

## Screenshots
![homepage](https://github.com/jeanquark/highmaps/raw/master/public/homepage.png "Homepage")

Once your click on a country, you obtain the country regional data:
![login](https://github.com/jeanquark/highmaps/raw/master/public/homepage2.png "Login")
