# PHP 8.4 container with Composer

## Build
- `docker build -t php84 .`
- `docker run -itd --user app -v ./:/home/app/src --rm --name php84 php84`
- `docker exec -it php84 bash`

## Stoping
- `docker stop php84`
- `docker container rm php84`
- `docker image rm php84`
