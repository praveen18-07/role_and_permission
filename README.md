Now, we require to install the Spatie package for ACL; that way, we can use its method. Also, we will install the form collection package. So, open your terminal and run the below command.
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
composer require spatie/laravel-permission

php artisan migrate

First, you need to install the laravel/ui package as shown below:
-------------------------------------------------------------------
composer require laravel/ui

Install NPM:
-------------
npm install

Run NPM:
-------------
npm run build

we have to run the below command to execute the PermissionTableSeeder and CreateAdminUserSeeder seeder:
---------------------------------------------------------------------------------------------------------
php artisan db:seed --class=PermissionTableSeeder

php artisan db:seed --class=CreateAdminUserSeeder

