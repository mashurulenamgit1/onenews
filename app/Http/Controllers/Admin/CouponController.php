<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function Newslater()
    {
        $sub=DB::table('newslaters')->get();
        return view('admin.coupon.newslater',compact('sub'));
    }

    public function DeleteSub($id)
    {
        DB::table('newslaters')->where('id',$id)->delete();
        $notification=array(
                 'messege'=>'Subscriber Delete Done',
                 'alert-type'=>'success'
                       );
        return Redirect()->back()->with($notification);
    }

    public function Seo()
    {
        $seo=DB::table('seo')->first();
        return view('admin.coupon.seo',compact('seo'));
    }

    /*public function Storeseo(Request $request)
    {
        $data=array();
         $data['meta_title']=$request->meta_title;
         $data['meta_author']=$request->meta_author;
         $data['meta_tag']=$request->meta_tag;
         $data['meta_description']=$request->meta_description;
         $data['google_analytics']=$request->google_analytics;
         $data['bing_analytics']=$request->bing_analytics;
        DB::table('seo')->insert($data);
        $notification=array(
                 'messege'=>'Seo Insert Done',
                 'alert-type'=>'success'
                       );
        return Redirect()->back()->with($notification);
    }

    public function Deleteseo($id)
    {
        DB::table('seo')->where('id',$id)->delete();
        $notification=array(
                 'messege'=>'Seo Delete Done',
                 'alert-type'=>'success'
                       );
        return Redirect()->back()->with($notification);

    }

    public function Editseo($id)
    {
        $seo=DB::table('seo')->where('id',$id)->first();
        return view('admin.coupon.seo',compact('seo'));
    }*/

    public function UpdateSeo(Request $request)
    {
        $id=$request->id;
         $data=array();
         $data['meta_title']=$request->meta_title;
         $data['meta_author']=$request->meta_author;
         $data['meta_tag']=$request->meta_tag;
         $data['meta_description']=$request->meta_description;
         $data['google_analytics']=$request->google_analytics;
         $data['bing_analytics']=$request->bing_analytics;
         DB::table('seo')->where('id',$id)->update($data);
         $notification=array(
                 'messege'=>'SEO Updated',
                 'alert-type'=>'success'
                       );
        return Redirect()->back()->with($notification);
    }

}
