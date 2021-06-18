<?php


function deleteCourse($course_id){
    $pdo = new PDO('mysql:host=localhost;dbname=exam', 'exam', 'exam', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    $queryDelete = $pdo->prepare("DELETE FROM courses WHERE id=:course_id");
    $queryDelete->execute(['course_id' =>$course_id]);
}