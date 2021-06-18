<?php


function createCourse($description){
    $pdo = new PDO('mysql:host=localhost;dbname=exam', 'exam', 'exam', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    $queryCreate = $pdo->prepare("INSERT INTO courses (description) VALUES(:description)");
    $queryCreate->execute(['description' =>$description]);
}