
<?php 

require_once dirname(__FILE__)."/../access/db.php";
require_once "create.php";
require_once "read.php";
require_once "edit.php";
require_once "delete.php";


// on surveille ici POST ou GET, on vérifie les données et on appelle les function selon.

$courses = findAllCourses();
$isForEdit = false;
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
    $course_id = $_POST['course_id'];
    $description = $_POST['description_edit'];
    editCourse($course_id, $description);
    header("Location:index.php");
}
if(!empty($_POST['edit']) && $_POST['edit']=='editStart'){
    $isForEdit = true; 
}
if(isset(($_POST['deja_achete'])) && (($_POST['deja_achete'])== 0 || ($_POST['deja_achete'])== 1)){
    
    $course_id = $_POST['course_id'];
    $deja_achete= 1;
    if($_POST['deja_achete']){
        $deja_achete= 0;
    }
    
    $pdo = new PDO('mysql:host=localhost;dbname=exam', 'exam', 'exam', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    $querybool = $pdo->prepare("UPDATE courses SET deja_achete = :deja_achete WHERE id=:course_id");
    $querybool->execute(['course_id' =>$course_id, 'deja_achete' =>$deja_achete]);
    header("Location:index.php"); 
}