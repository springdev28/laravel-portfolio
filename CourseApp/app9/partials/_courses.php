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