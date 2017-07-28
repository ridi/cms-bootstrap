FROM ridibooks/cms-admin
COPY .env /var/www/html
WORKDIR /var/www/html

ADD php.ini /usr/local/etc/php/php.ini

RUN make
