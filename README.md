# guestbook-2023

Requirements
------------

* Docker

Installation
------------

1. Clone the following repository

```bash
$ git clone https://github.com/abitiusca/guestbook-2023.git
```

2. Go to the project directory and execute following command

```bash
$ docker-compose build
```

3. Run the following command
```bash
$ docker-compose up -d
```
3. Let's start the application by running these commands:

```bash
$ docker exec -it php81-container bash
$ composer install
$ php bin/console doctrine:database:create
$ php bin/console doctrine:migrations:migrate
```
5. Usage
-----

1. Open a browser
2. Go to http://localhost:8080/
3. All the functionalities of the Guestbook project should be available starting from this page
4. The default credentials for the applications are:
```
   email: administrator@gmail.com
    pass: admin
```