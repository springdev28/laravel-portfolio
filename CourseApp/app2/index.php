<?php

    const title = "My Courses";

    $course1_title = "Php Course";
    $course1_subtitle = "From zero to master: Web Development with Php";
    $course1_image = "php.jpeg";
    $course1_date = "23. 08. 2025";
    $comment1_count = "100";
    $like1_count = "300";

    $course1_subtitle = ucfirst(strtolower($course1_subtitle));
    $course1_subtitle = substr($course1_subtitle, 0, 50)."...";
    $course1_url = str_replace([" "],["-"],strtolower($course1_title));
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
        <h1 class="mb-3"><?php echo title; ?></h1>
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $course1_image; ?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $course1_url; ?>">
                                <?php echo $course1_title; ?></h5>
                                
                            </a>
                        <p class="card-text"><?php echo $course1_subtitle; ?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Like: <?php echo $like1_count; ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Comment: <?php echo $comment1_count; ?>
                            </span>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> 

</body>
</html>