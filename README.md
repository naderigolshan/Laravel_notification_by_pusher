This is a project with laravel8 in which a user can send message to another. These messages broadcast on public pusher channel and we have no authentication.

Change the following options in .env:

BROADCAST_DRIVER=pusher

PUSHER_APP_ID=1225603

PUSHER_APP_KEY=39a78924375bff90eb5a

PUSHER_APP_SECRET=9ebaac666cd01ea60289

PUSHER_APP_CLUSTER=mt1


Please see below files for more understanding:

1- web.php

2- SendMessage in events folder

3- messages.blade and form.blade in resource folder


For the beginning run these commands respectively:

1- composer require pusher/pusher-php-server

2- composer require laravel/ui

3- php artisan ui bootstrap

3- npm install

4- npm run dev

5- npm run prod


Run project on the localhost for "/form" link and open other page for "/messages" link side by side. If you send message through the form, You can see acheived messages on the other page. trace messages through pusher and console.log.



