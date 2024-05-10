# Object Oriented PHP
## Content:
1. [Encapsulation & Abstraction](#encapsulation--abstraction).
1. [Inheritance](#inheritance).
1. [PHP Interfaces & Polymorphism](#php-interfaces--polymorphism).
1. [PHP Traits](#php-traits).
1. [Error Handling In PHP](#error-handling-in-php).
1. [Late Static Binding & How It Works](#late-static-binding--how-it-works).


## Encapsulation & Abstraction:
|**Abstraction**|**Enclapsulation**|
|:--------------|:-----------------|
|Encapsulation hides variables or some implementation that may be changed so often in a class to prevent outsiders access it directly. They must access it via getter and setter methods|Abstraction is used to hide something too, but in a higher degree (class, interface). Clients who use an abstract class (or interface) do not care about what it was, they just need to know what it can do|
|Solves the problem in the design level|Solves the problem in the implementation level|
|Used for hiding the unwanted data and giving the relevant data.|Means hiding the code and data into a single unit to protect the data from the outside world|
|lets you focus on what the object does instead of how it does it|Means hiding the internal details or mecahnics of how an object does something|
---

## Inheritance:
A class (subclass or child class) can inherit properties and methods from another class (superclass or parent class). It enables code reusability and promotes hierarchical relationships between classes.
``` php
// Parent class
class Animal {
    public $species;

    public function sound() {
        return "Animal makes a sound.";
    }
}

// Child class inheriting from Animal
class Dog extends Animal {
    public function sound() {
        return "Dog barks.";
    }
}
```
The child class inherits all public and protected properties and methods from the parent class.  
**Accessing Parent Class Members:**  
Child classes can access parent class properties and methods using the `parent::` keyword.

PHP supports *single* inheritance where a class can inherit from *only one* parent class, but does not support *multiple* inheritance where a class can inherit from *multiple* parent classes *simultaneously*.

---
## PHP Interfaces & Polymorphism:
### Interfaces:

An interface in PHP defines a contract for classes to implement. It specifies a set of method signatures that implementing classes must adhere to. However, it does not contain the implementation details of those methods. 

Here's a basic example of an interface definition:

```php
interface Shape {
    public function calculateArea();
    public function calculatePerimeter();
}
```

Classes that implement this interface must provide implementations for the `calculateArea()` and `calculatePerimeter()` methods:

```php
class Circle implements Shape {
    public function calculateArea() {
        // Implementation for calculating the area of a circle
    }

    public function calculatePerimeter() {
        // Implementation for calculating the perimeter of a circle
    }
}

class Rectangle implements Shape {
    public function calculateArea() {
        // Implementation for calculating the area of a rectangle
    }

    public function calculatePerimeter() {
        // Implementation for calculating the perimeter of a rectangle
    }
}
```

### Polymorphism:

Polymorphism is the ability of different objects to respond to the same message (method call) in different ways. In PHP, polymorphism is achieved through method overriding.

Using the same example above, we can demonstrate polymorphism:

```php
function printArea(Shape $shape) {
    echo "Area: " . $shape->calculateArea();
}

$circle = new Circle();
$rectangle = new Rectangle();

printArea($circle); // Output will be the area of the circle
printArea($rectangle); // Output will be the area of the rectangle
```

Here, the `printArea()` function can accept any object that implements the `Shape` interface. It calls the `calculateArea()` method on each object, and the appropriate implementation is invoked based on the type of object passed.

This flexibility allows for writing more generic code that can work with various implementations of the same interface, promoting code reusability and maintainability.

---
## PHP Traits:
Traits are a mechanism for code reuse in single inheritance languages such as PHP. A Trait is intended to reduce some limitations of single inheritance by enabling a developer to reuse sets of methods freely in several independent classes living in different class hierarchies. The semantics of the combination of Traits and classes is defined in a way which reduces complexity, and avoids the typical problems associated with multiple inheritance and Mixins.

A Trait is similar to a class, but only intended to group functionality in a fine-grained and consistent way. It is not possible to instantiate a Trait on its own. It is an addition to traditional inheritance and enables horizontal composition of behavior; that is, the application of class members without requiring inheritance. 

**Example:**  
```php

<?php
trait ezcReflectionReturnInfo {
    function getReturnType() { /*1*/ }
    function getReturnDescription() { /*2*/ }
}

class ezcReflectionMethod extends ReflectionMethod {
    use ezcReflectionReturnInfo;
    /* ... */
}

class ezcReflectionFunction extends ReflectionFunction {
    use ezcReflectionReturnInfo;
    /* ... */
}
?>
```
---
## Error Handling In PHP:
Certainly! Error handling in PHP involves managing errors, warnings, and notices that occur during the execution of a PHP script. PHP provides several mechanisms for handling errors:

1. **Error Reporting**: PHP allows you to control the level of error reporting using the `error_reporting()` function or by setting configurations in `php.ini` file. You can specify which types of errors PHP should report.

2. **Display Errors**: You can control whether errors are displayed to the user or logged to a file using the `display_errors` directive in `php.ini`.

3. **Error Logging**: PHP provides `error_log()` function to log errors to a file or other destinations like syslog or a database.

4. **Try...Catch Blocks**: PHP supports exceptions for handling errors in object-oriented code. You can use `try`, `catch`, and `finally` blocks to handle exceptions gracefully.

    ```php
    try {
        // Code that may throw an exception
    } catch (Exception $e) {
        // Handle the exception
    } finally {
        // Optional cleanup code, runs whether or not an exception occurred
    }
    ```

5. **Custom Error Handling**: You can define custom error handlers using the `set_error_handler()` function to handle errors in a custom way, such as logging or displaying a custom error page.

    ```php
    function customErrorHandler($errno, $errstr, $errfile, $errline) {
        // Handle the error
    }
    set_error_handler("customErrorHandler");
    ```

6. **Exception Handling**: You can create custom exception classes by extending the built-in `Exception` class. This allows you to throw and catch specific types of exceptions.

    ```php
    class CustomException extends Exception {
        public function errorMessage() {
            // Custom error message
        }
    }
    ```

7. **Error Suppression**: You can suppress errors using the `@` symbol before an expression, but it's generally not recommended as it can lead to silent failures and debugging issues.

    ```php
    $result = @some_function(); // Error suppression
    ```

When handling errors in PHP, it's important to strike a balance between providing useful feedback to developers for debugging and preventing sensitive information from being exposed to end-users. Additionally, error handling practices should be consistent and thorough across your codebase.

---
## Late Static Binding & How It Works:
 More precisely, late static bindings work by storing the class named in the last "non-forwarding call". In case of static method calls, this is the class explicitly named (usually the one on the left of the `::` operator); in case of non static method calls, it is the class of the object. A "forwarding call" is a static one that is introduced by `self::`, `parent::`, `static::`, or, if going up in the class hierarchy, forward_static_call(). The function get_called_class() can be used to retrieve a string with the name of the called class and `static::` introduces its scope.

This feature was named "late static bindings" with an internal perspective in mind. "Late binding" comes from the fact that `static::` will not be resolved using the class where the method is defined but it will rather be computed using runtime information. It was also called a "static binding" as it can be used for (but is not limited to) static method calls.

**Limitations of** `self::`  
Static references to the current class like `self::` or `__CLASS__` are resolved using the class in which the function belongs, as in where it was defined.

**Late Static Bindings' usage**   
Late static bindings tries to solve that limitation by introducing a keyword that references the class that was initially called at runtime. Basically, a keyword that would allow referencing B from test() in the previous example. It was decided not to introduce a new keyword but rather use static that was already reserved. 

---
## Refernces in order of their appearance:
1. [Stack Overflow](https://stackoverflow.com/questions/15176356/difference-between-encapsulation-and-abstraction).
1. [Geeks for Geeks](https://www.geeksforgeeks.org/what-is-inheritance-in-php/).
1. ChatGPT.
1. [PHP](https://www.php.net/manual/en/language.oop5.traits.php).
1. [PHP](https://www.php.net/manual/en/language.oop5.late-static-bindings.php).
1. ChatGPT.