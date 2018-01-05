# Laravel Stack

Basic Docker stack to run Laravel application. 

This document assumes you have [Docker](https://docs.docker.com/engine/installation/) and [Docker Compose](https://docs.docker.com/compose/install/) already installed. 

This docker-compose yaml allows you to quickly spin up containers to support: 

- MySQL permament data storage
- Redis to support PHP sessions & cache
- PHP-FPM 7.0 backend with Supervisord support for scheduled tasks
- Nginx frontend with GooglePage Speed alghorithm 
- Blackfire application profiler

## How To

1. Clone this repository
`git clone https://github.com/markhilton/laravel-stack.git`

2. Change folder
`cd laravel-stack`

3. Install Laravel
`composer create-project --prefer-dist laravel/laravel laravel`

4. Start up the stack
`docker-compose up -d`

5. Open your browser and navigate to: 
`http://localhost`

You're done!

**IMPORTANT NOTICE:** PHP-FPM container is configured by environment variable `.php-fpm.env` to automatically run pending migrations on start.

## NewRelic app monitoring integration

NewRelic extension is already installed in php-fpm backend container.
You can configure required newrelic.appname and newrelic.license inside `configs/php.pool.conf` file or add `configs/newrelic.php` script at the top of your `laravel/bootstrap/app.php`.

## Blackfire app profiler integration

Create your free account at `https://blackfire.io/` to obtain your 
```
BLACKFIRE_SERVER_ID
BLACKFIRE_SERVER_TOKEN
```

and update `.blackfire.env` environment file.

## Read more

More information about public containers used:
- [Nginx container](https://hub.docker.com/r/crunchgeek/nginx-pagespeed/)
- [PHP-FPM container](https://hub.docker.com/r/crunchgeek/php-fpm/)
