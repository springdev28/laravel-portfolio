<?php
    require "libs/variables.php";
    require "libs/functions.php";
?>

<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>

<div class="container my-3">

    <div class="row">

            <div class="col-12">
                <form action="register.php" method="post">
                    <div class="mb-3">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="repassword">Confirm password</label>
                        <input type="password" name="repassword" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
            
    </div>
</div> 
<?php include "partials/_footer.php" ?>