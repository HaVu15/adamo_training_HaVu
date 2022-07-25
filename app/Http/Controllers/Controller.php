<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use App\Models\Gallery;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $all_product = DB::table('tbl_product')->where('category_id','5')->orderBy('product_id','desc')->limit(4)->get();
        $all_product1 = DB::table('tbl_product')->where('category_id','7')->orderBy('product_id','desc')->get();

        return view('pages.home')->with('all_product',$all_product)->with('all_product1',$all_product1);

    }

    

    public function for_women()
    {
        $cate_product = DB::table('tbl_category')->where('category_parent','5')->orderBy('category_id','desc')->get();
         
        if(isset($_GET['sort_by'])){
            $sort_by=$_GET['sort_by'];
            if($sort_by=='giam_dan'){
                $all_product = DB::table('tbl_product')->where('category_id','5')->orderBy('product_price','desc')->paginate(6);

            }
            if($sort_by=='tang_dan'){
                $all_product = DB::table('tbl_product')->where('category_id','5')->orderBy('product_price','asc')->paginate(6);

            }
            if($sort_by=='kytu_az'){
                $all_product = DB::table('tbl_product')->where('category_id','5')->orderBy('product_name','desc')->paginate(6);

            }
            if($sort_by=='kytu_za'){
                $all_product = DB::table('tbl_product')->where('category_id','5')->orderBy('product_name','asc')->paginate(6);

            }
        }
        // $all_product = DB::table('tbl_product')->where('category_id','5')->paginate();

        return view('pages.product')->with('all_product',$all_product)->with('cate_product',$cate_product);

    }

    public function detail($product_id)
    {
        $gallery = Gallery::where('product_id',$product_id)->get();

        $all_product = DB::table('tbl_product')->where('tbl_product.product_id',$product_id)->get();
       

        return view('pages.detail')->with('all_product',$all_product)->with('gallery',$gallery);

    }


}
