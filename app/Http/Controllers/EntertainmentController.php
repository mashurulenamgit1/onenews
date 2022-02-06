<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend_post\PostEntertainment;
use App\Models\Admin\Postcategory;
use DB;

class EntertainmentController extends Controller
{
    public function index()
    {
    	$post=DB::table('post_entertainments')->join('postcategories','post_entertainments.category_id','postcategories.id')
              ->select('post_entertainments.*','postcategories.category_name')->orderBy('id','desc')->paginate(15);
        return view('pages.entertainment.entertainment', compact('post'));
    }

    public function pageNews()
    {

        return view('pages.entertainment.news_page');
    }
}
