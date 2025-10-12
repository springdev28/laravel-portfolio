<?php

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