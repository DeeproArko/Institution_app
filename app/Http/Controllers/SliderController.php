<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class SliderController extends Controller
{
    public function AllSlider()
    {
        $sliders = Slider::latest()->get();
        return view('backend.sliders.All_sliders', compact('sliders'));
    } // End Method

    public function AddSlider()
    {
        return view('backend.sliders.Add_sliders');
    } // End Method

    public function StoreSlider(Request $request)
    {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::read($image)
            
            ->save('upload/sliders/' . $name_gen);
        $save_url = 'upload/sliders/' . $name_gen;

        Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
          
           'image' => $save_url,
            'slider_slug' => strtolower(str_replace(' ', '-', $request->title)),
            
        ]);

        
        return redirect()
            ->route('AllSlider');
            
    } // End Method

    public function EditSlider($id)
    {
        $sliders = Slider::findOrFail($id);
        return view('backend.sliders.edit_sliders', compact('sliders'));
    } // End Method

    public function UpdateSlider(Request $request)
    {
        $safe_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::read($image)
                
                ->save('upload/sliders/' . $name_gen);
            $save_url = 'upload/sliders/' . $name_gen;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            Slider::findOrFail($safe_id)->update([
                'title' => $request->title,
                'description' => $request->description,
             
                'slider_slug' => strtolower(str_replace(' ', '-', $request->title)),
                'image' => $save_url,
            ]);

         
            return redirect()
                ->route('AllSlider');
              
        } else {
            Slider::findOrFail($safe_id)->update([
                'title' => $request->title,
                'description' => $request->description,
               
                'slider_slug' => strtolower(str_replace(' ', '-', $request->title)),
               
           
            ]);

          

            return redirect()
                ->route('AllSlider');
               
        } // end else
    } // End Method

    public function DeleteSlider($id)
    {
       
        $sliders = Slider::findOrFail($id);
        $img = $sliders->image;
        unlink($img);


        Slider::findOrFail($id)->delete();

       

        return redirect()
            ->back();
            
    } // End Method
}
