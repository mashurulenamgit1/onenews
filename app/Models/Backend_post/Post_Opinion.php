<?php

namespace App\Models\Backend_post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_Opinion extends Model
{
    use HasFactory;
    protected $fillable=['category_id','post_title_bn','post_image','details_bn_one','details_bn_two','main_slider','popular_slider','popular_opinion','general_opinion','related_opinion','status','view_count'];
}
