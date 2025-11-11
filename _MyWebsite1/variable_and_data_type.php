<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta equaliv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, 
        initial-scale=1.0">
        <title>Variables and Data Types in PHP</title>
    </head>
    <body>
        <?php
            // PHP starts with <?php 

            // Scalar Data Types (Contains single value)
                $string = "Bahar";  // String (default to "")
                $integer = 16;  // Integer (default to 0)
                $float = 19.99; // Float (default to 0.0)
                $boolean = true;    // Boolean (default to false)
        
            // Arrays (default to array() or [])
                $fruits = array("Apple", "Banana", "Cherry");   // Old way
                $fruits = ["Apple", "Banana", "Cherry"];    // New way (since PHP 5.4)
                echo $fruits[1]; // Outputs: Banana

            // Objects (default to null)
                $object = new Car();
                class Car {
                    public $color;
                    public $model;

                    public function __construct($color, $model) {
                        $this->color = $color;
                        $this->model = $model;
                    }

                    public function message() {
                        return "My car is a " . $this->color . " " . $this->model . ".";
                    }
                }

                $myCar = new Car("black", "Toyota");
                echo $myCar->message();

            // Output
                echo "Hello, world!";
                print "Another way to print";

            // Comments
                // Single-line comment
                /* Multi-line
                comment */

            // Strings
                $text1 = 'Hello';
                $text2 = "World";
                echo $text1 . " " . $text2;       // Concatenation
                echo "Hello, $name";              // Interpolation (works with double quotes only)

            // Arithmetic Operators
                $a = 10;
                $b = 3;
                echo $a + $b;  // Addition
                echo $a - $b;  // Subtraction
                echo $a * $b;  // Multiplication
                echo $a / $b;  // Division
                echo $a % $b;  // Modulus

            // Conditional Statements
                if ($age >= 18) {
                    echo "Adult";
                } elseif ($age >= 13) {
                    echo "Teenager";
                } else {
                    echo "Child";
                }

            /*
            Comparison Operators
                == equal
                === identical (value + type)
                != not equal
                !== not identical
                > greater than, < less than
                >= greater or equal, <= less or equal

                Logical Operators
                && AND
                || OR
                ! NOT
            */

            // and ends with
        ?>
    </body>
</html>
