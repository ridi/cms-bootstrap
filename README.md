# CMS-Bootstrap
[![Packagist](https://img.shields.io/packagist/v/ridibooks/cms-bootstrap.svg)](https://packagist.org/packages/ridibooks/cms-bootstrap)

## Overview
This is the skeleton project of RIDI CMS service.
You can use this for your new applications.

## Install
Use [Composer](https://getcomposer.org) to create of a new project.
```bash
composer create-project ridibooks/cms-bootstrap path/to/your/project
```

## Run with Docker Compose
You can make up local dev environment using [Docker Compose](https://docs.docker.com/compose/install). Follow the steps below.

1. Set an alias `admin.dev.ridi.com` for localhost. (For example, write it to /etc/hosts)

2. Install packages and set default env.
```bash
make install
```

3. Run CMS base services via docker-compose.
```bash
make cms-up
```

4. Start example app.
```bash
make run
```

5. Set Database.
  - If you use docker-compose, run phinx to create initial db.
  - It can fail immediately after the DB is started. Try again in a few seconds.
  ```bash
  make cms-db
  ```

  - or to use exiting one, write the db endpoint on cms-docker-compose/docker/cms/.env
  ```bash
  MYSQL_HOST=yourhost
  MYSQL_USER=yourid
  MYSQL_PASSWORD=yourpassword
  MYSQL_DATABASE=yourdb
  ```

6. Open `http://admin.dev.ridi.com`

7. Clean up after all.
```bash
make cms-down
```
