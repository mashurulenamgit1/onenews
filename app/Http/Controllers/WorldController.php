<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend_post\Post_World;
use App\Models\Admin\Postcategory;
use DB;

class WorldController extends Controller
{
    public function index()
    {
    	$post=DB::table('post__worlds')->join('postcategories','post__worlds.category_id','postcategories.id')
              ->select('post__worlds.*','postcategories.category_name')->orderBy('id','desc')->paginate(15);
        return view('pages.world.world', compact('post'));
    }

    public function pageNews()
    {
        return view('pages.bangladesh.news_page');
    }
}
