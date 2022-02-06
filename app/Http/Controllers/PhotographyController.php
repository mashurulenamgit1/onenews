<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend_post\Post_photography;
use App\Models\Admin\Postcategory;
use DB;

class PhotographyController extends Controller
{
    public function index()
    {
    	$post=DB::table('post_photographies')->join('postcategories','post_photographies.category_id','postcategories.id')
              ->select('post_photographies.*','postcategories.category_name')->orderBy('id','desc')->paginate(16);
        return view('pages.photography.photography',compact('post'));
    }

    public function pageNews()
    {

        return view('pages.photography.news_page');
    }
}
