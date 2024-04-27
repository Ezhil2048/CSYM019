FROM php:8.2-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "./your-script.php" ]
$ docker build -t my-php-app .
$ docker run -it --rm --name my-running-app my-php-app