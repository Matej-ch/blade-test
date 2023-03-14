php artisan serve

php artisan migrate

php artisan make:model Book -msfc

(migration, seed, factory, controller)


php artisan tinker 
    >  App\Models\Book::factory()->count(25)->create();
    >  App\Models\User::factory()->count(5)->create();
