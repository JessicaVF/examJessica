<?php


function editCourse($course_id, $description){
    $pdo = getPdo();
    $queryEdit = $pdo->prepare("UPDATE courses SET description = :description WHERE id=:course_id");
    
    $queryEdit->execute(['course_id' =>$course_id, 'description' =>$description]);
    
}