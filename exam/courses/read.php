<?php


function findAllCourses(){
    $pdo = new PDO('mysql:host=localhost;dbname=exam', 'exam', 'exam', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    $result = $pdo->query('SELECT * FROM courses');
    $courses= $result->fetchAll();
    return $courses;
}