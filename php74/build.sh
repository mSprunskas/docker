docker build -t php74demo .
docker run -itd --user app -v ./:/home/app/src --rm --name php74demo php74demo
