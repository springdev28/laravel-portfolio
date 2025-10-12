<?php
echo "<h1>PHP Functions Properties Showcase</h1>\n";

// 1. Basic Function Definition and Calling
echo "<h2>1. Basic Function Definition</h2>\n";
function greet($name) {
    return "Hello, $name!";
}

echo greet("John") . "<br>\n";
echo greet("Alice") . "<br>\n";

// 2. Functions with Multiple Parameters
echo "<h2>2. Functions with Multiple Parameters</h2>\n";
function calculateArea($length, $width) {
    return $length * $width;
}

echo "Area of rectangle (5 x 3): " . calculateArea(5, 3) . "<br>\n";
echo "Area of rectangle (10 x 7): " . calculateArea(10, 7) . "<br>\n";

// 3. Default Parameter Values
echo "<h2>3. Default Parameter Values</h2>\n";
function createMessage($name, $greeting = "Hello", $punctuation = "!") {
    return "$greeting, $name$punctuation";
}

echo createMessage("Bob") . "<br>\n";
echo createMessage("Carol", "Hi") . "<br>\n";
echo createMessage("David", "Good morning", ".") . "<br>\n";

// 4. Return Values and Types
echo "<h2>4. Return Values and Types</h2>\n";
function addNumbers($a, $b) {
    return $a + $b;
}

function isEven($number) {
    return $number % 2 == 0;
}

function getPersonInfo($name, $age) {
    return [
        'name' => $name,
        'age' => $age,
        'status' => $age >= 18 ? 'adult' : 'minor'
    ];
}

echo "Sum: " . addNumbers(5, 3) . "<br>\n";
echo "Is 6 even? " . (isEven(6) ? 'Yes' : 'No') . "<br>\n";
echo "Is 7 even? " . (isEven(7) ? 'Yes' : 'No') . "<br>\n";

$person = getPersonInfo("Emma", 25);
echo "Person: " . $person['name'] . ", Age: " . $person['age'] . ", Status: " . $person['status'] . "<br>\n";

// 5. Variable Scope
echo "<h2>5. Variable Scope</h2>\n";
$globalVar = "I'm global";

function demonstrateScope() {
    global $globalVar; // Access global variable
    $localVar = "I'm local";
    
    echo "Inside function - Global: $globalVar<br>\n";
    echo "Inside function - Local: $localVar<br>\n";
    
    return $localVar;
}

echo "Outside function - Global: $globalVar<br>\n";
$result = demonstrateScope();
echo "Returned from function: $result<br>\n";

// 6. Anonymous Functions (Closures)
echo "<h2>6. Anonymous Functions (Closures)</h2>\n";
$multiply = function($a, $b) {
    return $a * $b;
};

echo "Anonymous function result: " . $multiply(4, 5) . "<br>\n";

// Using anonymous function with array_map
$numbers = [1, 2, 3, 4, 5];
$squared = array_map(function($n) {
    return $n * $n;
}, $numbers);

echo "Squared numbers: " . implode(", ", $squared) . "<br>\n";

// 7. Arrow Functions (PHP 7.4+)
echo "<h2>7. Arrow Functions</h2>\n";
$divide = fn($a, $b) => $a / $b;
echo "Arrow function result: " . $divide(10, 2) . "<br>\n";

// Arrow function with array_filter
$evenNumbers = array_filter($numbers, fn($n) => $n % 2 == 0);
echo "Even numbers: " . implode(", ", $evenNumbers) . "<br>\n";

// 8. Recursive Functions
echo "<h2>8. Recursive Functions</h2>\n";
function factorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}

echo "Factorial of 5: " . factorial(5) . "<br>\n";
echo "Fibonacci number at position 7: " . fibonacci(7) . "<br>\n";

// 9. Variable Number of Arguments
echo "<h2>9. Variable Number of Arguments</h2>\n";
function sumAll(...$numbers) {
    return array_sum($numbers);
}

function formatString($template, ...$values) {
    return sprintf($template, ...$values);
}

echo "Sum of 1,2,3,4,5: " . sumAll(1, 2, 3, 4, 5) . "<br>\n";
echo "Sum of 10,20,30: " . sumAll(10, 20, 30) . "<br>\n";
echo formatString("Hello %s, you are %d years old!", "Frank", 30) . "<br>\n";

// 10. Function with Reference Parameters
echo "<h2>10. Function with Reference Parameters</h2>\n";
function increment(&$value) {
    $value++;
}

function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$number = 5;
echo "Before increment: $number<br>\n";
increment($number);
echo "After increment: $number<br>\n";

$x = 10;
$y = 20;
echo "Before swap: x=$x, y=$y<br>\n";
swap($x, $y);
echo "After swap: x=$x, y=$y<br>\n";

// 11. Function with Type Declarations
echo "<h2>11. Function with Type Declarations</h2>\n";
function calculateAverage(array $numbers): float {
    if (empty($numbers)) {
        return 0.0;
    }
    return array_sum($numbers) / count($numbers);
}

function validateEmail(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

$scores = [85, 92, 78, 96, 88];
echo "Average score: " . calculateAverage($scores) . "<br>\n";
echo "Is 'john@example.com' valid? " . (validateEmail('john@example.com') ? 'Yes' : 'No') . "<br>\n";
echo "Is 'invalid-email' valid? " . (validateEmail('invalid-email') ? 'Yes' : 'No') . "<br>\n";

// 12. Function with Nullable Types
echo "<h2>12. Function with Nullable Types</h2>\n";
function findUser(?string $name): ?array {
    if ($name === null) {
        return null;
    }
    
    // Simulate user lookup
    $users = [
        'john' => ['name' => 'John', 'age' => 25],
        'jane' => ['name' => 'Jane', 'age' => 30]
    ];
    
    return $users[strtolower($name)] ?? null;
}

$user1 = findUser('john');
$user2 = findUser('nonexistent');
$user3 = findUser(null);

echo "User 'john': " . ($user1 ? json_encode($user1) : 'Not found') . "<br>\n";
echo "User 'nonexistent': " . ($user2 ? json_encode($user2) : 'Not found') . "<br>\n";
echo "User null: " . ($user3 ? json_encode($user3) : 'Not found') . "<br>\n";

// 13. Function with Union Types (PHP 8.0+)
echo "<h2>13. Function with Union Types</h2>\n";
function processValue(string|int|float $value): string {
    if (is_string($value)) {
        return "String: " . strtoupper($value);
    } elseif (is_int($value)) {
        return "Integer: " . ($value * 2);
    } else {
        return "Float: " . round($value, 2);
    }
}

echo processValue("hello") . "<br>\n";
echo processValue(42) . "<br>\n";
echo processValue(3.14159) . "<br>\n";

// 14. Function with Named Arguments (PHP 8.0+)
echo "<h2>14. Function with Named Arguments</h2>\n";
function createPerson(string $name, int $age, string $city = "Unknown", string $country = "Unknown") {
    return [
        'name' => $name,
        'age' => $age,
        'city' => $city,
        'country' => $country
    ];
}

$person1 = createPerson(name: "Alice", age: 25, city: "New York");
$person2 = createPerson(age: 30, name: "Bob", country: "Canada");

echo "Person 1: " . json_encode($person1) . "<br>\n";
echo "Person 2: " . json_encode($person2) . "<br>\n";

// 15. Function with Return Type Declarations
echo "<h2>15. Function with Return Type Declarations</h2>\n";
function getStatus(int $age): string {
    if ($age < 13) {
        return "child";
    } elseif ($age < 20) {
        return "teenager";
    } elseif ($age < 65) {
        return "adult";
    } else {
        return "senior";
    }
}

function getGrades(array $scores): array {
    $grades = [];
    foreach ($scores as $score) {
        if ($score >= 90) {
            $grades[] = 'A';
        } elseif ($score >= 80) {
            $grades[] = 'B';
        } elseif ($score >= 70) {
            $grades[] = 'C';
        } else {
            $grades[] = 'F';
        }
    }
    return $grades;
}

echo "Age 15 status: " . getStatus(15) . "<br>\n";
echo "Age 25 status: " . getStatus(25) . "<br>\n";
echo "Age 70 status: " . getStatus(70) . "<br>\n";

$testScores = [85, 92, 78, 96, 88];
$gradeList = getGrades($testScores);
echo "Grades: " . implode(", ", $gradeList) . "<br>\n";

echo "<h2>Summary</h2>\n";
echo "This showcase demonstrates various PHP function properties including:<br>\n";
echo "- Basic function definition and calling<br>\n";
echo "- Parameters and return values<br>\n";
echo "- Default parameter values<br>\n";
echo "- Variable scope (global vs local)<br>\n";
echo "- Anonymous functions and closures<br>\n";
echo "- Arrow functions<br>\n";
echo "- Recursive functions<br>\n";
echo "- Variable number of arguments<br>\n";
echo "- Reference parameters<br>\n";
echo "- Type declarations<br>\n";
echo "- Nullable types<br>\n";
echo "- Union types<br>\n";
echo "- Named arguments<br>\n";
echo "- Return type declarations<br>\n";
?>
