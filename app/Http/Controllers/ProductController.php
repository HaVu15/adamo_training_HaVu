<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Size;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class ProductController extends Controller
{
    
    public function add_product()
    {

        $cate_product = Category::orderby('category_id','desc')->get();
        $size_product = Size::orderby('size_id','desc')->get();
        $color_product = Color::orderby('color_id','desc')->get();

        return view('admin.add_product')->with('cate_product',$cate_product)->with('size_product',$size_product)->with('color_product',$color_product);
    }

    public function all_product()
    {

        $all_product = DB::table('tbl_product')->join('tbl_category','tbl_category.category_id','=','tbl_product.category_id')
        ->join('tbl_color','tbl_color.color_id','=','tbl_product.color_id')
        ->join('tbl_size','tbl_size.size_id','=','tbl_product.size_id')
        ->orderby('tbl_product.product_id','desc')->get();
        return view('admin.all_product',['all_product'=>$all_product]);
    }

    public function delete_product($product_id)
    {

        DB::table('tbl_product')->where('product_id',$product_id)->delete();
        session()->flash('message','Xóa sản phẩm thành công');

        return Redirect::to('all-product');
    }

    public function edit_product($product_id)
    {

        $cate_product = DB::table('tbl_category')->orderby('category_id','desc')->get();
        $color_product = DB::table('tbl_color')->orderby('color_id','desc')->get();
        $size_product = DB::table('tbl_size')->orderby('size_id','desc')->get();
        $edit_product = DB::table('tbl_product')->where('product_id',$product_id)->get();
        
        return view('admin.edit_product')->with('cate_product',$cate_product)->with('size_product',$size_product)->with('color_product',$color_product)->with('edit_product',$edit_product);
    }

    public function update_product(Request $request ,$product_id)
    {

        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['color_id'] = $request->product_color;
        $data['size_id'] = $request->product_size;
        $get_image = $request->file('product_image');
        if($get_image)
        {
            $get_name_image = $get_image->getClientOriginalExtension();
            $new_image = $get_name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('uploads/product',$new_image);
            $data['product_image']= $new_image;
            DB::table('tbl_product')->where('product_id',$product_id)->update($data);
            session()->flash('message','Cập nhật sản phẩm thành công');

            return Redirect::to('all-product');
        }
        DB::table('tbl_product')->where('product_id',$product_id)->update($data);
        session()->flash('message','Cập nhật sản phẩm thành công');

        return Redirect::to('all-product');

    }

    public function save_product(Request $request)
    {
      

        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['color_id'] = $request->product_color;
        $data['size_id'] = $request->product_size;
        $data['product_image'] = $request->product_image;
        $get_image = $request->file('product_image');

        if($get_image)
        {
            $get_name_image = $get_image->getClientOriginalExtension();
            $new_image = $get_name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('uploads/product',$new_image);
            $data['product_image']= $new_image;
            DB::table('tbl_product')->insert($data);
            session()->flash('message','Thêm sản phẩm thành công');

            return Redirect::to('add-product');
        }
        $data['product_image']= '';
        DB::table('tbl_product')->insert($data);
        session()->flash('message','Thêm sản phẩm thành công');

        return Redirect::to('add-product');
    }
}
