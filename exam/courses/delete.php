<?php


function deleteCourse($course_id){
    $pdo = getPdo();
    $queryDelete = $pdo->prepare("DELETE FROM courses WHERE id=:course_id");
    $queryDelete->execute(['course_id' =>$course_id]);
}