<?php


function editCourse($course_id, $description){
    $pdo = new PDO('mysql:host=localhost;dbname=exam', 'exam', 'exam', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    $queryEdit = $pdo->prepare("UPDATE courses SET description = :description WHERE id=:course_id");
    
    $queryEdit->execute(['course_id' =>$course_id, 'description' =>$description]);
    
}