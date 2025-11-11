<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta equaliv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, 
        initial-scale=1.0">

        <title>My Website</title>
    </head>
    <body>  
        <?php 
            echo $_SERVER["DOCUMENT_ROOT"];     // Accessing SERVER superglobal
            echo "<br>";
            echo $_SERVER['PHP_SELF'];          // Accessing SERVER superglobal
            echo "<br>";
            echo $_SERVER['SERVER_NAME'];    // Accessing SERVER superglobal
            echo "<br>";
            echo $_SERVER['REQUEST_METHOD'];    // Accessing SERVER superglobal
            echo "<br>";
            echo $_GET["name"];     // Accessing GET superglobal (for data in URL)
            echo $_GET["surname"];  
            echo "<br>";
            $_POST["name"];     // Accessing POST superglobal (for more secretive data submission)
            echo "<br>";
            echo $_REQUEST["name"];     // Accessing REQUEST superglobal (can handle both GET and POST, and COOKIE), not recommended for sensitive data since you don't know the source
            echo "<br>";
            echo $_FILES["name"];      // Accessing FILES superglobal (for file uploads)
            echo "<br>";
            echo $_COOKIE["name"];      // Accessing COOKIE superglobal (for data stored in browser)
            echo "<br>";
            echo $_SESSION["username"]="Bahar";     // Setting SESSION superglobal (for data stored on server between pages)
            echo "<br>";
            echo $_SESSION["username"];     // Accessing SESSION superglobal (for data stored on server between pages)
            echo "<br>";
            echo $_ENV["name"];     // Accessing ENV superglobal (for environment variables)
        ?>
    </body>
</html>