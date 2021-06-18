<?php


function createCourse($description){
    $pdo = getPdo();
    $queryCreate = $pdo->prepare("INSERT INTO courses (description) VALUES(:description)");
    $queryCreate->execute(['description' =>$description]);
}