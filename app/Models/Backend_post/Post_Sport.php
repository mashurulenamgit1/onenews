<?php

namespace App\Models\Backend_post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_Sport extends Model
{
    use HasFactory;
    protected $fillable=['category_id','post_title_bn','post_image','details_bn_one','details_bn_two','main_slider','current_news','current_post','popular_post','general_news','related_post','status','view_count'];
}
