<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\About;
use App\Models\Course;
use App\Models\Module;
use App\Models\Contact;
use App\Models\Success;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class IndexController extends Controller
{
    public function index()
    {
        $new=Course::where('new', '=', 'on')->get();
        $year=Course::where('year', '=', 'on')->get();
        $popular=Course::where('popular', '=', 'on')->get();
        $skip_category_0 = Category::skip(0)->first();
         $skip_product_0 = Course::where('category_id', $skip_category_0->id)
            ->orderBy('id', 'DESC')
          
            ->get();
        return view('frontend.index',compact('new','year','popular','skip_category_0','skip_product_0'));
    }//end method
    public function about()
    {
        $about=About::all();
        return view('frontend.about.about',compact('about'));
    }//end method
    public function contact()
    {
        $contacts=Contact::all();
        return view('frontend.contact.contact',compact('contacts'));
    }//end method
    public function success()
    {
        $success=Success::all();
        return view('frontend.success.success',compact('success'));
    }//end method
    public function course($id)
    {
        $course=Course::where('category_id',$id)->get();
        $courseName=Category::where('id',$id)->first();
        $courseName=$courseName->title;
        return view('frontend.course.course',compact('course','courseName'));
    }//end method
    public function courseDetails($id)
    {
        $course=Course::where('id',$id)->get();
        $module=Module::where('course_id',$id)->get();
        return view('frontend.course.details',compact('course','module'));
    }//end method


    public function offlineRegister()
    {
        $courses=Course::all();
       

       
       return view('frontend.register.offlineRegister',compact('courses'));
    }//end method
    public function store_user(Request $request)
    {
        $COURSE=$request->courses;
        $couse_details=Course::where('id', $COURSE)->first();
        $course_title=$couse_details->title;
         $course_price=$couse_details->price;
          $category_ID=$couse_details->category_id;
          $course_category=Category::where('id',$category_ID)->first();
          $course_category=$course_category->title;
        User::insert([
            'name' => $request->name,
            'username' => 'offlineuser',
            'email' => $request->email,
          'password' => Hash::make($request->password),
          'couse_title' =>$course_title,
          'course_category' => $course_category,
          'course_price' => $course_price,
         
          
            
        ]);

       
       return redirect()->route('dashboard');
    }//end method
}
