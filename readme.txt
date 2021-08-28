para automatizar el correo con cron desde terminal:
dar permisos chmod 777 a Email.php, la carpeta LOGS, y Email.txt
crontab -e
1
* * * * * php /var/www/html/PHP/Email.php  para frecuencia 1 minuto
0 0 * * * php /var/www/html/PHP/Email.php  para frecuencia 1 dia

