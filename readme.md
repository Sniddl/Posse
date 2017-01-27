# Sniddl-Posse #
## Take control of your posse ##
Get up and running with a blank Laravel project faster than ever!!
This project already has the following setup for you:

* Authentication

* Roles

* Permissions

* Node_modules

* Gulp

* Bootstrap Alpha

* Separated Head Blade Template

* Separated Footer Blade Template

----
## How to Install: ##

Clone the repository

Install Composer Dependencies

```
composer install
```

Install Node Dependencies
```
npm install
```

Create an App Key
```
php artisan key:generate
```

Run Migrations
```
php artisan migrate
```
----
## Create Permission: ##
```
$permission = new Permission;

$permission->name = "assign tasks";
$permission->label = "In charge of assigning tasks";
$permission->save()
```
----
## Create Role: ##
```
$role = new Role;

$role->name = "manager";
$role->label = "site manager";
$role->save()
```
----
## Assign Permission: ##
```
$permission = Permission::first();
$role = Role::first();

$role->allowedTo($permission);
```
----
## Assign Role: ##
```
$user = User::first();
$user->isA('manager');
```
----
## Roles in Blade: ##
```
@can('assign tasks')
    <h1>User can assign tasks</h1>
@endcan
```