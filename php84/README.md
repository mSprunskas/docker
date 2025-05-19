# PHP 8.4 container with Composer

## Build
- `docker build -t php84 .`
- `docker run -itd --user app -v ./:/home/app/src --rm --name php84 php84`
- `docker exec -it php84 bash`


