<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Postcategory;
use App\Models\Backend_post\Post_photography;
use DB;
use Image;

class PostPhotographyController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create()
    {
        $category=DB::table('postcategories')->get();
        //return response()->json($category);
        return view('admin.post.photography.create',compact('category'));
    }

    public function store(Request $request)
    {
        $data=array();
        $data['post_title_bn']=$request->post_title_bn;
        $data['details_bn_one']=$request->details_bn_one;
        $data['details_bn_two']=$request->details_bn_two;
        $data['category_id']=$request->category_id;
        $data['status']=1;

        $post_image=$request->file('post_image');
        if ($post_image) {
                $image_one_name= hexdec(uniqid()).'.'.$post_image->getClientOriginalExtension();
                Image::make($post_image)->resize(400,240)->save('public/media/post/'.$image_one_name);
                $data['post_image']='public/media/post/'.$image_one_name;
                DB::table('post_photographies')->insert($data);
                $notification=array(
                     'messege'=>'Successfully Post Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);

        }else{
             $data['post_image']='';
              DB::table('post_photographies')->insert($data);
               $notification=array(
                     'messege'=>'Successfully Post Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification); 
        }
    }

    public function index()
    {
        $post=DB::table('post_photographies')->join('postcategories','post_photographies.category_id','postcategories.id')
              ->select('post_photographies.*','postcategories.category_name')->get();
        return view('admin.post.photography.index',compact('post'));      
    }

    public function destroy($id)
    {
        $post=DB::table('post_photographies')->where('id',$id)->first();
        $image=$post->post_image;
        unlink($image);
        DB::table('post_photographies')->where('id',$id)->delete();
        $notification=array(
                     'messege'=>'Successfully Post Deleted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $post=DB::table('post_photographies')->where('id',$id)->first();
        return view('admin.post.photography.edit',compact('post'));
    }

    public function update(Request $request,$id)
    {
        $oldimage=$request->old_image;
        $data=array();
        $data['post_title_bn']=$request->post_title_bn;
        $data['details_bn_one']=$request->details_bn_one;
        $data['details_bn_two']=$request->details_bn_two;
        $data['category_id']=$request->category_id;
        $post_image=$request->file('post_image');
         if ($post_image) {
                unlink($oldimage);
                $image_one_name= hexdec(uniqid()).'.'.$post_image->getClientOriginalExtension();
                Image::make($post_image)->resize(400,240)->save('public/media/post/'.$image_one_name);
                $data['post_image']='public/media/post/'.$image_one_name;
                DB::table('post_photographies')->where('id',$id)->update($data);
                $notification=array(
                     'messege'=>'Successfully Post Update ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('all.blogpost')->with($notification);

         }else{
               $data['post_image']=$oldimage;
               DB::table('post_photographies')->where('id',$id)->update($data);
               $notification=array(
                     'messege'=>'Successfully Post Update ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('all.blogpost')->with($notification);  
        }
    }

    public function Inactive($id)
    {
         DB::table('post_photographies')->where('id',$id)->update(['status'=> 0]);
         $notification=array(
                     'messege'=>'Successfully Product Inactive ',
                     'alert-type'=>'success'
                    );
         return Redirect()->back()->with($notification);  
    }

    public function Active($id)
    {
         DB::table('post_photographies')->where('id',$id)->update(['status'=> 1]);
         $notification=array(
                     'messege'=>'Successfully Product Aactive ',
                     'alert-type'=>'success'
                    );
         return Redirect()->back()->with($notification);
    }
}
