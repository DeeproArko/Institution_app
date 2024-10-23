<?php

namespace App\Http\Controllers;

use App\Models\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function AllPrivacy()
    {
        $privacy = Privacy::latest()->get();
        return view('backend.privacy.All_privacy', compact('privacy'));
    } // End Method

    public function AddPrivacy()
    {
        return view('backend.privacy.Add_privacy');
    } // End Method

    public function StorePrivacy(Request $request)
    {
       

        Privacy::insert([
            'description' => $request->description,
          
           
            
        ]);

        
        return redirect()
            ->route('AllPrivacy');
            
    } // End Method

    public function EditPrivacy($id)
    {
        $privacy = Privacy::findOrFail($id);
        return view('backend.privacy.edit_privacy', compact('privacy'));
    } // End Method

    public function UpdatePrivacy(Request $request)
    {
        $privacy_id = $request->id;
       
      
            Privacy::findOrFail($privacy_id)->update([
                'description' => $request->description,
             
            ]);

         
            return redirect()
                ->route('AllPrivacy');
              
       
    } // End Method

    public function DeletePrivacy($id)
    {
       
       


        Privacy::findOrFail($id)->delete();

       

        return redirect()
            ->back();
            
    } // End Method
}
