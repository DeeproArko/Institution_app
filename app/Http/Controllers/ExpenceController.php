<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Expence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpenceController extends Controller
{
    public function AllExpence()
    {
         $incomeonline=DB::table('orders')->where('status','Pending')->sum('amount');
          $incomeOffilne=User::where('username','offlineuser')->sum('paid_ammount');
           $totalEarining= $incomeOffilne+$incomeonline;
        $expence = Expence::latest()->get();
         $totalExpense=Expence::all()->sum('expence');
         $revenue=$totalEarining-$totalExpense;
        return view('backend.expence.All_expence', compact('expence','totalEarining','totalExpense','revenue'));
    } // End Method

    public function AddExpence()
    {
        return view('backend.expence.Add_expence');
    } // End Method

    public function StoreExpence(Request $request)
    {
       

        Expence::insert([
            'title' => $request->title,
            'feild' => $request->feild,
            'expence' => $request->expence,
            
            
            
        ]);

        
        return redirect()
            ->route('AllExpence');
            
    } // End Method

    public function EditExpence($id)
    {
        $expence = Expence::findOrFail($id);
        return view('backend.expence.edit_expence', compact('expence'));
    } // End Method

    public function UpdateExpence(Request $request)
    {
        $expence_id = $request->id;
       

       

        Expence::findOrFail($expence_id)->update([
                'title' => $request->title,
                'feild' => $request->feild,
                'expence' => $request->expence,
            ]);

         
            return redirect()
                ->route('AllExpence');
    } // End Method

    public function DeleteExpence($id)
    {
       
        $expence = Expence::findOrFail($id);
        $img = $expence->image;
        unlink($img);


        Expence::findOrFail($id)->delete();

       

        return redirect()
            ->back();
            
    } // End Method
}
