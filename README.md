Form for domain on laravel 
1)Run "composer update"
2)Rename .env.example to .env
3)Run "php artisan key:generate"
4)Set Database name as you like
5)Set Mail
6)Run XAMPP  and open link "http://localhost/phpmyadmin/" and create database
7)Run "php artisan migrate"
8)Run "php artisan serve"

MAIL_MAILER=smtp
MAIL_HOST=post.mail.kz
MAIL_PORT=587
MAIL_USERNAME= your login
MAIL_PASSWORD= your password
MAIL_ENCRYPTION=TLS
