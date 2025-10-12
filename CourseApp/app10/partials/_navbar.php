<?php

    if (!empty($_GET["q"])){
        $keyword = $_GET["q"];

        $courses = array_filter($courses, function($course) use ($keyword){
            return stristr($course["title"], $keyword) or stristr($course["subtitle"], $keyword);
        });
    }
?>


<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container">
        <a href="/" class="navbar-brand">CourseApp</a>
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a href="/" class="nav-link active">Homepage</a>
            </li>
            <li class="nav-item">
                <a href="/" class="nav-link">Courses</a>
            </li>
        </ul>

        <ul class="navbar-nav me-2">
            <li class="nav-item">
                <a href="login.php" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
                <a href="register.php" class="nav-link">Register</a>
            </li>
        </ul>

        <form action="index.php" class="d-flex" method="get">
            <input type="text" name="q" class="form-control me-2" placeholder="Keyword">
            <button type="submit" class="btn btn-warning">Search</button>
        </form>
    </div>
</nav>