<?php

namespace App\Http\Controllers;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Category;
use Auth;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function Allcat()
    {
         //$allcat=Category::paginate(5);
         $allcat= DB::table('categories')
         ->join('users','categories.user_id','users.id')
         ->select('categories.*','users.name')
         ->latest()->paginate(5);

         //$allcat = DB::table('categories')->latest()->paginate(5);
         //$allcat= DB::table('categories')->order_by('created_at', 'desc')->get();
        return view('admin.category.index',compact('allcat'));
    }

    public function Addcat(Request $request)
    {
         $validated = $request->validate([
             'category_name' => 'required|unique:categories|max:255',
           
         ]);

        // Category::insert([
        //     'category_name'=>$request->category_name,
        //     'user_id'=>Auth::user()->id,
        //     'created_at'=>Carbon::now()

        // ]);

         $category = new Category();

         $category->category_name = $request->category_name;
         $category->user_id= Auth::user()->id;
      

       
        $category->save();
        
        return redirect()->back()->with('success1', 'Add category insert successfully!');
        
        
        

    }
}
