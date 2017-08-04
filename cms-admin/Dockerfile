FROM ridibooks/performance-apache-base:latest
MAINTAINER Kang Ki Tae <kt.kang@ridi.com>

RUN sed -i '/DocumentRoot \/var\/www\/html/aAlias \/super \/var\/www\/html' /etc/apache2/sites-available/000-default.conf

RUN rm -rf /var/www/html
RUN git clone https://github.com/ridibooks/cms-admin.git /var/www/html

WORKDIR /var/www/html
RUN make
