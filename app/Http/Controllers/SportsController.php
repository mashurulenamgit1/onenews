<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend_post\Post_Sport;
use App\Models\Admin\Postcategory;
use DB;

class SportsController extends Controller
{
    public function index()
    {
    	$post=DB::table('post__sports')->join('postcategories','post__sports.category_id','postcategories.id')
              ->select('post__sports.*','postcategories.category_name')->orderBy('id','desc')->paginate(15);
        return view('pages.sports.sports', compact('post'));
    }

    public function pageNews()
    {
        return view('pages.sports.news_page');
    }
}
