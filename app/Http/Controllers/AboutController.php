<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class AboutController extends Controller
{
    public function AllAbout()
    {
        $about = About::latest()->get();
        return view('backend.about.All_about', compact('about'));
    } // End Method

    public function AddAbout()
    {
        return view('backend.about.Add_about');
    } // End Method

    public function StoreAbout(Request $request)
    {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::read($image)
            
            ->save('upload/about/' . $name_gen);
        $save_url = 'upload/about/' . $name_gen;

        About::insert([
            'description' => $request->description,
          
           'image' => $save_url,
            'about_slug' => strtolower(str_replace(' ', '-', $request->title)),
            
        ]);

        
        return redirect()
            ->route('AllAbout');
            
    } // End Method

    public function EditAbout($id)
    {
        $about = About::findOrFail($id);
        return view('backend.about.edit_about', compact('about'));
    } // End Method

    public function UpdateAbout(Request $request)
    {
        $safe_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::read($image)
                
                ->save('upload/about/' . $name_gen);
            $save_url = 'upload/about/' . $name_gen;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            About::findOrFail($safe_id)->update([
                'description' => $request->description,
             
                'about_slug' => strtolower(str_replace(' ', '-', $request->title)),
                'image' => $save_url,
            ]);

         
            return redirect()
                ->route('AllAbout');
              
        } else {
            About::findOrFail($safe_id)->update([
                'description' => $request->description,
             
                'about_slug' => strtolower(str_replace(' ', '-', $request->title)),
               
           
            ]);

          

            return redirect()
                ->route('AllAbout');
               
        } // end else
    } // End Method

    public function DeleteAbout($id)
    {
       
        $about = About::findOrFail($id);
        $img = $about->image;
        unlink($img);


        About::findOrFail($id)->delete();

       

        return redirect()
            ->back();
            
    } // End Method
}
