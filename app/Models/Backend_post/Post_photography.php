<?php

namespace App\Models\Backend_post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_photography extends Model
{
    use HasFactory;
    protected $fillable=['category_id','post_title_bn','post_image','status','view_count'];
}
