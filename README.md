## Prerequisites
1. docker ([install](https://docs.docker.com/engine/installation))
2. docker-compose ([install](https://docs.docker.com/compose/install))

## Quick Start
1. Set a domain name of 127.0.0.1 in /etc/hosts. (ex: admin.dev.ridi.com) It can be used to a session cockie domain or a redirect url.
2. Start with `docker-compose up`, and clean up with `docker-compose down`.
3. Setup Couchbase (**Only first time**)
  - Configure Couchbase at http://admin.dev.ridi.com:8091.
  - Create `session` bucket. 
  - See https://developer.couchbase.com/documentation/server/4.5/install/init-setup.html
4. `open http://admin.dev.ridi.com`

## TODO
- [ ] Delete untagged docker images.
- [ ] Fix check_config.sh to work with docker image.
- [ ] Make a preset for Couchbase to simplify the configuration.
