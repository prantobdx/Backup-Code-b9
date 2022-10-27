<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Session;
use Hash;

class TeacherController extends Controller
{
    public $teacher,$image,$imageName,$directory,$imageUrl;

    public function index()
    {
        return view('admin.teacher.add-teacher');
    }

    public function createTeacher(Request $request)
    {

        $this->teacher = new Teacher();
        $this->teacher->name = $request->name;
        $this->teacher->phone = $request->phone;
        $this->teacher->email = $request->email;
        $this->teacher->password = bcrypt(12345678);
        $this->teacher->address = $request->address;
        $this->teacher->image = $this->saveImage($request);

        $this->teacher->save();
        return back()->with('message','Teacher info Save Successfully');
    }

    private function saveImage($request)
    {
        $this->image =$request->file('image');
        $this->imageName=rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory= 'adminAssets/teacher-image/';
        $this->imageUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imageUrl;
    }

    public function manageTeacher()
    {
        return view('admin.teacher.manage-teacher',[
            'teachers'=>Teacher::all()
        ]);
    }

    public function deleteTeacher(Request $request)
    {
        $this->teacher = Teacher::find($request->teacher_id);
        if ($this->teacher->image)
        {
            unlink($this->teacher->image);
        }
        $this->teacher->delete();
        return back()->with('message','Deleted Successfully');
    }

    public function editTeacher($id)
    {

        return view('admin.teacher.edit-teacher',['teacher'=>Teacher::find($id)]);

    }

    public function updateTeacher(Request $request)
    {
        $this->teacher = Teacher::find($request->teacher_id);

        $this->teacher->name = $request->name;
        $this->teacher->phone = $request->phone;
        $this->teacher->email = $request->email;
        $this->teacher->password = bcrypt(12345678);
        $this->teacher->address = $request->address;

        if ($request->file('image'))
        {
            if($this->teacher->image)
            {
                unlink($this->teacher->image);
            }
            $this->teacher->image = $this->saveImage($request);
        }

        $this->teacher->save();
        return redirect('/manage-teacher')->with('message','Teacher info Update Successfully');
    }

//    ................teacher Controll Panel........................

    public function teacherLogin()
    {
        return view('admin.teacher.login');
    }

    public function teacherLoginCheck(Request $request)
    {
        $loginInfo=Teacher::where('email',$request->user_name)->orWhere('phone',$request->user_name)->first();

        if($loginInfo)
        {
            if(Hash::check('password',bcrypt('password')))
            {
                Session::put('teacherId',$loginInfo->id);
                Session::put('teacherName',$loginInfo->name);

                return redirect('/');
            }
            else {
                return back()->with('message','Password not matched');
            }
        }
        else{
            return back()->with('message','use valid email or phone');
        }
//        return $request;
    }
}
