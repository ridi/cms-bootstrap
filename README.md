# CMS-Bootstrap
[![Packagist](https://img.shields.io/packagist/v/ridibooks/cms-bootstrap.svg)](https://packagist.org/packages/ridibooks/cms-bootstrap)

## Overview
This is the skeleton project of RIDI CMS service.
You can use this for your new applications.

## Install
Use [Composer](https://getcomposer.org) to create of a new project:
```
composer create-project ridi/cms-bootstrap path/to/your/project
```

## Structure
```
cms-bootstrap
│
├──src
│   └── Controller
│        └── ( .. Routers )
├──view
│   └── ( .. twigs ) 
├──web
│   └── index.php
│
├──.env   ─> Environment variables. Dotenv loads this. (See index.php)
│ 
├──phinx  ─> Phinx resources.
│
├──docker
│   ├── cms
│   │    └── .env   ┬> Set DB endpoint on these.
│   ├── cms-admin   │
│   │    └── .env   ┘
│   ├── couchbase
│   ├── mariadb
│   └── haproxy
│        └── config
│             └──haproxy.cfg  ┐ 
│                             │
├──docker-compose.yml  ───────┴> Edit these if you need to add more contaners.
│
...
```


## Run with Docker Compose
You can make up local dev environment using [Docker Compose](https://docs.docker.com/compose/install). Follow the steps below.

1. Set an alias `admin.dev.ridi.com` for localhost. (For example, write it to /etc/hosts)
1. Run docker-compose.
  - `docker-compose up`
1. Set Database.
    - If you want to create new one, run phinx to create initial db.
      - `vendor/bin/phinx migrate`
      - `vendor/bin/phinx seed:run`
    - or to use exiting one, write the db endpoint on service/cms/.env
      ```
      MYSQL_HOST=yourhost
      MYSQL_USER=yourid
      MYSQL_PASSWORD=yourpassword
      MYSQL_DATABASE=yourdb
      ```
1. Build the skeleton codes. 
  - `composer install`
1. Open `http://admin.dev.ridi.com`
1. Clean up after all.
  - `docker-compose down`.
