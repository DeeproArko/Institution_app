<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AllCategory()
    {
        $category = Category::latest()->get();
        return view('backend.category.All_category', compact('category'));
    } // End Method

    public function AddCategory()
    {
        return view('backend.category.Add_category');
    } // End Method

    public function StoreCategory(Request $request)
    {
       

        Category::insert([
            'title' => $request->title,
            'category_slug' => strtolower(str_replace(' ', '-', $request->title)),
            
            
        ]);

        
        return redirect()
            ->route('AllCategory');
            
    } // End Method

    public function EditCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.edit_category', compact('category'));
    } // End Method

    public function UpdateCategory(Request $request)
    {
        $category_id = $request->id;
       

       

            Category::findOrFail($category_id)->update([
                'title' => $request->title,
                'category_slug' => strtolower(str_replace(' ', '-', $request->title)),
            ]);

         
            return redirect()
                ->route('AllCategory');
    } // End Method

    public function DeleteCategory($id)
    {
       
        $category = Category::findOrFail($id);
        $img = $category->image;
        unlink($img);


        Category::findOrFail($id)->delete();

       

        return redirect()
            ->back();
            
    } // End Method
}
