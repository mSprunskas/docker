# PHP 8.2 container with Composer

## Build
- `docker build -t php82 .`
- `docker run -itd --user app -v ./:/home/app/src --rm --name php82 php82`
- `docker exec -it php82 bash`

## Build
- Build container `docker compose up`
- Enter container `docker exec -it php82 bash`
