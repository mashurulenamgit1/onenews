<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Postcategory;
use App\Models\Backend_post\Post_Opinion;
use DB;
use Image;

class PostOpinionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create()
    {
    	$category=DB::table('postcategories')->get();
    	//return response()->json($category);
    	return view('admin.post.opinion.create',compact('category'));
    }

    public function store(Request $request)
    {
    	$data=array();
    	$data['post_title_bn']=$request->post_title_bn;
    	$data['category_id']=$request->category_id;
    	$data['details_bn_one']=$request->details_bn_one;
    	$data['details_bn_two']=$request->details_bn_two;
    	$data['main_slider']=$request->main_slider;
    	$data['popular_slider']=$request->popular_slider;
    	$data['popular_opinion']=$request->popular_opinion;
    	$data['general_opinion']=$request->general_opinion;
    	$data['related_opinion']=$request->related_opinion;
        $data['status']=1;

    	$post_image=$request->file('post_image');
    	if ($post_image) {
    		    $image_one_name= hexdec(uniqid()).'.'.$post_image->getClientOriginalExtension();
                Image::make($post_image)->resize(400,240)->save('public/media/post/'.$image_one_name);
                $data['post_image']='public/media/post/'.$image_one_name;
                DB::table('post__opinions')->insert($data);
                $notification=array(
                     'messege'=>'Successfully Post Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);

    	}else{
    		 $data['post_image']='';
              DB::table('post__opinions')->insert($data);
               $notification=array(
                     'messege'=>'Successfully Post Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);	
    	}
    }

    public function index()
    {
    	$post=DB::table('post__opinions')->join('postcategories','post__opinions.category_id','postcategories.id')
    	      ->select('post__opinions.*','postcategories.category_name')->get();
    	return view('admin.post.opinion.index',compact('post'));      
    }

    public function destroy($id)
    {
    	$post=DB::table('post__opinions')->where('id',$id)->first();
    	$image=$post->post_image;
    	unlink($image);
    	DB::table('post__opinions')->where('id',$id)->delete();
    	$notification=array(
                     'messege'=>'Successfully Post Deleted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);
    }

    public function edit($id)
    {
    	$post=DB::table('post__opinions')->where('id',$id)->first();
    	return view('admin.post.opinion.edit',compact('post'));
    }

    public function update(Request $request,$id)
    {
    	$oldimage=$request->old_image;
    	$data=array();
    	$data['post_title_bn']=$request->post_title_bn;
    	$data['category_id']=$request->category_id;
    	$data['details_bn_one']=$request->details_bn_one;
    	$data['details_bn_two']=$request->details_bn_two;
    	$data['main_slider']=$request->main_slider;
    	$data['popular_slider']=$request->popular_slider;
    	$data['popular_opinion']=$request->popular_opinion;
    	$data['general_opinion']=$request->general_opinion;
    	$data['related_opinion']=$request->related_opinion;
    	$post_image=$request->file('post_image');
    	 if ($post_image) {
    		    unlink($oldimage);
    		    $image_one_name= hexdec(uniqid()).'.'.$post_image->getClientOriginalExtension();
                Image::make($post_image)->resize(400,240)->save('public/media/post/'.$image_one_name);
                $data['post_image']='public/media/post/'.$image_one_name;
                DB::table('post__opinions')->where('id',$id)->update($data);
                $notification=array(
                     'messege'=>'Successfully Post Update ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('all.blogpost')->with($notification);

    	 }else{
    		   $data['post_image']=$oldimage;
               DB::table('post__opinions')->where('id',$id)->update($data);
               $notification=array(
                     'messege'=>'Successfully Post Update ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('all.blogpost')->with($notification);	
    	}
    }

    public function Inactive($id)
    {
         DB::table('post__opinions')->where('id',$id)->update(['status'=> 0]);
         $notification=array(
                     'messege'=>'Successfully Product Inactive ',
                     'alert-type'=>'success'
                    );
         return Redirect()->back()->with($notification);  
    }

    public function Active($id)
    {
         DB::table('post__opinions')->where('id',$id)->update(['status'=> 1]);
         $notification=array(
                     'messege'=>'Successfully Product Aactive ',
                     'alert-type'=>'success'
                    );
         return Redirect()->back()->with($notification);
    }
}
