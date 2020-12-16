# svelte3 + slimphp4

Testing svelte3 + slimphp4

## Usage (example)

Build the image inside the *docker-nginx-php-fpm* folder:

```bash
$ docker build --tag nginxphp:74 .
```

Setup svelte:

```bash
$ npm install && npm run build
```

Setup slim:
```bash
$ docker run --rm -it -p 80:80 -v $(pwd):/var/www/html/000-default/ -w /var/www/html/000-default/ --user $(id -u):$(id -g) nginxphp:74 composer install
```

Run the server:

```bash
$ docker run --rm -it -p 80:80 -v $(pwd):/var/www/html/000-default/ -v $(pwd)/public:/var/www/html/000-default/webroot nginxphp:74
```
