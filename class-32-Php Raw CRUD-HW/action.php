<?php
require_once 'vendor\autoload.php';

use App\classes\Home;
use App\classes\Student;

$student =new Student();

if(isset($_GET['page']))
{
    if($_GET['page']=='home'){
        include 'pages/home.php';
    }
    elseif($_GET['page']=='student-info')
    {

        $studentInfos = $student->getAllStudentInfo();
        include 'pages/student-list.php';
    }

    elseif($_GET['page']=='update-student-info')
    {

        $oneStudentInfo = $student->editStudentInfo($_GET['studentId']);
        include 'pages/edit-student-list.php';
    }
    elseif($_GET['page']=='delete-info')
    {

        $message = $student->deleteStudentInfo($_GET['id']);
        $studentInfos = $student->getAllStudentInfo();
        include 'pages/student-list.php';
        
    }
    
}
elseif ($_POST)
{
    if (isset($_POST['submit_btn']))
    {

        $student->createStudent($_POST);
        $message= $student->newStudent();
        $studentInfos = $student->getAllStudentInfo();
        include 'pages/student-list.php';
    }
   elseif ($_POST['update_btn'])
    {
        $student->createStudent($_POST);
        $message =  $student->UpdateStudent($_POST['id']);
        $studentInfos = $student->getAllStudentInfo();
        include 'pages/student-list.php';
    }
}

else{
    $home = new Home();
    $home->index();
}
