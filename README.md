## Kick off local server
enable Docker engine
cd to server folder and copy `.env.example` and create `.env`, replace your environment variable value
```bash 
#Installing Composer Dependencies:
$ docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs

#Start server (default http://localhost:8081/ , base on your env config)
$ ./vendor/bin/sail up

#Create table
$ ./vendor/bin/sail artisan migrate

#Seed data
$ ./vendor/bin/sail artisan db:seed

```