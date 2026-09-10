FROM wordpress:php8.3-apache

RUN sed -ri 's/Listen 80/Listen 0.0.0.0:10000/g; s/<VirtualHost \*:80>/<VirtualHost 0.0.0.0:10000>/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

RUN printf '%s\n' \
'RewriteEngine On' \
'RewriteCond %{HTTP_HOST} !^localhost' \
'RewriteCond %{HTTP:X-Forwarded-Proto} =https' \
'RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [R=301,L]' \
> /etc/apache2/conf-available/render-https.conf \
&& a2enconf render-https

COPY wp-config.php /usr/src/wordpress/wp-config.php
COPY wp-content/ /usr/src/wordpress/wp-content/
COPY .htaccess /usr/src/wordpress/.htaccess

EXPOSE 10000