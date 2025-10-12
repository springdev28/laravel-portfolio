<?php

    const title = "My Courses";

    $categories = array("Programming","Web Development","Database Analysis","Office");
    sort($categories);
    $courses = array(
        "1" => array(
            "title" => "Php Course",
            "subtitle" => "From zero to master: Web Development with Php",
            "image" => "php.jpeg",
            "date" => "23. 08. 2025",
            "comment" => "100",
            "like" => "300"
        )
        );
//extras
/*  
$course1_subtitle = ucfirst(strtolower($courses["1"]["subtitle"]));
$course1_subtitle = substr($courses["1"]["subtitle"], 0, 50)."...";
$course1_url = str_replace([" "],["-"],strtolower($courses["1"]["title"]));
*/
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
                    <a href="" class="list-group-item list-group-item-action active"><?php echo $categories[0]; ?></a>
                    <a href="" class="list-group-item list-group-item-action"><?php echo $categories[1]; ?></a>
                    <a href="" class="list-group-item list-group-item-action"><?php echo $categories[2]; ?></a>
                    <a href="" class="list-group-item list-group-item-action"><?php echo $categories[3]; ?></a>

                </div>
            </div>
            <div class="col-9">
                <h1 class="mb-3"><?php echo title; ?></h1>
                <p class="lead">
                    <?php echo count($courses); ?> courses listed in <?php echo count($categories); ?> categories.
                </p>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/<?php echo $courses["1"]["image"]; ?>" alt="" class="img-fluid rounded-start">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $course1_url; ?>">
                                        <?php echo $courses["1"]["title"]; ?></h5>
                                        
                                    </a>
                                <p class="card-text"><?php echo $courses["1"]["subtitle"]; ?></p>
                                <p>
                                    <span class="badge rounded-pill text-bg-primary">
                                        Like: <?php echo $courses["1"]["like"]; ?>
                                    </span>
                                    <span class="badge rounded-pill text-bg-danger">
                                        Comment: <?php echo $courses["1"]["comment"]; ?>
                                    </span>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </div> 

</body>
</html>