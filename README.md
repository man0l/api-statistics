# Setup the environment

## Edit your hosts file with the following:

`<your IP> api-stats.local`

## Generate composer lock & setup autoloader

`composer install`
`composer dump`

## Build the docker php fpm container

`docker-compose build`

## Run docker compose

`docker-compose up`