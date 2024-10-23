<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function AllModule()
    {
        $module = Module::latest()->get();
        return view('backend.module.All_module', compact('module'));
    } // End Method

    public function AddModule()
    {
        $course = Course::orderBy('title', 'ASC')->get();
        return view('backend.module.Add_module' , compact('course'));
    } // End Method

    public function StoreModule(Request $request)
    {
       

        Module::insert([
            'course_id' => $request->course_id,
            'title' => $request->title,
            'description' => $request->description,
            'module_slug' => strtolower(str_replace(' ', '-', $request->title)),
            
            
        ]);

        
        return redirect()
            ->route('AllModule');
            
    } // End Method

    public function EditModule($id)
    {
        $course = Course::orderBy('title', 'ASC')->get();
        $module = Module::findOrFail($id);
        return view('backend.module.edit_module', compact('module','course'));
    } // End Method

    public function UpdateModule(Request $request)
    {
        $module_id = $request->id;
       

       

            Module::findOrFail($module_id)->update([
                'course_id' => $request->course_id,
                'title' => $request->title,
                'description' => $request->description,
                'module_slug' => strtolower(str_replace(' ', '-', $request->title)),
            ]);

         
            return redirect()
                ->route('AllModule');
    } // End Method

    public function DeleteModule($id)
    {
       
      


        Module::findOrFail($id)->delete();

       

        return redirect()
            ->back();
            
    } // End Method
}
