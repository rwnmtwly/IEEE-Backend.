# Object Oriented PHP
## Content:
1. [Encapsulation & Abstraction](#encapsulation--abstraction).
1. [Inheritance](#inheritance).
1. [PHP Interfaces & Polymorphism](#php-interfaces--polymorphism).
1. [PHP Traits](#php-traits).


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
## Refernces in order of their appearance:
1. [Stack Overflow](https://stackoverflow.com/questions/15176356/difference-between-encapsulation-and-abstraction).
1. [Geeks for Geeks](https://www.geeksforgeeks.org/what-is-inheritance-in-php/).
1. ChatGPT.
1. [PHP](https://www.php.net/manual/en/language.oop5.traits.php).