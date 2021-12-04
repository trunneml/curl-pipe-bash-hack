FROM php:apache
RUN a2enmod rewrite
COPY src/ /var/www/html/
RUN chmod +w /var/www/html/pwned.txt