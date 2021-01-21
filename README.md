# poc_laravel_app_using_vuejs_and_laravel_passport
Proof of concept of a laravel web app using vuejs and laravel passport

----------- 
Commands used in scaffolding  on this implementation

Based on 

https://laravel.com/docs/7.x/frontend

1. composer require laravel/ui:^2.4
2. php artisan ui vue --auth
3. npm install & npm run dev  (To compile ..\webpack.mix.js)

Installing laravel passport I face this issue:
https://stackoverflow.com/questions/63877920/laravel-passport-cannot-install
1. composer require laravel/passport "^9.0"
2. php artisan migrate
3. php artisan passport:install  

Another good tutorial
https://webomnizz.com/laravel-passport-working-with-authentication-scope-and-permission/


To fix this issue: rait 'Illuminate\Database\Eloquent\Factories\HasFactory' not found
>>  composer dumpautoload