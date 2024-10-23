<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class ContactController extends Controller
{
    public function AllContact()
    {
        $contacts = Contact::latest()->get();
        return view('backend.contacts.All_contacts', compact('contacts'));
    } // End Method

    public function AddContact()
    {
        return view('backend.contacts.Add_contacts');
    } // End Method

    public function StoreContact(Request $request)
    {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::read($image)
            
            ->save('upload/contacts/' . $name_gen);
        $save_url = 'upload/contacts/' . $name_gen;

        Contact::insert([
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
          
           'image' => $save_url,
            
            
        ]);

        
        return redirect()
            ->route('AllContact');
            
    } // End Method

    public function EditContact($id)
    {
        $contacts = Contact::findOrFail($id);
        return view('backend.contacts.edit_contacts', compact('contacts'));
    } // End Method

    public function UpdateContact(Request $request)
    {
        $safe_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::read($image)
                
                ->save('upload/contacts/' . $name_gen);
            $save_url = 'upload/contacts/' . $name_gen;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            Contact::findOrFail($safe_id)->update([
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
              
               'image' => $save_url,
            ]);

         
            return redirect()
                ->route('AllContact');
              
        } else {
            Contact::findOrFail($safe_id)->update([
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
              
             
               
           
            ]);

          

            return redirect()
                ->route('AllContact');
               
        } // end else
    } // End Method

    public function DeleteContact($id)
    {
       
        $contacts = Contact::findOrFail($id);
        $img = $contacts->image;
        unlink($img);


        Contact::findOrFail($id)->delete();

       

        return redirect()
            ->back();
            
    } // End Method
}
