<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;




class CategoryController extends Controller
{
    

    public function all_category()
    {

        $all_category = Category::orderby('category_id','desc')->get();
        return view('admin.all_category',['all_category'=>$all_category]);

    }

    public function delete_category($category_id)
    {

        $category = Category::find($category_id);
        $category->delete();
        return Redirect::to('all-category');
    }

    public function edit_category($category_id)
    {

        $category = Category::orderBy('category_id','DESC')->get();
        $edit_category = Category::find($category_id);

        return view('admin.edit_category',['edit_category'=>$edit_category],['category'=>$category]);
    }

    public function update_category(Request $request ,$category_id)
    {

        $data = $request->all();
        $category = Category::find($category_id);
        $category->category_name = $data['category_name'];
        $category->category_desc = $data['category_desc'];
        $category->category_parent = $data['category_parent'];

        $category->save();
        return Redirect::to('all-category');

    }

    public function add_category()
    {

        $category = Category::where('category_parent',0)->orderBy('category_id','DESC')->get();
        return view('admin.add_category')->with(compact('category'));
    }

    public function save_category(Request $request)
    {

        $data = $request->all();
        $category = new Category();
        $category->category_name = $data['category_name'];
        $category->category_desc = $data['category_desc'];
        $category->category_parent = $data['category_parent'];

        $category->save();
        session()->flash('message','Thêm danh mục thành công');

        return Redirect::to('add-category');

    }
}
