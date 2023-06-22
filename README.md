
**php version 7.4**
**mysql version 5.7**
 
**Geting Started**

  

composer install

configure mysql database in .env file
example
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cpi_db
DB_USERNAME=root
DB_PASSWORD=

RUN php artisan migrate

RUN php artisan serve