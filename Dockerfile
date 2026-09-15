FROM wordpress:php8.3-apache

# Render sets PORT; Apache listens on 10000 by default.
RUN sed -ri 's/Listen 80/Listen 10000/' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

COPY . /usr/src/wordpress/
