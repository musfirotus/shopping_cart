# Notes
## Eloquent Steps
* Create Model
  + Terminal
    ```bash
    php artisan make:model <NamaModel> -m
    ```
    > '-m' to create migration file at the same time.
  + Output
    ```bash
    Model created successfully.
    Created Migration: 2020_10_18_082104_create_products_table
    ```
  + Edit schema in migration file.
* Create Seeder
  + Terminal
    ```bash
    php artisan make:seed ProductTableSeeder
    ```
  + Output
    ```bash
    Seeder created successfully
    ```
  + Edit seeder file
  + Edit model file
  + Edit seeder file (fill in the data)
  + Edit DatabaseSeeder.php file and include the created seeder
* Migrate
  + Terminal
    ```bash
    php artisan migrate
    ```
    > This will create table in our database.
  + Output
    ```bash
    Migrated: 2020_10_18_082104_create_products_table
    ```
* Run Seed
  + Terminal
    ```bash
    php artisan db:seed
    ```
    > This will run all of the seed and
    >
    > Add the data to the related table in database
  + Output
    ```bash
    Seeded: ProductTableSeeder
    ```
* Create Controller
  + Terminal
    ```bash
    php artisan make:controller <NamaController>
    ```
  + Output
    ```bash
    Controller created successfully
    ```