FROM ridibooks/cms
COPY .env /var/www/html
WORKDIR /var/www/html

VOLUME /var/tmp/session
ADD php.ini /usr/local/etc/php/php.ini

RUN make
