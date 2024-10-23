<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Psy\VersionUpdater\Installer;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Notification;
use App\Notifications\VendorApproveNotification;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        $user=User::where('role', 'user')->count();
        $instructor=User::where('role', 'employee')->count();
        $course=Course::all()->count();
        $order=DB::table('orders')->where('status','Pending')->count();
        $orders=DB::table('orders')->where('status','Pending')->get();
        $inperson=user::where('username','offlineuser')->get();
        
        return view('admin.index',compact('user','course','instructor','order','orders','inperson'));
    } // End Mehtod

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/dashboard');
    }

    public function AdminLogin()
    {
        return view('admin.admin_login');
    } // End Mehtod
    public function instrutor()
    {
        $instructor=User::where('role', 'employee')->get();
        return view('backend.instrutor.instrutor', compact('instructor'));
    } // End Mehtod
    public function student()
    {
         $student=DB::table('orders')->where('status', 'pending')->get();
        return view('backend.student.student', compact('student'));
    } // End Mehtod
    public function assign()
    {
        
        $course = Course::orderby('title','ASC')->get();
        

        $instructor=User::where('role', 'employee')->get();
        return view('backend.instrutor.assign',compact('course','instructor'));
    } // End Mehtod
    public function AllAssign()
    {
        $instructor=Instructor::all();
       
        return view('backend.instrutor.AllAssign',compact('instructor'));
    } // End Mehtod
    public function StoreAssign(Request $request)
    {
        $course = $request->course_id;
        $course_details=Course::where('id',$course)->first();
         $course_image=$course_details->image;
         $course_title=$course_details->title;
        Instructor::insert([
            'user_id' => $request->user_id,
            'course_id' => $request->course_id,
            'course_image' =>  $course_image,
            'course_title' => $course_title,
          
            
        ]);
        return redirect()
        ->route('AllCourse');
    } // End Mehtod




    public function editAssign($id)
    {
        $course = Course::orderBy('title', 'ASC')->get();
        $user=User::where('role', 'employee')->get();
        $instructor = Instructor::findOrFail($id);
        return view('backend.instrutor.Edit_Assign', compact('instructor','course','user'));
    } // End Method

    public function updateAssign(Request $request)
    {
        $assign_id = $request->id;
       

            Instructor::findOrFail($assign_id)->update([
                'course_id' => $request->course_id,
                'user_id' => $request->user_id,
             
               
            ]);

         
            return redirect()
                ->route('AllAssign');
              
    } // End Method

    public function deleteAssign($id)
    {
       
       


        Instructor::findOrFail($id)->delete();

       

        return redirect()
            ->back();
            
    } // End Method
    public function offlineRegister()
    {
        $students=User::where('username','offlineuser')->orderby('id','DESC')->get();
        return view('backend.student.registerstudent',compact('students'));
            
    } // End Method


    public function offlinePayment(Request $request)
    {
      $offlinePayment= $request->paid;
      $userId= $request->userId;
      $paid_ammount=user::where('id',$userId)->first();
      $paid_ammount=$paid_ammount->paid_ammount;
      if($paid_ammount>0){
        $paid_ammount+=$offlinePayment;
      }else{
        $paid_ammount=$offlinePayment;
      }
      user::findOrFail($userId)->update([
        'paid_ammount' => $paid_ammount,
       
     
       
    ]);

 
        // return view('backend.student.registerstudent',compact('students'));
            
    } // End Method
    public function earning()
    {
        $order=DB::table('orders')->where('status','Pending')->count();
          $orders=DB::table('orders')->where('status','Pending')->orderBy('id', 'ASC')->first();
          $orderss=DB::table('orders')->where('status','Pending')->get();
           $incomeonline=DB::table('orders')->where('status','Pending')->sum('amount');
         $incomeOffilne=user::where('username','offlineuser')->sum('paid_ammount');
         $totalEarining= $incomeOffilne+$incomeonline;

        //    $orders_amount = $orders->amount;
        
        $orders=DB::table('orders')->where('status','Pending')->get();
        $inperson=user::where('username','offlineuser')->get();
    
        

 
        return view('backend.accounts.total_income',compact('order','orderss','incomeonline','incomeOffilne','totalEarining','orders','inperson'));
            
    } // End Method








}
