<?php

    const title = "My Courses";

    $categories = array("Programming","Web Development","Database Analysis","Office","Mobile Apps");
    
    $courses = array(
        "1" => array(
            "title" => "Php Course",
            "subtitle" => "From zero to master: Web Development with Php",
            "image" => "php.jpeg",
            "date" => "23. 08. 2025",
            "comment" => 0,
            "like" => 10,
            "permission" => true
        )
        );

    function newCourse(&$courses, $title, $subtitle, $image, $date, $comment=0, $like=0, $permission=true){
        global $courses;
        $newCourse[count($courses)+1] = array(
            "title" => $title,
            "subtitle" => $subtitle,
            "image" => $image,
            "date" => $date,
            "comment" => $comment,
            "like" => $like,
            "permission" => $permission
        );
        $courses = array_merge($courses, $newCourse);
    }

    newCourse($courses,"THIS IS A TITLE","This is a subtitle","php.jpeg","04.03.2009");

    function getUrl($title){
        return str_replace([" ","@","."],["-","","-"],strtolower($title));
    }

    function subTit($subtitle){
        if (strlen($subtitle) > 50){
            echo substr($subtitle, 0, 50)."...";
        }
        else {
            return $subtitle;
        }    
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.7/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
    
    <div class="container my-3">

        <div class="row">

            <div class="col-3">
                <div class="class list-group">
                    <?php for ($i = 0; $i < count($categories); $i++): ?>

                        <a href="" class="list-group-item list-group-item-action"><?php echo $categories[$i]; ?></a>

                    <?php endfor ?>

                </div>
            </div>
            <div class="col-9">
                <h1 class="mb-3"><?php echo title; ?></h1>
                <p class="lead">
                    <?php echo count($courses); ?> courses listed in <?php echo count($categories); ?> categories.
                </p>
                <?php foreach($courses as $key => $course): ?>
                    <?php if ($course["permission"]): ?>
                        <div class="card mb-3">
                                            <div class="row">
                                                <div class="col-4">
                                                    <img src="img/<?php echo $course["image"]; ?>" alt="" class="img-fluid rounded-start">
                                                </div>
                                                <div class="col-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            <a href="<?php echo getUrl($course["title"]); ?>">
                                                                <?php echo $course["title"]; ?></h5>
                                                                
                                                            </a>
                                                        <p class="card-text">
                                                            <?php echo subTit($course["subtitle"]); ?>  
                                                        </p>
                                                        
                                                        <p>
                                                            <?php if ($course["like"]>0): ?>
                                                                <span class="badge rounded-pill text-bg-primary">
                                                                    <?php echo $course["like"]; ?> Likes
                                                                </span>
                                                            <?php endif ?>
                                                            <?php if ($course["comment"]>0): ?>
                                                                <span class="badge rounded-pill text-bg-danger">
                                                                    <?php echo $course["comment"]; ?> Comments
                                                                </span>
                                                            <?php else: ?>
                                                                <spa class="badge rounded-pill text-bg-warning">
                                                                    Write the first comment!
                                                                </spa>
                                                            <?php endif ?>
                                                        </p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    <?php endif ?>
                <?php endforeach ?>

                
                
            </div>
            
        </div>
        
    </div> 

</body>
</html>