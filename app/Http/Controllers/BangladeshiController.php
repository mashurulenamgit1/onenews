<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend_post\Post_Bangladeshi;
use App\Models\Admin\Postcategory;
use DB;

class BangladeshiController extends Controller
{
    public function index()
    {
    	$post=DB::table('post__bangladeshis')->join('postcategories','post__bangladeshis.category_id','postcategories.id')
              ->select('post__bangladeshis.*','postcategories.category_name')->orderBy('id','desc')->paginate(15);
        return view('pages.bangladesh.bangladesh', compact('post'));
    }

    public function pageNews()
    {

        return view('pages.bangladesh.news_page');
    }
}
