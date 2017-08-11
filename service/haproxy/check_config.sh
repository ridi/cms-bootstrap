#!/bin/bash
docker run -it -v ${PWD}/config:/usr/local/etc/haproxy --rm --name haproxy-syntax-check \
  --add-host cms_main:127.0.0.1 \
  --add-host cms_admin:127.0.0.1 \
  --add-host cms_example:127.0.0.1 \
  haproxy haproxy -c -f /usr/local/etc/haproxy/haproxy.cfg