# Laravel
## content:
1. [Request Lifecycle](#request-lifecycle).
1. [Facades](#facades).
3. [Laravel Routing](#laravel-routing).

---

## Request Lifecycle:
The request lifecycle in Laravel is the process a request goes through from the moment it hits your application to the point it receives a response. Here's a breakdown of the key stages:

1. **Entry Point:** All requests are directed to the `public/index.php` file by your web server configuration. This file acts as a starting point, loading the autoloader and retrieving the Laravel application instance.

2. **Kernels:** The incoming request is routed to either the HTTP kernel or the Console kernel depending on the request type (HTTP or console command). *The kernel is the central point for handling the request*.

3. **Service Providers:**  The kernel loads service providers which register essential application services like database connections, routing, and authentication. These providers configure and bootstrap the application.

4. **Routing:** Once the application is prepared, the request is handed over to the router. The router matches the request URI (URL) against defined routes to find the appropriate controller or closure to handle the request.

5. **Controller and Middleware:** The matched route might run middleware before reaching the controller. Middleware allows you to perform actions such as authentication or request manipulation before the controller processes the request logic.

6. **Controller Logic:** The controller method defined in the route handles the request logic, interacts with models and repositories, and prepares the data for the view.

7. **Views:** The controller may return a view which is a Blade template. Laravel compiles and renders the Blade template with the provided data to generate the HTML response.

8. **Response:** Finally, the generated HTML response is sent back to the user's browser through the web server.

---

## Facades:
Laravel facades serve as "static proxies" to underlying classes in the service container, providing the benefit of a terse, expressive syntax while maintaining more testability and flexibility than traditional static methods.  
In a Laravel application, a facade is a class that provides access to an object from the container. The machinery that makes this work is in the Facade class. Laravel's facades, and any custom facades you create, will extend the base `Illuminate\Support\Facades\Facade` class.  
```php
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
 
Route::get('/cache', function () {
    return Cache::get('key');
});
```

**When to use a facade:**  
Facades have many benefits. They provide a terse, memorable syntax that allows you to use Laravel's features without remembering long class names that must be injected or configured manually. Furthermore, because of their unique usage of PHP's dynamic methods, they are easy to test.

However, some care must be taken when using facades. The primary danger of facades is class "scope creep". Since facades are so easy to use and do not require injection, it can be easy to let your classes continue to grow and use many facades in a single class. Using dependency injection, this potential is mitigated by the visual feedback a large constructor gives you that your class is growing too large. So, when using facades, pay special attention to the size of your class so that its scope of responsibility stays narrow. If your class is getting too large, consider splitting it into multiple smaller classes.  

**Facades vs. Helper functions:**  
In addition to facades, Laravel includes a variety of "helper" functions which can perform common tasks like generating views, firing events, dispatching jobs, or sending HTTP responses. Many of these helper functions perform the same function as a corresponding facade.  
*There is absolutely no practical difference* between facades and helper functions. When using helper functions, you may still test them exactly as you would the corresponding facade.

---

## Laravel Routing:
In Laravel, all requests are mapped with the help of routes. Basic routing routes the request to the associated controllers.  
**Basic routing:**  
All the application routes are registered within the `app/routes.php` file. This file tells Laravel for the URIs it should respond to and the associated controller will give it a particular call.  
```php
//sample route for the welcome page:
Route::get ('/', function () {
   return view('welcome');});
```
**Route parameters:**
Sometimes in the web application, you may need to capture the parameters passed with the URL. For this, you should modify the code in routes.php file.  

**Required parameters:**  
These parameters are those which should be mandatorily captured for routing the web application. For example, it is important to capture the user’s identification number from the URL.  
```php
Route::get('ID/{id}',function($id) {
   echo 'ID: '.$id;
});
```  
**Optional parameters:**
Sometimes developers can produce parameters as optional and it is possible with the inclusion of `?` after the parameter name in URL. It is important to keep the default value mentioned as a parameter name.  
`Route::get('user/{name?}', function ($name = 'TutorialsPoint') { return $name;});`

**Named routes:**
Named routes allow a convenient way of creating routes. The chaining of routes can be specified using name method onto the route definition.  
`Route::get('user/profile', 'UserController@showProfile')->name('profile');`  
The user controller will call for the function **showProfile** with parameter as **profile**. The parameters use **name** method onto the route definition.

---

## References in order of appearance:
1. [Gemini](https://g.co/gemini/share/893cba455f26).
1. [Laravel](https://laravel.com/docs/11.x/facades).
1. [Tutorials point](https://www.tutorialspoint.com/laravel/laravel_routing.htm).