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
1. Run phinx to create initial db.
  - `vendor/bin/phinx migrate`
  - `vendor/bin/phinx seed:run`
1. Open `http://admin.dev.ridi.com/example/home`
1. Clean up with `docker-compose down`.
