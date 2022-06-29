#!/bin/bash

ENV_FILE="./src/.env"

if [ ! -f ${ENV_FILE} ]; then
    cp ${ENV_FILE}.example ${ENV_FILE}
    docker-compose --env-file ${ENV_FILE} up -d
    docker exec app composer install
    docker exec app php artisan migrate
    docker exec app php artisan db:seed
else
    echo "Debes crear el archivo .env en ${ENV_FILE}"
fi