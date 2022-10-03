FROM php:8.1.6-cli
COPY . /xampp/htdocs/DOCKERPILOT
WORKDIR /xampp/htdocs/DOCKERPILOT
CMD [ "php", "./index.php"]