This is a project with laravel8 in which a user can send message to another. These messages broadcast on public pusher channel and we have no authentication.
Please see below files for more understanding:

web.php
SendMessage in events folder
messages.blade and form.blade in resource folder

For the beginning run these commands respectively:

1- composer require pusher/pusher-php-server
2- composer require laravel/ui
3- php artisan ui bootstrap
3- npm install
4- npm run dev
5- npm run prod

Run project on the localhost for "/form" link and open other page for "/messages" link side by side. If you send message through the form, You can see acheived messages on the other page. trace messages through pusher and console.log.



