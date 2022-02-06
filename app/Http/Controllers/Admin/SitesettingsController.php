<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class SitesettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function Sitesetting()
    {
    	$sitesetting=DB::table('sitesettings')->first();
    	return view('admin.site_setting.update_site_setting',compact('sitesetting'));
    }

    /*public function Storesitesetting(Request $request)
    {
    	$data=array();
    	$data['phone_one']=$request->phone_one;
    	$data['phone_two']=$request->phone_two;
    	$data['email']=$request->email;
    	$data['company_name']=$request->company_name;
    	$data['company_address']=$request->company_address;
    	$data['facebook']=$request->facebook;
    	$data['youtube']=$request->youtube;
    	$data['instagram']=$request->instagram;
    	$data['twitter']=$request->twitter;
    	
    	DB::table('sitesettings')->insert($data);
    	$notification=array(
                 'messege'=>'Site-setting Insert Done',
                 'alert-type'=>'success'
                       );
        return Redirect()->back()->with($notification);
        
    }

    public function Deletesitesetting($id)
    {
    	DB::table('sitesettings')->where('id',$id)->delete();*/
    	/*$image=$data->image;
        unlink($image);*/
    	/*$notification=array(
                 'messege'=>'Site-setting Delete Done',
                 'alert-type'=>'success'
                       );
        return Redirect()->back()->with($notification);
    }

    public function Editsitesetting($id)
    {
    	$sitesetting=DB::table('sitesettings')->where('id',$id)->first();
    	return view('admin.site_setting.update_site_setting',compact('sitesetting'));
    }*/

    public function Updatesitesetting(Request $request,$id)
    {
        $id=$request->id;
    	$data=array();
    	$data['phone_one']=$request->phone_one;
    	$data['phone_two']=$request->phone_two;
    	$data['email']=$request->email;
    	$data['company_name']=$request->company_name;
    	$data['company_address']=$request->company_address;
    	$data['facebook']=$request->facebook;
    	$data['youtube']=$request->youtube;
    	$data['instagram']=$request->instagram;
    	$data['twitter']=$request->twitter;
    	
    	DB::table('sitesettings')->where('id',$id)->update($data);
    	$notification=array(
                 'messege'=>'Site-settings Update Done',
                 'alert-type'=>'success'
                       );
        return Redirect()->route('admin.sitesettings')->with($notification);
        
    }

}