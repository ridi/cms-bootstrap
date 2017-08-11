## Overview
It helps building local dev environment of RIDI CMS using `docker-compose`.
See [docker-compose.yml](docker-compose.yml) for detail.


## Prerequisites
1. docker ([install](https://docs.docker.com/engine/installation))
2. docker-compose ([install](https://docs.docker.com/compose/install))
3. composer

## Install
```
composer create-project ridibooks/cms-bootstrap <SET-PROJECT-NAME>
```


## Usage
```
cms-sdk
├──service
│   ├── cms
│   │    └── .env
│   │         └────> Edit DB endpoint on here.
│   ├── cms-admin
│   ├── example ───> This is a service for example.
│   ├── couchbase
│   ├── mariadb
│   └── haproxy
│        └── config
│             └──haproxy.cfg ─┐ 
├──docker-compose.yml ────────┴─> Edit these files to add a service.
...
```


## Quick Start
1. Assume that you set an alias `admin.dev.ridi.com` for localhost. (For example, write it to /etc/hosts)
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
1. (optional) Build the example. 
  - `composer install -d service/example`
1. Open `http://admin.dev.ridi.com`
1. Clean up after all.
  - `docker-compose down`.


## How to add your web app
