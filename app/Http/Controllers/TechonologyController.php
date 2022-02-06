<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend_post\Post_Tecno;
use App\Models\Admin\Postcategory;
use DB;

class TechonologyController extends Controller
{
    public function index()
    {
    	$post=DB::table('post__tecnos')->join('postcategories','post__tecnos.category_id','postcategories.id')
              ->select('post__tecnos.*','postcategories.category_name')->orderBy('id','desc')->paginate(15);
        return view('pages.techonology.techonology',compact('post'));
    }

    public function pageNews()
    {
        return view('pages.techonology.news_page');
    }
}
