<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Banner;
//use Illuminate\Support\Str;
use DB;

class BannerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function Create()
    {
        $banner=Banner::all();
        return view('admin.banner.index',compact('banner'));
    }

    public function storebanner(Request $request)
    {
        $validatedData = $request->validate([
        'title'=>'string|required|max:50',
        'description'=>'string|nullable',
        ]);

        $data=array();
        $data['title']=$request->title;
        $data['description']=$request->description;
        $data['status']=1;
        $image=$request->file('banner');
            if ($image) {
                // $image_name= str_random(5);
                $image_name= date('dmy_H_s_i');

                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/media/banner/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
              
                $data['banner']=$image_url;
                $banner=DB::table('banners')
                          ->insert($data);
                    $notification=array(
                     'messege'=>'Successfully Banner Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);                      
            }else{
              $banner=DB::table('banners')
                          ->insert($data);
                 $notification=array(
                     'messege'=>'Done!',
                     'alert-type'=>'success'
                      );
                return Redirect()->back()->with($notification); 
            }

    }

    public function DeleteBanner($id)
    {
        $data=DB::table('banners')->where('id',$id)->first();
        $image=$data->banner;
        unlink($image);
        $brand=DB::table('banners')->where('id',$id)->delete();
                $notification=array(
                     'messege'=>'Successfully Banner Deleted ',
                     'alert-type'=>'success'
                );
        return Redirect()->back()->with($notification);   

    }

    public function EditBanner($id)
    {
         $banner=DB::table('banners')->where('id',$id)->first();
         return view('admin.banner.edit',compact('banner'));
    }

    public function UpdateBanner(Request $request,$id)
    {
        $oldlogo=$request->old_logo;
        $data=array();
        $data['title']=$request->title;
        $data['description']=$request->description;
        //$data['status']=1; 
        $image=$request->file('banner');
            if ($image) {
                unlink($oldlogo);
                $image_name= date('dmy_H_s_i');
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/media/banner/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['banner']=$image_url;
                $brand=DB::table('banners')->where('id',$id)->update($data);
                    $notification=array(
                     'messege'=>'Successfully Banner Updated ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('banners')->with($notification);                      
            }else{
              $brand=DB::table('banners')->where('id',$id)->update($data);
                 $notification=array(
                     'messege'=>'Update without image!',
                     'alert-type'=>'success'
                      );
                return Redirect()->route('banners')->with($notification); 
            }
    }

    public function Inactive($id)
    {
         DB::table('banners')->where('id',$id)->update(['status'=> 0]);
         $notification=array(
                     'messege'=>'Successfully Banner Inactive ',
                     'alert-type'=>'success'
                    );
         return Redirect()->back()->with($notification);  
    }

    public function Active($id)
    {
         DB::table('banners')->where('id',$id)->update(['status'=> 1]);
         $notification=array(
                     'messege'=>'Successfully Banner Active ',
                     'alert-type'=>'success'
                    );
         return Redirect()->back()->with($notification);
    }
    

}