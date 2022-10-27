<?php


namespace App\classes;

use App\classes\Database;

class Student
{

    public $name, $roll, $phone, $email,$dept,$session,$address, $database, $sql, $createStu, $allinfo, $OneStuInfo,$UpdateStdInfo,$deleteInfo;


    public function createStudent($post=null)
    {
        $this->name =  $post['name'];
        $this->roll =  $post['roll'];
        $this->phone = $post['phone'];
        $this->email = $post['email'];
        $this->dept =  $post['dept'];
        $this->session = $post['session'];
        $this->address = $post['address'];
    }



    public function newStudent()
    {
        $this->sql="INSERT INTO students(name,roll,phone,email,dept,session,address) VALUES('$this->name','$this->roll','$this->phone','$this->email','$this->dept','$this->session','$this->address')";
        $this->database = new Database();
        $this->createStu = mysqli_query($this->database->dbConnect(), $this->sql);
        return 'success';
    }

    public function getAllStudentInfo()
    {
        $this->sql ="SELECT * FROM students";
        $this->database = new Database();
        $this->allinfo = mysqli_query($this->database->dbConnect(),$this->sql);
        return $this->allinfo;
    }

    public function editStudentInfo($student_id)
    {

        $this->sql="SELECT * FROM  students WHERE id=$student_id";
        $this->database = new Database();
        $this->OneStuInfo = mysqli_query($this->database->dbConnect(),$this->sql);
        return $this->OneStuInfo;
    }

    public function UpdateStudent($id)
    {

        $this->sql = "UPDATE `students` SET `name`='$this->name',`roll`='$this->roll',`phone`='$this->phone',`email`='$this->email',`dept`='$this->dept',`session`='$this->session',`address`='$this->address' WHERE id = $id";
        $this->database = new Database();
        $this->stdInfo = mysqli_query( $this->database->dbConnect(), $this->sql );
        return 'Updated successfully';
    }

    public function deleteInfo($id)
    {
        $this->sql = "DELETE FROM students WHERE id=$id";

        $this->database = new Database();
        $this->deleteInfo = mysqli_query($this->database->dbConnect(),$this->sql);
        return 'Successfully deleted one row';
    }

}
