## Prerequisites

1. docker
2. docker-compose

## How to use

1. `make build`
2. `docker-compose up`
3. Configure Couchbase at http://admin.dev.ridi.com:8091. And create `session` bucket. 
- See https://developer.couchbase.com/documentation/server/4.5/install/init-setup.html
4. `open http://admin.dev.ridi.com`

### Clean up

1. `docker-compose down`
2. Remove docker images.

## TODO
- [ ] Delete untagged docker images.
- [ ] Fix check_config.sh to work with docker image.
- [ ] Make a preset for Couchbase to simplify the configuration.
