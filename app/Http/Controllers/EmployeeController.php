<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use App\Models\Instructor;
use App\Models\Module;
use App\Models\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function EmployeeDashboard()
    {
          $id = Auth::user()->id;
         
           $count=Instructor::Where('user_id', $id)->count();
        
        return view('employee.index',compact('count'));
    }
    public function EmployeeLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/employee/dashboard');
    }
    public function EmployeeLogin()
    {
        return view('employee.employee_login');
    } // End Mehtod
    public function EmployeeRegister()
    {
        return view('employee.employee_register');
    } // End Mehtod 
    
    
     public function allcourse()
    {
         $id = Auth::user()->id;
          $course_list=Instructor::where('user_id',$id)->get();
        return view('employee.all_course',compact('course_list'));
    } // End Mehtod allcourse
     public function studentList($id)
    {
      
         $order=DB::table('orders')->where('course_id',$id)->get();
        return view('employee.list',compact('order'));
    } // End Mehtod studentList

    public function courseContent($id)
    {
       
        
       
         $course=Course::where('id',$id)->first();
           $course_name = $course->id;
          return view('employee.courseContent',compact('course_name'));
    }// End Mehtod

    public function EmployeeStore(Request $request)
    {
        // $vuser = User::where('role', 'employee')->get();

        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'confirmed'],
        // ]);

        User::insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'designation' => $request->designation,
           
            'password' => Hash::make($request->password),
            'role' => 'employee',
           
        ]);

      

       
        return redirect()
            ->route('employee.login');
    } // End Mehtod
    public function storeContent(Request $request)
    {
       

        Module::insert([
            'title' => $request->title,
            'description' => $request->description,
            'course_id' => $request->course_id,
           
           
        ]);

        $module_id = Module::orderby('id', 'DESC')->limit(1)->first();
         $module_id = $module_id->id;
        video::insert([
            'course_id' => $request->course_id,
            'module_id' =>$module_id,
            'url' => $request->url,
           'module_title' => $request->title,
        ]);

      

       
        return redirect()
            ->route('allcourse');
    } // End Mehtod
}
