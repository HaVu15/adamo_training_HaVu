<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Color;
use App\Models\Size;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class GalleryController extends Controller
{
    public function add_gallery($product_id)
    {
        $pro_id = $product_id;
        return view('admin.add_gallery')->with(compact('pro_id'));

    }

    public function insert_gallery(Request $request,$pro_id)
    {
        $get_image = $request->file('file');
        if($get_image){
            foreach($get_image as $image){
            $get_name_image = $image->getClientOriginalExtension();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$image->getClientOriginalExtension();
            $image->move('uploads/product/gallery',$new_image);
            $gallery = new Gallery();
            $gallery->gallery_name = $new_image;
            $gallery->gallery_image = $new_image;
            $gallery->product_id = $pro_id;
            $gallery->save();
            }
        }
            session()->flash('message','Thêm thư viện ảnh thành công');
            return Redirect()->back();

    }

    public function delete_gallery(Request $request)
    {
        $gal_id = $request->gal_id;
        $gallery = Gallery::find($gal_id);
        unlink('uploads/product/gallery/'.$gallery->gallery_image);
        $gallery->delete();


    }

    public function select_gallery(Request $request)
    { 
        $product_id = $request->pro_id;
        $gallery = Gallery::where('product_id',$product_id)->get();
        $gallery_count = $gallery->count();
        $output = ' <table class="table table-hover">
        <thead>
          <tr>
            <th>Thứ tự</th>
            <th>Tên hình ảnh</th>
            <th>Hình ảnh</th>
            <th>Quản lý</th>
          </tr>
        </thead>
        <tbody>
        ';
        if($gallery_count>0){
            $i =0;
            foreach($gallery as $key =>$gal){
                $i++;
                $output .='<tr>
                <td>'.$i.'</td>
                <td>'.$gal->gallery_name.'</td>
                <td><img src ="'.url('/uploads/product/gallery/'.$gal->gallery_image).'" class="img-thumbnail" width="80" height="100"</td>
                <td>
                    <button data-gal_id="'.$gal->gallery_id.'" class="btn btn-xs btn-danger delete-gallery">Xóa</button>
                
                </td>
              </tr>
                ';
            }
        }else{
            $output .='
                <tr>
                  <td colspan="4">Sản phẩm chưa có thư iện ảnh</td>
                </tr>

            ';
        }
        echo $output;
        
    }
}
