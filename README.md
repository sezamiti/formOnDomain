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

<h2>Вкратце о проекте:</h2>
<h3>1) Форма регистрации, а точнее валидация может работать и на клиенте и на сервере.По дефолту настроено на клиенте методом ajax.</h3>
<h3>2)Валидация настроена и тщательно протестирована. Регулярные выражения вставлены вручную.</h3>
<h3>3)Данные отправляются в базу(БД MySQL).</h3>
<h3>4)Письма отправляются через Smtp.</h3>
<br>
