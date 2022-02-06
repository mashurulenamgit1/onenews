<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend_post\Post_Rajniti;
use App\Models\Admin\Postcategory;
use DB;

class RajnitiController extends Controller
{
    public function index()
    {
    	$post=DB::table('post__rajnitis')->join('postcategories','post__rajnitis.category_id','postcategories.id')
              ->select('post__rajnitis.*','postcategories.category_name')->orderBy('id','desc')->paginate(15);
        return view('pages.rajniti.rajniti', compact('post'));
    }

    public function pageNews()
    {

        return view('pages.rajniti.news_page');
    }
}
