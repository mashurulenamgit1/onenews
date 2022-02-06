<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Postcategory;
use DB;
use Image;
class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function blog_catgory()
    {
        $category=Postcategory::all();
        return view('admin.blog.blog_category',compact('category'));
    }

    public function blog_storecatgory(Request $request)
    {
        $validatedData = $request->validate([
        'category_name' => 'required|unique:postcategories|max:55',
        ]);

        // $data=array();
        // $data['category_name']=$request->category_name;
        // DB::table('categories')->insert($data);

        $category = new Postcategory();
        $category->category_name =$request->category_name;
        $category->save();
        $notification=array(
                 'messege'=>'Post_Category Insert Done',
                 'alert-type'=>'success'
                       );
            return Redirect()->back()->with($notification);
    }

    public function DeleteCategory($id)
    {
         DB::table('postcategories')->where('id',$id)->delete();
         $notification=array(
                 'messege'=>'Post_Category Successfully Deleted',
                 'alert-type'=>'success'
                       );
            return Redirect()->back()->with($notification);
    }

    public function EditCategory($id)
    {
        $category=DB::table('postcategories')->where('id',$id)->first();
        return view('admin.blog.edit_blog_category',compact('category'));
    }

    public function UpdateCategory(Request $request,$id)
    {
        $validatedData = $request->validate([
        'category_name' => 'required|max:55',
        ]);
         $data=array();
         $data['category_name']=$request->category_name;
         $update= DB::table('postcategories')->where('id',$id)->update($data);
        if ($update) {
            $notification=array(
                 'messege'=>'Post_Category Successfully Updated',
                 'alert-type'=>'success'
                       );
            return Redirect()->route('post_category')->with($notification);
        }else{
            $notification=array(
                 'messege'=>'Nothing to update',
                 'alert-type'=>'success'
                       );
            return Redirect()->route('post_category')->with($notification);
        }
    }

    

}
