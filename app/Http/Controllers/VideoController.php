<?php

namespace App\Http\Controllers;

use App\Models\video;
use App\Models\Course;
use App\Models\Module;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function AllVideo()
    {
        $video = video::latest()->get();
        return view('backend.video.All_video', compact('video'));
    } // End Method

    public function AddVideo()
    {
        $course = Course::orderBy('title', 'ASC')->get();
        $module = Module::orderBy('title', 'ASC')->get();
        return view('backend.video.Add_video' , compact('course','module'));
    } // End Method

    public function StoreVideo(Request $request)
    {
       $module=$request->module_id;
        $module_title=Module::where('id', $module)->first();
        $module_name=$module_title->title;

        video::insert([
            'course_id' => $request->course_id,
            'module_id' => $request->module_id,
            'url' => $request->url,
            'module_title' => $module_name,
            
            
        ]);

        
        return redirect()
            ->route('AllVideo');
            
    } // End Method

    public function EditVideo($id)
    {
        $course = Course::orderBy('title', 'ASC')->get();
        $module = Module::orderBy('title', 'ASC')->get();
        $video = video::findOrFail($id);
        return view('backend.video.edit_video', compact('module','course','video'));
    } // End Method

    public function UpdateVideo(Request $request)
    {
        $video_id = $request->id;
       
        $module=$request->module_id;
        $module_title=Module::where('id', $module)->first();
        $module_name=$module_title->title;
       

            video::findOrFail($video_id)->update([
              'course_id' => $request->course_id,
                'module_id' => $request->module_id,
                'url' => $request->url,
                'module_title' => $module_name,
            ]);

         
            return redirect()
                ->route('AllVideo');
    } // End Method

    public function DeleteVideo($id)
    {
       
      


        video::findOrFail($id)->delete();

       

        return redirect()
            ->back();
            
    } // End Method
}
