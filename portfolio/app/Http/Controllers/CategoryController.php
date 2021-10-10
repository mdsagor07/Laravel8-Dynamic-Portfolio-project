<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Allcat()
    {
        return view('admin.category.index');
    }

    public function Addcat(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
           
        ]);
        

    }
}
