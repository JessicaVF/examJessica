
<?php 

require_once dirname(__FILE__)."/../access/db.php";
require_once "create.php";
require_once "read.php";
require_once "edit.php";
require_once "delete.php";


// on surveille ici POST ou GET, on vérifie les données et on appelle les function selon.

$courses = findAllCourses();

if(!empty($_POST['delete']) && $_POST['delete']=='delete'){
    $course_id= $_POST['course_id'];
    deleteCourse($course_id);
    header("Location:index.php");
}

if(!empty($_POST['create']) && $_POST['create']=='create'){
    $description = $_POST['description'];
    createCourse($description);
    header("Location:index.php");
}
if(!empty($_POST['edit']) && $_POST['edit']=='edit'){
    echo "yes";
    $course_id = $_POST['course_id'];
    $description = $_POST['description_edit'];
    editCourse($course_id, $description);
    //header("Location:index.php");
}