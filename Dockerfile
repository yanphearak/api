FROM lorisleiva/laravel-docker:7.2
WORKDIR /api
COPY .  /api
RUN composer update
CMD php artisan --host=0.0.0.0 serve
