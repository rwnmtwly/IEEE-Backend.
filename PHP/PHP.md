# PHP
## content:
1. [What Is PHP](#what-is-php).
1. [What Are The Three Main Types of Error in PHP](#what-are-the-three-main-types-of-error-in-php).
1. [Echo VS. Print](#echo-vs-print).
1. [Sensitivity in PHP](#sensitivity-in-php).
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

## Reference in order of their appearance:
1. [PHP](https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwj2hcq3ztqEAxWphf0HHUORAJMQFnoECAUQAQ&url=https%3A%2F%2Fwww.php.net%2Fmanual%2Fen%2Fintro-whatis.php&usg=AOvVaw2IJQ7Lnxf7GvJB63-57oy0&opi=89978449).
1. [Geeks For Geeks](https://www.geeksforgeeks.org/php-types-of-errors/).
1. [W3 Schools](https://www.w3schools.com/php/php_echo_print.asp).
1. [PHP Tutorial](https://www.phptutorial.net/php-tutorial/php-syntax/).
