<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend_post\Post_Business;
use App\Models\Admin\Postcategory;
use DB;

class BusinesseController extends Controller
{
    public function index()
    {
    	$post=DB::table('post__businesses')->join('postcategories','post__businesses.category_id','postcategories.id')
              ->select('post__businesses.*','postcategories.category_name')->orderBy('id','desc')->paginate(15);
        return view('pages.business.business', compact('post'));
    }

    public function pageNews()
    {

        

        return view('pages.business.news_page');
    }
}
