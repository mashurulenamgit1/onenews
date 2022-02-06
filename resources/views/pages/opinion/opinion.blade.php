@extends('pages.index')
@section('content')

@php
$main_slider=DB::table('post__opinions')->where('main_slider',1)->where('status',1)->orderBy('id','desc')->limit(1)->get();
$post=DB::table('post__opinions')->where('general_opinion',1)->where('status',1)->orderBy('id','desc')->paginate(10);
$popular_slider=DB::table('post__opinions')->where('popular_slider',1)->where('status',1)->orderBy('id','desc')->limit(1)->get();
$popular_opinion=DB::table('post__opinions')->where('popular_opinion',1)->where('status',1)->orderBy('id','desc')->limit(4)->get();
@endphp

<div class="container">
<section id="contentSection">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="left_content">

		<div class="single_post_content">
		<h2><span>মতামত</span></h2> 
		<div class="single_post_content_left">
		  <ul class="business_catgnav  wow fadeInDown">
		    <li>
		      @foreach($main_slider as $ms)
		      <figure class="bsbig_fig"> <a href="{{url('opinion/news/'.$ms->id)}}" class="featured_img"> 
		      	<img alt="" src="{{asset($ms->post_image)}}"> <span class="overlay"></span> </a>
		        <figcaption><a href="{{url('opinion/news/'.$ms->id)}}" class="catg_title">  {{$ms->post_title_bn}} </a> </figcaption>
		      </figure>
		      @endforeach
		    </li>
		  </ul>

		  <ul class="spost_nav">
		    <li>
		      @foreach($post as $gs)
		      <div class="media wow fadeInDown"> <a href="{{url('opinion/news/'.$gs->id)}}" class="media-left"> 
		      	<img alt="" src="{{asset($gs->post_image)}}"> </a>
		        <div class="media-body"> <a href="{{url('opinion/news/'.$gs->id)}}" class="catg_title"> {{$gs->post_title_bn}}</a> </div>
		      </div>
		      
		    @endforeach
		    </li>
		    <ul class="pagination pagination-sm">
		  {{  $post->links() }}		    
		  </ul>
		    </ul>
		</div>
		<div class="single_post_content_right">

			  <ul class="business_catgnav  wow fadeInDown">
		    <li>
		      @foreach($popular_slider as $mp)
		      <figure class="bsbig_fig"> <a href="{{url('opinion/news/'.$mp->id)}}" class="featured_img"> 
		      	<img alt="" src="{{asset($mp->post_image)}}"> <span class="overlay"></span> </a>
		        <figcaption><a href="{{url('opinion/news/'.$mp->id)}}" class="catg_title">  {{$mp->post_title_bn}} </a> </figcaption>
		      </figure>
		      @endforeach
		    </li>
		  </ul>

		  <ul class="spost_nav">
		    <li>
		      @foreach($popular_opinion as $gd)
		      <div class="media wow fadeInDown"> <a href="{{url('opinion/news/'.$gd->id)}}" class="media-left"> 
		      	<img alt="" src="{{asset($gd->post_image)}}"> </a>
		        <div class="media-body"> <a href="{{url('opinion/news/'.$gd->id)}}" class="catg_title"> {{$gd->post_title_bn}}</a> </div>
		      </div>
		      
		    @endforeach
		      
		    </li>
		  </ul>
		</div>
		</div>
	</div>
</div>
</div>
</section>

</div>

@endsection