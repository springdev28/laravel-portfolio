<?php

//var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") { //If this user has accessed this page using a POST request
    $name = htmlspecialchars($_POST['name']); //We retrieve the data from the form using the $_POST superglobal
    $surname = htmlspecialchars($_POST['surname']);
    $country = htmlspecialchars($_POST['country']);

    if (empty($name) or empty($surname) or empty($country)) {
        //If any of the fields are empty, we redirect the user back to the form with an error message
        header("Location: ../form.php?error=emptyfields");
        exit(); 
    }

    echo "Hello, " . $name . " " . $surname . " from " . $country . "!";

    header("Location: ../form.php"); //Redirect to the form page after processing

} else {
    //If the user accessed this page without using a POST request, we redirect them to the form page
    header("Location: ../form.php");
}
