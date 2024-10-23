<?php namespace App\Http\Controllers;

use App\Models\User;
use App\Models\video;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function UserDashboard()
    {
        $id = Auth::user()->id;
        $userData = User::find($id);
        return view('index', compact('userData'));
    } // End Method

    public function UserProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->userId = $request->userId;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/user_images/' . $data->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = [
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->back()
            ->with($notification);
    } // End Mehtod

    public function UserLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = [
            'message' => 'User Logout Successfully',
            'alert-type' => 'success',
        ];

        return redirect('/login')->with($notification);
    } // End Mehtod

    public function UserUpdatePassword(Request $request)
    {
        // Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        // Match The Old Password
        if (!Hash::check($request->old_password, auth::user()->password)) {
            return back()->with('error', "Old Password Doesn't Match!!");
        }

        // Update The new password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password),
        ]);
        return back()->with('status', ' Password Changed Successfully');
    } // End Mehtod


    public function userCourse()
    {
         $id = Auth::user()->id;
          $orders = DB::table('orders')->where('id',$id)->get();
          return view('frontend.userdashboard.all_course',compact('orders'));
    }
    public function classes($id)
    {
         $module = video::where('course_id',$id)->get();
        
       
          return view('frontend.userdashboard.classs',compact('module'));
    }
    // public function EditUser($id)
    // {
    //     $user = User::findOrFail($id);
    //     return view('frontend.userdashboard.edit_User', compact('user'));
    // } // End Method

   

    public function UpdateUser(Request $request,$id)
{
    

    // Fetch the authenticated user
    $id = Auth::id();
    $user = User::findOrFail($id);

    // Update user details
    $user->name = $request->name;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->address = $request->address;
    $user->userId = $request->userId;

    // Handle profile photo upload
    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        
        // Check if user already has a photo and unlink it if exists
        if ($user->photo && file_exists(public_path('upload/user_images/' . $user->photo))) {
            @unlink(public_path('upload/user_images/' . $user->photo));
        }

        // Store the new photo with a unique filename
        $filename = date('YmdHi') . '_' . $file->getClientOriginalName();
        $file->move(public_path('upload/user_images'), $filename);
        $user->photo = $filename;
    }

    // Save updated user data
    $user->save();

    // Set up success notification
    $notification = [
        'message' => 'User Profile Updated Successfully',
        'alert-type' => 'success',
    ];

    // Redirect back with notification
    return redirect()->back()->with($notification);
}


   
   
}
