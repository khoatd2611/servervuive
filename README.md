## Kick off local server
enable Docker engine
cd to server folder and copy `.env.example` and create `.env`, replace your environment variable value
```bash 
#Installing Composer Dependencies 
$ ./vendor/bin/sail composer install

#Start server (default http://localhost:8081/ , base on your env config)
$ ./vendor/bin/sail up

#Create table
$ ./vendor/bin/sail artisan migrate

#Seed data
$ ./vendor/bin/sail artisan db:seed

```