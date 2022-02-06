<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend_post\Post_Opinion;
use App\Models\Admin\Postcategory;
use DB;

class OpinionController extends Controller
{
    public function index()
    {

    	//$post=DB::table('post__opinions')->join('postcategories','post__opinions.category_id','postcategories.id')
          //    ->select('post__opinions.','postcategories.category_name')->orderBy('id','desc')->paginate(15);
        return view('pages.opinion.opinion');//, compact('post'));
    }

    public function pageNews()
    {

        return view('pages.opinion.news_page');
    }
}
