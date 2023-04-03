`php artisan serve` start local server

`php artisan migrate` apply migrations

`php artisan make:model Book -msfc` (migration, seed, factory, controller)

`php artisan make:migration add_cover_to_books_table --table=books` creat new migration file

`php artisan db:seed` seed database, by default runs Database\Seeders\DatabaseSeeder

`php artisan migrate:fresh --seed` fresh migration + seed database

php artisan tinker
> App\Models\Book::factory()->count(25)->create();
>
> App\Models\User::factory()->count(5)->create();


`php artisan make:component Alert` make blade component

`php artisan list` show available commands

free laravel series https://laracasts.com/series/laravel-8-from-scratch
