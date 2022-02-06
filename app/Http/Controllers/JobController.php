<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend_post\Post_Job;
use App\Models\Admin\Postcategory;
use DB;

class JobController extends Controller
{
    public function index()
    {
    	$post=DB::table('post__jobs')->join('postcategories','post__jobs.category_id','postcategories.id')
              ->select('post__jobs.*','postcategories.category_name')->orderBy('id','desc')->paginate(15);
        return view('pages.job.job', compact('post'));
    }

    public function pageNews()
    {
        return view('pages.job.news_page');
    }
}
