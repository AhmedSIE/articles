
## articles ##
 
### Installation ###
 
Add Articles to your composer.json file to require Articles :
```
    require : {
        "laravel/framework": "6.0.*",
        "ahmedsie/articles": "dev-master"
    }
```
 
Update Composer :
```
    composer update
```
 
The next required step is to add the service provider to config/app.php :
```
    'Ahmedsie\Articles\ArticlesServiceProvider::class',
```
 
### Publish ###
 
The last required step is to publish views and assets in your application with :
```
    php artisan vendor:publish
```
 
Congratulations, you have successfully installed Articles !
