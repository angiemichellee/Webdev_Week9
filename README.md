# Webdev_Week9

**Laptop Store** — a Laravel CRUD app (Web Development, Modul 3).
This submission adds the **Update** feature using **Route Model Binding**.

## Features
- List laptops (`GET /`)
- Add a laptop (`GET /create-laptop`, `POST /save-laptop`)
- **Edit / update a laptop with Route Model Binding** (`GET /edit-laptop/{laptop}`, `PUT /update-laptop/{laptop}`)
- Delete a laptop (`POST /delete-laptop`)

## Route Model Binding
The route parameter `{laptop}` has the same name as the type-hinted `Laptop $laptop`
in `LaptopController@edit` and `LaptopController@update`, so Laravel automatically
loads the laptop with that id from the database (or returns 404 if it doesn't exist).

## Main files
- `routes/web.php`: routes
- `app/Http/Controllers/LaptopController.php`: controller (`edit`, `update`)
- `app/Http/Requests/UpdateLaptopRequest.php`: validation for update
- `app/Models/Laptop.php`: model
- `resources/views/edit-laptop.blade.php`: edit form
- `resources/views/list-laptop.blade.php`: list with Edit / Hapus buttons

## Run locally
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```
