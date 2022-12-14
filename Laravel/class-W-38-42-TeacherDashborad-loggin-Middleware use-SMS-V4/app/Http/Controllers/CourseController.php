<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use DB;

class CourseController extends Controller
{
    public $image,$imageName,$directory,$imageUrl;

   public function addCourse()
   {
       return view('admin.course.add-course');
   }
   public function manageCourse()
   {
       $courses =DB::table('courses')
           ->join('teachers','courses.teacher_id','teachers.id')
           ->select('courses.*','teachers.name','teachers.email')
           ->get();
       return view('admin.course.manage-course',[
           'courses'=>$courses
       ]);
   }

   public function createCourse(Request $request)
   {
       $this->validate($request,[
            'course_name'=>'required|unique:courses,course_name|string|min:10|max:50'
       ]);
       $course = new Course();
       $course->teacher_id = $request->teacher_id;
       $course->course_name =$request->course_name;
       $course->slug = $this->makeSlug($request);
       $course->course_code = $request->course_code;
       $course->course_description = $request->course_description;
       $course->course_fee = $request->course_fee;
       $course->image = $this->saveImage($request);
       $course->save();
       return back()->with('message','Course Created Successfully');
   }

   private function makeSlug($request)
   {
       if ($request->slug)
       {
           $str = $request->slug;
           return preg_replace('/\s+/u','-',trim($str));
       }
       $str = $request->course_name;
       return preg_replace('/\s+/u','-',trim($str));
   }

   private function saveImage($request)
   {
       $this->image = $request->image;
       $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
       $this->directory = 'adminAssets/course/';
       $this->ImageUrl = $this->directory.$this->imageName;
       $this->image->move($this->directory,$this->imageName);
       return $this->ImageUrl;
   }

}

//1:50:00 class-42
