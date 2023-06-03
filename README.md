

## Install command

sudo snap install redisinsight

php artisan make:controller BookController --resource --model=Models/Book

php artisan make:migration create_books_table

php artisan make:factory BookFactory --model=Models/Book

php artisan migrate

sudo php artisan db:seed

sudo php artisan make:event BookCreated

php artisan make:listener BookCreatedListener --event=BookCreated


## Description

There have redis implement two way.

first way using Post module. redis implement on post controller.

second way using Book module. implement by using event and listener technique