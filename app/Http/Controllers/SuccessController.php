<?php

namespace App\Http\Controllers;

use App\Models\Success;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class SuccessController extends Controller
{
    public function AllSuccess()
    {
        $success = Success::latest()->get();
        return view('backend.success.All_success', compact('success'));
    } // End Method

    public function AddSuccess()
    {
        return view('backend.success.Add_success');
    } // End Method

    public function StoreSuccess(Request $request)
    {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::read($image)
            
            ->save('upload/success/' . $name_gen);
        $save_url = 'upload/success/' . $name_gen;

        Success::insert([
            'title' => $request->title,
            'designation' => $request->designation,
            'description' => $request->description,
          
           'image' => $save_url,
            'success_slug' => strtolower(str_replace(' ', '-', $request->title)),
            
        ]);

        
        return redirect()
            ->route('AllSuccess');
            
    } // End Method

    public function EditSuccess($id)
    {
        $success = Success::findOrFail($id);
        return view('backend.success.edit_success', compact('success'));
    } // End Method

    public function UpdateSuccess(Request $request)
    {
        $safe_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::read($image)
                
                ->save('upload/success/' . $name_gen);
            $save_url = 'upload/success/' . $name_gen;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            Success::findOrFail($safe_id)->update([
                'title' => $request->title,
                'designation' => $request->designation,
                'description' => $request->description,
              
               'image' => $save_url,
                'success_slug' => strtolower(str_replace(' ', '-', $request->title)),
            ]);

         
            return redirect()
                ->route('AllSuccess');
              
        } else {
            Success::findOrFail($safe_id)->update([
                'title' => $request->title,
                'designation' => $request->designation,
                'description' => $request->description,
              
               
                'success_slug' => strtolower(str_replace(' ', '-', $request->title)),
               
           
            ]);

          

            return redirect()
                ->route('AllSuccess');
               
        } // end else
    } // End Method

    public function DeleteSuccess($id)
    {
       
        $success = Success::findOrFail($id);
        $img = $success->image;
        unlink($img);


        Success::findOrFail($id)->delete();

       

        return redirect()
            ->back();
            
    } // End Method
}
