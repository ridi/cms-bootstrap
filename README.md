## Prerequisites

1. docker
2. docker-compose

## How to use

1. `make build`
2. `docker-compose up`
3. `open http://admin.dev.ridi.com`

### Clean up

1. `docker-compose down`
2. Remove docker images.

## TODO
- [ ] Delete untagged docker images.
- [ ] Fix check_config.sh to work with docker image.
- [ ] Replace cms-admin with ridibooks/cms-admin.
- [ ] Use a preset for couchbase.
