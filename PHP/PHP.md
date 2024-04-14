# PHP
## content:
1. [What Is PHP](#what-is-php).
1. [What Are The Three Main Types of Error in PHP](#what-are-the-three-main-types-of-error-in-php).
1. [Echo VS. Print](#echo-vs-print).
1. [Sensitivity in PHP](#sensitivity-in-php).
1. [Programming languages VS. Scripting languages](#programming-languages-vs-scripting-languages).
1. [Dynamically typed languages VS. Statically Typed languages](#dynamically-typed-languages-vs-statically-typed-languages).
1. [Assign by value VS. Assign by reference](#assign-by-value-vs-assign-by-reference).
1. [What are the different types of loop in PHP?](#what-are-the-different-types-of-loop-in-php).
1. [What is the difference between for and foreach loop in PHP?](#what-is-the-difference-between-for-and-foreach-loop-in-php).
1. [What are superglobals in PHP?](#what-are-superglobals-in-php).
1. [The Difference Between GET and POST Methods in PHP](#the-difference-between-get-and-post-methods-in-php).
1. [What are closures in PHP?](#what-are-closures-in-php).
1. [What are the steps to create a new database using PostgreSQL and PHP?](#what-are-the-steps-to-create-a-new-database-using-postgresql-and-php).
1. [What are cookies and how to create them in PHP?](#what-are-cookies-and-how-to-create-them-in-php).
1. [What is the difference between the include() and require() functions?](#what-is-the-difference-between-the-include-and-require-functions).
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
## What are the different types of loop in PHP?
PHP offers four main types of loops for repetitive tasks:

1. **For Loop:** 
   - Ideal for situations where you know the exact number of repetitions beforehand. 
   - It uses a counter variable that gets initialized, incremented/decremented, and checked against a condition to determine loop continuation.

2. **While Loop:** 
   - Executes a block of code as long as a specified condition is true. 
   - The condition is checked at the beginning of each iteration.

3. **Do-While Loop:** 
   - Similar to a while loop, but it executes the code block at least once before checking the condition. 
   - This ensures the code runs even if the condition is initially false.  

4. **Foreach Loop:** 
   - Specifically designed to iterate through elements in an array. 
   - It automatically retrieves each element in the array on each iteration.
---
## What is the difference between for and foreach loop in PHP?

The key differences between `for` and `foreach` loops in PHP lie in their purpose and functionality:

**For Loop:**

* **Purpose:** Used for a predetermined number of iterations. 
* **Functionality:** 
    * Employs a counter variable that's initialized, incremented/decremented, and checked against a condition.
    * The loop continues as long as the condition remains true.
    * Offers more control over the loop's behavior by allowing you to manage the counter variable explicitly.

**Foreach Loop:**

* **Purpose:** Designed specifically to iterate through elements in an array (or similar data structures like SplIterator).
* **Functionality:**
    * Automatically iterates through each element in the array on every loop.
    * Provides access to both the element's value and its key (for associative arrays).
    * Easier to use for simple array processing due to its built-in iteration mechanism.

Here's a table summarizing the key differences:

| Feature                 | For Loop                               | Foreach Loop                                    |
|--------------------------|-----------------------------------------|-------------------------------------------------|
| Purpose                  | Predetermined number of iterations      | Iterating through elements in arrays               |
| Counter Variable        | Explicitly managed (initialization, increment/decrement) | Automatic iteration through elements             |
| Access to Element Keys   | Not directly available                  | Available for associative arrays (key => value)   |
| Control over Loop        | More control through counter manipulation | Simpler for basic array processing              |

**Choosing the Right Loop:**

* Use a `for` loop when you know the exact number of iterations needed and require control over the counter variable.
* Use a `foreach` loop when you want to iterate through elements in an array and potentially access their keys.
---

## What are superglobals in PHP?
Superglobals in PHP are predefined variables that are always accessible, regardless of scope. They are built-in variables provided by the PHP language itself, and they contain useful information such as form input data, server and execution environment information, session data, and more. Superglobals are available in all scopes throughout a PHP script, including inside functions, classes, and methods.

The most commonly used superglobals in PHP are:

1. $_GET: Contains variables passed to the current script via URL parameters (HTTP GET method).
2. $_POST: Contains variables passed to the current script via HTTP POST method, usually from a form submission.
3. $_REQUEST: Combines the contents of $_GET, $_POST, and $_COOKIE arrays.
4. $_COOKIE: Contains variables passed to the current script via HTTP Cookies.
5. $_SESSION: Contains session variables available to the current script.
6. $_SERVER: Contains information about the server and execution environment.
7. $_FILES: Contains information about uploaded files via HTTP POST method.
8. $_ENV: Contains variables passed to the current script via the environment method.
9. $GLOBALS: Contains a reference to all variables available in the global scope of the script.
---

## The Difference Between GET and POST Methods in PHP:


| Feature                | GET Method                                              | POST Method                                               |
|------------------------|---------------------------------------------------------|-----------------------------------------------------------|
| Sending Information    | Sends information by appending to the page request URL | Transfers information via HTTP header                      |
| URL Visibility         | Form information is visible in the URL                  | Form information is not visible in the URL                |
| Information Amount     | Limited amount of information is sent (less than 1500 characters) | Unlimited amount of information is sent                  |
| Usage                  | Helps to send non-sensitive data                        | Helps to send sensitive data (passwords, binary data, and uploading files) |
| Security               | Not very secure                                         | More secure                                               |
| Bookmarking the Page  | Possible to bookmark the page                           | Not possible to bookmark the page                         |

---

## What are closures in PHP?
The closure is a function assigned to a variable, so you can pass it around. A closure is a separate namespace, normally, you can not access variables defined outside of this namespace. That's why we use the *use* keyword, which allows us to access the succeeding variables inside the colsure.

A closure encapsulates its scope, meaning that it has no access to the scope in which it is defined or executed. It is, however, possible to inherit variables from the parent scope (where the closure is defined) into the closure with the use keyword

---

## What are the steps to create a new database using PostgreSQL and PHP?

To create a new database using PostgreSQL and PHP, you can follow these steps:

1. **Install PostgreSQL**: Ensure that PostgreSQL is installed on your server or local machine. You can download and install it from the official PostgreSQL website if it's not already installed.

2. **Install PHP PostgreSQL Extension (optional)**: If you haven't already, you may need to install the PHP PostgreSQL extension. On many systems, this extension is already included with PHP. If not, you can install it using your package manager or by compiling PHP with PostgreSQL support.

3. **Connect to PostgreSQL**: In your PHP script, establish a connection to the PostgreSQL database using `pg_connect()` or `PDO`.

    ```php
    // Using pg_connect()
    $dbconn = pg_connect("host=localhost dbname=mydatabase user=myuser password=mypassword");
    
    // Using PDO
    $dsn = "pgsql:host=localhost;dbname=mydatabase;user=myuser;password=mypassword";
    $pdo = new PDO($dsn);
    ```

    Replace `localhost`, `mydatabase`, `myuser`, and `mypassword` with your PostgreSQL server details.

4. **Execute SQL Command to Create Database**: Use the SQL command `CREATE DATABASE` to create a new database.

    ```php
    // Using pg_query()
    pg_query($dbconn, "CREATE DATABASE mynewdatabase");
    
    // Using PDO
    $pdo->exec("CREATE DATABASE mynewdatabase");
    ```

    Replace `mynewdatabase` with the name you want to give to your new database.

5. **Close Database Connection**: It's good practice to close the database connection when you're done with it.

    ```php
    // Using pg_close()
    pg_close($dbconn);
    
    // Using PDO (optional)
    $pdo = null;
    ```

6. **Error Handling**: Make sure to handle errors properly, especially when executing SQL commands. Check for errors returned by PostgreSQL functions or catch exceptions if using PDO.

Here's a complete example:

```php
<?php
// Connect to PostgreSQL
$dbconn = pg_connect("host=localhost dbname=mydatabase user=myuser password=mypassword");

// Check connection
if (!$dbconn) {
    die("Connection failed: " . pg_last_error());
}

// Create a new database
$result = pg_query($dbconn, "CREATE DATABASE mynewdatabase");
if (!$result) {
    die("Error creating database: " . pg_last_error($dbconn));
}

echo "Database created successfully";

// Close connection
pg_close($dbconn);
?>
```

This script connects to an existing PostgreSQL database (`mydatabase`), creates a new database (`mynewdatabase`), and then closes the connection. It also handles errors gracefully.

---

## What are cookies and how to create them in PHP?

A cookie in PHP is a small file with a maximum size of 4KB that the web server stores on the client computer. They are typically used to keep track of information such as a username that the site can retrieve to personalize the page when the user visits the website next time. A cookie can only be read from the domain that it has been issued from. Cookies are usually set in an HTTP header but JavaScript can also set a cookie directly on a browser.

   * **Setting Cookie In PHP:** To set a cookie in PHP, the setcookie() function is used. The setcookie() function needs to be called prior to any output generated by the script otherwise the cookie will not be set.
   `setcookie(name, value, expire, path, domain, security);`

   * **Checking Whether a Cookie Is Set Or Not:** It is always advisable to check whether a cookie is set or not before accessing its value. Therefore to check whether a cookie is set or not, the PHP `isset()` function is used.

   * **Accessing Cookie Values:** For accessing a cookie value, the PHP `$_COOKIE` superglobal variable is used. It is an associative array that contains a record of all the cookies values sent by the browser in the current request. The records are stored as a list where the cookie name is used as the key.

   * **Deleting Cookies:** The `setcookie()` function can be used to delete a cookie. For deleting a cookie, the `setcookie()` function is called by passing the cookie name and other arguments or empty strings but however this time, the expiration date is required to be set in the *past*.

---

## What is the difference between the include() and require() functions?

| Feature                                      | include()                                                  | require()                                                  |
|----------------------------------------------|------------------------------------------------------------|------------------------------------------------------------|
| Error Handling                               | The `include()` function does not stop the execution of the script even if any error occurs.                        | The `require()` function will stop the execution of the script when an error occurs.                                    |
| Fatal Error                                  | The `include()` function does not give a fatal error.       | The `require()` function gives a fatal error.                                                                            |
| Usage                                        | The `include()` function is mostly used when the file is not required and the application should continue to execute its process when the file is not found. | The `require()` function is mostly used when the file is mandatory for the application.                                 |
| Error Reporting                              | The `include()` function will only produce a warning (E_WARNING) and the script will continue to execute.            | The `require()` function will produce a fatal error (E_COMPILE_ERROR) along with the warning and the script will stop its execution. |
| Recommendation                               | The `include()` function generates various functions and elements that are reused across many pages, taking a longer time for the process completion. | The `require()` function is more in recommendation and considered better whenever we need to stop the execution in case of the unavailability of the file. It also saves time by avoiding unnecessary inclusions and generations. |

---


## Reference in order of their appearance:
1. [PHP](https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwj2hcq3ztqEAxWphf0HHUORAJMQFnoECAUQAQ&url=https%3A%2F%2Fwww.php.net%2Fmanual%2Fen%2Fintro-whatis.php&usg=AOvVaw2IJQ7Lnxf7GvJB63-57oy0&opi=89978449).
1. [Geeks For Geeks](https://www.geeksforgeeks.org/php-types-of-errors/).
1. [W3 Schools](https://www.w3schools.com/php/php_echo_print.asp).
1. [PHP Tutorial](https://www.phptutorial.net/php-tutorial/php-syntax/).
1. [Geeks For Geeks](https://www.geeksforgeeks.org/whats-the-difference-between-scripting-and-programming-languages/).
1. [Stack Overflow](https://stackoverflow.com/questions/1517582/what-is-the-difference-between-statically-typed-and-dynamically-typed-languages).
1. [ChatGPT](https://chat.openai.com/share/f7c8941c-5c16-409a-99bf-b7391d6ec5c0).
1. W3Schools.
1. [Gemini](https://g.co/gemini/share/bd1117448007).
1. [GeeksForGeeks](https://www.geeksforgeeks.org/php-superglobals/).
1. [W3School](https://www.w3schools.com/php/php_superglobals.asp).
1. [Difference Between](https://www.differencebetween.com/difference-between-get-and-post-method-in-php/).
1. [StackOverflow](https://stackoverflow.com/questions/1065188/in-php-what-is-a-closure-and-why-does-it-use-the-use-identifier).
1. [PHP](https://www.php.net/manual/en/class.closure.php).
1. ChatGPT.
1. [GeeksForGeeks](https://www.geeksforgeeks.org/php-cookies/).
1. [GeeksForGeeks](https://www.geeksforgeeks.org/difference-between-require-and-include-in-php/).

