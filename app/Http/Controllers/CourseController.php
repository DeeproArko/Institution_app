<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Support\Facades\DB;
use Intervention\Image\Laravel\Facades\Image;

class CourseController extends Controller
{
    public function AllCourse()
    {
        $course = Course::latest()->get();
        return view('backend.course.All_course', compact('course'));
    } // End Method

    public function AddCourse()
    {
        $category = Category::orderBy('title', 'ASC')->get();
        
         $user = User::where('role','=', 'employee')->orderBy('name', 'ASC')->get();
        return view('backend.course.Add_course',compact('category','user'));
    } // End Method

    public function StoreCourse(Request $request)
    {
          $category = $request->category_id;
           $category_details = Category::where('id','=', $category)->first();
            $category_title=$category_details->title;

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::read($image)
            
            ->save('upload/course/' . $name_gen);
        $save_url = 'upload/course/' . $name_gen;

        Course::insert([
            'category_id' => $request->category_id,
            'instructor_id' => $request->instructor_id,
            'category_name' => $category_title,
            'title' => $request->title,
            'price' => $request->price,
            'details' => $request->details,
            'url' => $request->url,
          'course_slug' => strtolower(str_replace(' ', '-', $request->title)),
           'image' => $save_url,
           'duration' => $request->duration,
           'courseType' => $request->courseType,
           'language' => $request->language,
           'short_details' => $request->short_details,
           'learn' => $request->learn,
           'stratdate' => $request->stratdate,
           'new' => $request->new,
           'popular' => $request->popular,
           'year' => $request->year,
           'user_name' => $request->user_name,
           'instructor_id' => $request->instructor_id,
            
            
        ]);

        
        return redirect()
            ->route('assign');
            
    } // End Method

    public function EditCourse($id)
    {
         $user = User::where('role','=', 'employee')->orderBy('name', 'ASC')->get();
        $category = Category::orderBy('title', 'ASC')->get();
        $course = Course::findOrFail($id);
        return view('backend.course.edit_course', compact('course','category','user'));
    } // End Method

    public function UpdateCourse(Request $request)
    {
        $course_id = $request->id;
        $old_img = $request->old_image;

        $category = $request->category_id;
        $category_details = Category::where('id','=', $category)->first();
         $category_title=$category_details->title;


        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::read($image)
                
                ->save('upload/course/' . $name_gen);
            $save_url = 'upload/course/' . $name_gen;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            Course::findOrFail($course_id)->update([
                
               'category_id' => $request->category_id,
               'category_name' => $category_title,
            'title' => $request->title,
            'price' => $request->price,
            'details' => $request->details,
            'url' => $request->url,
          'course_slug' => strtolower(str_replace(' ', '-', $request->title)),
           'image' => $save_url,
           'duration' => $request->duration,
           'courseType' => $request->courseType,
           'language' => $request->language,
           'short_details' => $request->short_details,
           'learn' => $request->learn,
           'stratdate' => $request->stratdate,
           'new' => $request->new,
           'popular' => $request->popular,
           'year' => $request->year,
           'user_name' => $request->user_name,
            ]);

         
            return redirect()
                ->route('AllCourse');
              
        } else {
            Course::findOrFail($course_id)->update([
               'category_id' => $request->category_id,
               'category_name' => $category_title,
            'title' => $request->title,
            'price' => $request->price,
            'details' => $request->details,
            'url' => $request->url,
          'course_slug' => strtolower(str_replace(' ', '-', $request->title)),
           
           'duration' => $request->duration,
           'courseType' => $request->courseType,
           'language' => $request->language,
           'short_details' => $request->short_details,
           'learn' => $request->learn,
           'stratdate' => $request->stratdate,
            'new' => $request->new,
           'popular' => $request->popular,
           'year' => $request->year,
           'user_name' => $request->user_name,
             
               
           
            ]);

          

            return redirect()
                ->route('AllCourse');
               
        } // end else
    } // End Method

    public function DeleteCourse($id)
    {
       
        $course = Course::findOrFail($id);
        $img = $course->image;
        unlink($img);


        Course::findOrFail($id)->delete();

       

        return redirect()
            ->back();
            
    } // End Method
    public function invoice($id)
    {

          $orders = DB::table('orders')->where('id',$id)->first();
      
           return view('backend.student.invoice',compact('orders'));
       
       
            
    } // End Method
    public function invoiceforUser($id)
    {

         $user = User::where('id',$id)->first();
          $user_price = $user->course_price;
          $user_paid = $user->paid_ammount;
           $due = $user_price -= $user_paid;
      
           return view('backend.student.invoiceforUser',compact('user','due'));
       
       
            
    } // End Method
}
