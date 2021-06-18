<?php


function findAllCourses(){
    $pdo = getPdo();
    $result = $pdo->query('SELECT * FROM courses');
    $courses= $result->fetchAll();
    return $courses;
}