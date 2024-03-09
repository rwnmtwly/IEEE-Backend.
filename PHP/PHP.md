# PHP
## content:
1. [What Is PHP](#what-is-php).
1. [What Are The Three Main Types of Error in PHP](#what-are-the-three-main-types-of-error-in-php).
1. [Echo VS. Print](#echo-vs-print).
1. [Sensitivity in PHP](#sensitivity-in-php).
1. [Programming languages VS. Scripting languages](#programming-languages-vs-scripting-languages).
1. [Dynamically typed languages VS. Statically Typed languages](#dynamically-typed-languages-vs-statically-typed-languages).
---

## What Is PHP: 

PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.

---
## What Are The Three Main Types of Error in PHP:

1. **Parse error**: or Syntax Error: It is the type of error done by the programmer in the source code of the program. The syntax error is caught by the compiler. After fixing the syntax error the compiler compile the code and execute it. Parse errors can be caused dues to unclosed quotes, missing or Extra parentheses, Unclosed braces, Missing semicolon etc.
2. **Fatal Error**: It is the type of error where PHP compiler understand the PHP code but it recognizes an undeclared function. This means that function is called without the definition of function.
3. **Warning Errors** : The main reason of warning errors are including a missing file. This means that the PHP function call the missing file.
4. **Notice Error**: It is similar to warning error. It means that the program contains something wrong but it allows the execution of script.
---

## Echo VS. Print:
echo and print are more or less the same. They are both used to output data to the screen. The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument.
### Echo:
The `echo` statement can be used with or without parentheses: `echo` or `echo()`.

**Example:**
``` php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
```

### Print:
The `print` statement can be used with or without parentheses: `print` or `print()`.

**Example:**
```php
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
```
---
## Sensitivity in PHP:
PHP is partially case-sensitive. PHP constructs, function names, class names are case-insensitive, whereas variables are case-sensitive. A statement ends with a semicolon (;). Whitespace and line breaks don't matter in PHP; do leverage them to make the code more readable.

---

## programming languages VS. Scripting languages:
All scripting languages are programming languages. The theoretical difference between the two is that scripting languages do not require the compilation step and are rather interpreted. For example, normally, a C program needs to be compiled before running whereas normally, a scripting language like JavaScript or PHP need not be compiled.

|Programming language|Scripting language|
|:-------|:---------|
|A Programming language is a language which is used by humans to navigate their communication with computers.|A scripting language is a language that uses a naive method to bring codes to a runtime environment|
|Programming languages are of three types -:<ul><li>low-level Programming language</li><li>Middle-level Programming language</li><li>High-level Programming language</li></ul>|These are made for a particular runtime environment.|
|Programming languages are used to write computer programs.|They are used to create dynamic web applications.|
|They are high-speed languages.|Scripting languages contain different libraries|
|Example -: C++, Java, PHP High-level etc.|Example -: Bash, Ruby, Python, JavaScript etc.|
|Programming languages are translation free languages|Scripting languages can be easily ported among various operating systems.|
|These languages are self executable.|These languages requires a host.|
|These generate .exe files.|Do not create a .exe file.|
|Most of the programming languages are compiled languages.|Most of the scripting languages are interpreted language.|
|Not all the programming languages are scripting languages.|All the scripting languages are programming languages.|
|It can take significant amount of time to learn.|It is easier to learn than programming language.|
|It is code intensive.|It is less code intensive when compared with programming language.|
|It does creates binary files.|It does not create any binary files.|
|It is difficult for the beginner to write and understand the code.|It is easy for the beginner to write and understand the code.|
|It is independently run.|It is run inside another program.|
|It needs numerous lines of code.|It needs lesser line of codes.|
|It has high maintenance cost.|It has low maintenance cost.|

---
## Dynamically typed languages VS. Statically typed languages:
**Dynamically typed languages:** 

A language is dynamically typed if the type is associated with run-time values, and not named variables/fields/etc. This means that you as a programmer can write a little quicker because you do not have to specify types every time (unless using a statically-typed language with type inference).

Examples: Perl, Ruby, Python, PHP, JavaScript, Erlang

Most dynamically typed languages do allow you to provide type information, but do not require it. One language that is currently being developed, Rascal, takes a hybrid approach allowing dynamic typing within functions but enforcing static typing for the function signature.

**Statically typed languages:**
A language is statically typed if the type of a variable is known at compile time. For some languages this means that you as the programmer must specify what type each variable is; other languages (e.g.: Java, C, C++) offer some form of type inference, the capability of the type system to deduce the type of a variable (e.g.: OCaml, Haskell, Scala, Kotlin).

The main advantage here is that all kinds of checking can be done by the compiler, and therefore a lot of trivial bugs are caught at a very early stage.

Examples: C, C++, Java, Rust, Go, Scala

Most scripting languages have this feature as there is no compiler to do static type-checking anyway, but you may find yourself searching for a bug that is due to the interpreter misinterpreting the type of a variable. Luckily, scripts tend to be small so bugs have not so many places to hide.

---
## Assign by value VS. Assign by reference:
||By value|By reference|
|:------------|:---------|:-------|
|Meaning:|In this approach, the value of a variable is copied to another variable. Any changes made to the original variable do not affect the copied variable, and vice versa.| Here, instead of copying the value, a reference or pointer to the original variable is passed. Any changes made to the original variable reflect in all variables referencing it.|
|Memory Usage:|Requires additional memory because a copy of the value needs to be created.|Typically more memory-efficient because it doesn't require copying the entire value, just a reference to it.|
|Performance:|Can be slower for large data structures because of the need to copy values.|Generally faster as it doesn't involve copying data.|
|Mutability:|Changes made to the copied variable do not affect the original variable. The original remains immutable.|Changes made to any variable referencing the original affect the original variable as well. They are mutable.|
|Scope:|Each variable has its own independent copy of the value. Changes in one variable do not affect other variables.|All variables referencing the same memory location share the same value. Changes in one variable affect others referencing the same value.|
|Usage:|Often used when you want to work with independent copies of data, preserving the original.|Commonly used when you want multiple parts of your program to access and possibly modify the same data without making copies.|
|Examples:|Primitive data types in many languages are assigned by value, such as integers and floating-point numbers.|Objects, arrays, and other complex data structures are often assigned by reference in languages like JavaScript and Python.|

---

## Reference in order of their appearance:
1. [PHP](https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwj2hcq3ztqEAxWphf0HHUORAJMQFnoECAUQAQ&url=https%3A%2F%2Fwww.php.net%2Fmanual%2Fen%2Fintro-whatis.php&usg=AOvVaw2IJQ7Lnxf7GvJB63-57oy0&opi=89978449).
1. [Geeks For Geeks](https://www.geeksforgeeks.org/php-types-of-errors/).
1. [W3 Schools](https://www.w3schools.com/php/php_echo_print.asp).
1. [PHP Tutorial](https://www.phptutorial.net/php-tutorial/php-syntax/).
1. [Geeks For Geeks](https://www.geeksforgeeks.org/whats-the-difference-between-scripting-and-programming-languages/).
1. [Stack Overflow](https://stackoverflow.com/questions/1517582/what-is-the-difference-between-statically-typed-and-dynamically-typed-languages).
1. [ChatGPT](https://chat.openai.com/share/f7c8941c-5c16-409a-99bf-b7391d6ec5c0).
