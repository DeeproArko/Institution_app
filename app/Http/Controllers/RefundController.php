<?php

namespace App\Http\Controllers;

use App\Models\Refund;
use Illuminate\Http\Request;

class RefundController extends Controller
{
    public function AllRefund()
    {
        $refund = Refund::latest()->get();
        return view('backend.refund.All_refund', compact('refund'));
    } // End Method

    public function AddRefund()
    {
        return view('backend.refund.Add_refund');
    } // End Method

    public function StoreRefund(Request $request)
    {
       

        Refund::insert([
            'description' => $request->description,
          
           
            
        ]);

        
        return redirect()
            ->route('AllRefund');
            
    } // End Method

    public function EditRefund($id)
    {
        $refund = Refund::findOrFail($id);
        return view('backend.refund.edit_refund', compact('refund'));
    } // End Method

    public function UpdateRefund(Request $request)
    {
        $refund_id = $request->id;
       
      
            Refund::findOrFail($refund_id)->update([
                'description' => $request->description,
             
            ]);

         
            return redirect()
                ->route('AllRefund');
              
       
    } // End Method

    public function DeleteRefund($id)
    {
       
       


        Refund::findOrFail($id)->delete();

       

        return redirect()
            ->back();
            
    } // End Method
}
