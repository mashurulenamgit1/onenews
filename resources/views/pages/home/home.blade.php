@extends('pages.index')
@section('content')

@php
$main_slider=DB::table('post__bangladeshis')->where('main_slider',1)->where('status',1)->orderBy('id','desc')->limit(1)->get();
$post=DB::table('post__bangladeshis')->where('general_news',1)->where('status',1)->orderBy('id','desc')->limit(4)->get();
@endphp

@php
$main_slider_one=DB::table('post__rajnitis')->where('main_slider',1)->where('status',1)->orderBy('id','desc')->limit(1)->get();
$post_one=DB::table('post__rajnitis')->where('general_news',1)->where('status',1)->orderBy('id','desc')->limit(4)->get();
@endphp

@php
$main_slider_two=DB::table('post__worlds')->where('main_slider',1)->where('status',1)->orderBy('id','desc')->limit(1)->get();
$post_two=DB::table('post__worlds')->where('general_news',1)->where('status',1)->orderBy('id','desc')->limit(4)->get();
@endphp

@php
$main_slider_three=DB::table('post__tecnos')->where('main_slider',1)->where('status',1)->orderBy('id','desc')->limit(1)->get();
$post_three=DB::table('post__tecnos')->where('general_news',1)->where('status',1)->orderBy('id','desc')->limit(4)->get();
@endphp

@php
$post_four=DB::table('post_photographies')->where('status',1)->orderBy('id','desc')->limit(4)->get();
@endphp

@php
$main_slider_five=DB::table('post__sports')->where('main_slider',1)->where('status',1)->orderBy('id','desc')->limit(1)->get();
$post_five=DB::table('post__sports')->where('general_news',1)->where('status',1)->orderBy('id','desc')->limit(4)->get();
@endphp

@php
$main_slider_six=DB::table('post_entertainments')->where('main_slider',1)->where('status',1)->orderBy('id','desc')->limit(1)->get();
$post_six=DB::table('post_entertainments')->where('general_news',1)->where('status',1)->orderBy('id','desc')->limit(4)->get();
@endphp

@php
$main_slider_seven=DB::table('post__businesses')->where('main_slider',1)->where('status',1)->orderBy('id','desc')->limit(1)->get();
$post_seven=DB::table('post__businesses')->where('general_news',1)->where('status',1)->orderBy('id','desc')->limit(4)->get();
@endphp


<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  
  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">

    <div class="single_post_content">
    <h2><span>বাংলাদেশ</span></h2> 
    <div class="single_post_content_left">
      <ul class="business_catgnav  wow fadeInDown">
        <li>
          @foreach($main_slider as $ms)
          <figure class="bsbig_fig"> <a href="{{url('bangladeshi/news/'.$ms->id)}}" class="featured_img"> 
            <img alt="" src="{{asset($ms->post_image)}}"> <span class="overlay"></span> </a>
            <figcaption><a href="{{url('bangladeshi/news/'.$ms->id)}}" class="catg_title">  {{$ms->post_title_bn}} </a> </figcaption>
          </figure>
          @endforeach
        </li>
      </ul>
    </div>
    <div class="single_post_content_right">
      <ul class="spost_nav">
        <li>
        @foreach($post as $gs)
          <div class="media wow fadeInDown"> <a href="{{url('bangladeshi/news/'.$gs->id)}}" class="media-left"> 
            <img alt="" src="{{asset($gs->post_image)}}"> </a>
            <div class="media-body"> <a href="{{url('bangladeshi/news/'.$gs->id)}}" class="catg_title"> {{$gs->post_title_bn}}</a> </div>
          </div>
          
        @endforeach
        </li>
        
      </ul>
      
        
    </div>
    </div>
  </div>
      </div>

      @php
      $post_11=DB::table('post__bangladeshis')->where('status',1)->where('current_post',1)->orderBy('id','desc')->limit(1)->get();
      $post_21=DB::table('post__rajnitis')->where('status',1)->where('current_post',1)->orderBy('id','desc')->limit(1)->get();
      $post_31=DB::table('post__worlds')->where('status',1)->where('current_post',1)->orderBy('id','desc')->limit(1)->get();
      $post_41=DB::table('post__sports')->where('status',1)->where('current_post',1)->orderBy('id','desc')->limit(1)->get();
      $post_51=DB::table('post__businesses')->where('status',1)->where('current_post',1)->orderBy('id','desc')->limit(1)->get();
      @endphp

      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>সাম্প্রতিক পোস্ট</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
            <li>
              @foreach($post_11 as $gs)
                <div class="media wow fadeInDown"> <a href="{{url('bangladeshi/news/'.$gs->id)}}" class="media-left"> 
                  <img alt="" src="{{asset($gs->post_image)}}"> </a>
                  <div class="media-body"> <a href="{{url('bangladeshi/news/'.$gs->id)}}" class="catg_title"> {{$gs->post_title_bn}}</a> </div>
                </div>
                
              @endforeach
            </li>

            <li>
              @foreach($post_21 as $gs)
                <div class="media wow fadeInDown"> <a href="{{url('rajniti/news/'.$gs->id)}}" class="media-left"> 
                  <img alt="" src="{{asset($gs->post_image)}}"> </a>
                  <div class="media-body"> <a href="{{url('rajniti/news/'.$gs->id)}}" class="catg_title"> {{$gs->post_title_bn}}</a> </div>
                </div>
                
              @endforeach
            </li>

            <li>
              @foreach($post_31 as $gs)
                <div class="media wow fadeInDown"> <a href="{{url('worldi/news/'.$gs->id)}}" class="media-left"> 
                  <img alt="" src="{{asset($gs->post_image)}}"> </a>
                  <div class="media-body"> <a href="{{url('worldi/news/'.$gs->id)}}" class="catg_title"> {{$gs->post_title_bn}}</a> </div>
                </div>
                
              @endforeach
            </li>

            <li>
              @foreach($post_41 as $gs)
              <div class="media wow fadeInDown"> <a href="{{url('sports/news/'.$gs->id)}}" class="media-left"> 
                <img alt="" src="{{asset($gs->post_image)}}"> </a>
                <div class="media-body"> <a href="{{url('sports/news/'.$gs->id)}}" class="catg_title"> {{$gs->post_title_bn}}</a> </div>
              </div>
              
            @endforeach
            </li>

            <li>
              @foreach($post_51 as $gs)
                <div class="media wow fadeInDown"> <a href="{{url('businesse/news/'.$gs->id)}}" class="media-left"> 
                  <img alt="" src="{{asset($gs->post_image)}}"> </a>
                  <div class="media-body"> <a href="{{url('businessse/news/'.$gs->id)}}" class="catg_title"> {{$gs->post_title_bn}}</a> </div>
                </div>
                
              @endforeach
            </li>
               
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">

            <div class="single_post_content">
            <h2><span>রাজনীতি</span></h2> 
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
                <li>
                  @foreach($main_slider_one as $ms)
                  <figure class="bsbig_fig"> <a href="{{url('rajniti/news/'.$ms->id)}}" class="featured_img"> 
                    <img alt="" src="{{asset($ms->post_image)}}"> <span class="overlay"></span> </a>
                    <figcaption><a href="{{url('rajniti/news/'.$ms->id)}}" class="catg_title">  {{$ms->post_title_bn}} </a> </figcaption>
                  </figure>
                  @endforeach
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <li>
                @foreach($post_one as $gs)
                  <div class="media wow fadeInDown"> <a href="{{url('rajniti/news/'.$gs->id)}}" class="media-left"> 
                    <img alt="" src="{{asset($gs->post_image)}}"> </a>
                    <div class="media-body"> <a href="{{url('rajniti/news/'.$gs->id)}}" class="catg_title"> {{$gs->post_title_bn}}</a> </div>
                  </div>
                  
                @endforeach
                </li>
                
              </ul>
              
                
            </div>
            </div>
          
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>বিশ্ব</span></h2> 
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    @foreach($main_slider_two as $ms)
                    <figure class="bsbig_fig"> <a href="{{url('worldi/news/'.$ms->id)}}" class="featured_img"> 
                      <img alt="" src="{{asset($ms->post_image)}}"> <span class="overlay"></span> </a>
                      <figcaption><a href="{{url('worldi/news/'.$ms->id)}}" class="catg_title">  {{$ms->post_title_bn}} </a> </figcaption>
                    </figure>
                    @endforeach
                  </li>
                </ul>
                <ul class="spost_nav">
                  <li>
                    @foreach($post_two as $gs)
                      <div class="media wow fadeInDown"> <a href="{{url('worldi/news/'.$gs->id)}}" class="media-left"> 
                        <img alt="" src="{{asset($gs->post_image)}}"> </a>
                        <div class="media-body"> <a href="{{url('worldi/news/'.$gs->id)}}" class="catg_title"> {{$gs->post_title_bn}}</a> </div>
                      </div>
                      
                    @endforeach
                  </li>
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>প্রযুক্তি</span></h2>
                <ul class="business_catgnav">
                  <li>
                    @foreach($main_slider_three as $ms)
                    <figure class="bsbig_fig"> <a href="{{url('techonology/news/'.$ms->id)}}" class="featured_img"> 
                      <img alt="" src="{{asset($ms->post_image)}}"> <span class="overlay"></span> </a>
                      <figcaption><a href="{{url('techonology/news/'.$ms->id)}}" class="catg_title">  {{$ms->post_title_bn}} </a> </figcaption>
                    </figure>
                    @endforeach
                  </li>
                </ul>
                <ul class="spost_nav">
                  <li>
                    @foreach($post_three as $gs)
                      <div class="media wow fadeInDown"> <a href="{{url('techonology/news/'.$gs->id)}}" class="media-left"> 
                        <img alt="" src="{{asset($gs->post_image)}}"> </a>
                        <div class="media-body"> <a href="{{url('techonology/news/'.$gs->id)}}" class="catg_title"> {{$gs->post_title_bn}}</a> </div>
                      </div>
                      
                    @endforeach
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_post_content">
            <h2><span>ফটোগ্রাফি</span></h2>
            <ul class="photograph_nav  wow fadeInDown">
            @foreach($post_four as $row)
            <li>
              <div class="photo_grid">
                <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="{{url('photography/news/'.$row->id)}}" title="{{$row->post_title_bn}}"> <img src="{{asset($row->post_image)}}" alt=""/>

                 </a></figure>

              </div>
            </li>
            @endforeach
              
            </ul>
          </div>
          <div class="single_post_content">
            <h2><span>খেলা</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav">
                <li>
                  @foreach($main_slider_five as $ms)
                  <figure class="bsbig_fig"> <a href="{{url('sports/news/'.$ms->id)}}" class="featured_img"> 
                    <img alt="" src="{{asset($ms->post_image)}}"> <span class="overlay"></span> </a>
                    <figcaption><a href="{{url('sports/news/'.$ms->id)}}" class="catg_title">  {{$ms->post_title_bn}} </a> </figcaption>
                  </figure>
                  @endforeach
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <li>
                  @foreach($post_five as $gs)
                    <div class="media wow fadeInDown"> <a href="{{url('sports/news/'.$gs->id)}}" class="media-left"> 
                      <img alt="" src="{{asset($gs->post_image)}}"> </a>
                      <div class="media-body"> <a href="{{url('sports/news/'.$gs->id)}}" class="catg_title"> {{$gs->post_title_bn}}</a> </div>
                    </div>
                    
                  @endforeach
                </li>
                
              </ul>
            </div>
          </div>
          <div class="single_post_content">
            <h2><span>বিনোদন</span></h2> 
            <div class="single_post_content_left">
              <ul class="business_catgnav">
                <li>
                    @foreach($main_slider_six as $ms)
                    <figure class="bsbig_fig"> <a href="{{url('entertainment/news/'.$ms->id)}}" class="featured_img"> 
                      <img alt="" src="{{asset($ms->post_image)}}"> <span class="overlay"></span> </a>
                      <figcaption><a href="{{url('entertainment/news/'.$ms->id)}}" class="catg_title">  {{$ms->post_title_bn}} </a> </figcaption>
                    </figure>
                    @endforeach
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <li>
                  @foreach($post_six as $gs)
                    <div class="media wow fadeInDown"> <a href="{{url('entertainment/news/'.$gs->id)}}" class="media-left"> 
                      <img alt="" src="{{asset($gs->post_image)}}"> </a>
                      <div class="media-body"> <a href="{{url('entertainment/news/'.$gs->id)}}" class="catg_title"> {{$gs->post_title_bn}}</a> </div>
                    </div>
                    
                  @endforeach
                </li>
                
              </ul>
            </div>
          </div>
          <div class="single_post_content">
            <h2><span>বাণিজ্য</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav">
                <li>
                  @foreach($main_slider_seven as $ms)
                  <figure class="bsbig_fig"> <a href="{{url('businesse/news/'.$ms->id)}}" class="featured_img"> 
                    <img alt="" src="{{asset($ms->post_image)}}"> <span class="overlay"></span> </a>
                    <figcaption><a href="{{url('businesse/news/'.$ms->id)}}" class="catg_title">  {{$ms->post_title_bn}} </a> </figcaption>
                  </figure>
                  @endforeach
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <li>
                  @foreach($post_seven as $gs)
                    <div class="media wow fadeInDown"> <a href="{{url('businesse/news/'.$gs->id)}}" class="media-left"> 
                      <img alt="" src="{{asset($gs->post_image)}}"> </a>
                      <div class="media-body"> <a href="{{url('businessse/news/'.$gs->id)}}" class="catg_title"> {{$gs->post_title_bn}}</a> </div>
                    </div>
                    
                  @endforeach
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>


      @php
      $post_1=DB::table('post__bangladeshis')->where('status',1)->where('popular_post',1)->orderBy('id','desc')->limit(1)->get();
      $post_2=DB::table('post__rajnitis')->where('status',1)->where('popular_post',1)->orderBy('id','desc')->limit(1)->get();
      $post_3=DB::table('post__worlds')->where('status',1)->where('popular_post',1)->orderBy('id','desc')->limit(1)->get();
      $post_4=DB::table('post__businesses')->where('status',1)->where('popular_post',1)->orderBy('id','desc')->limit(1)->get();
      $post_5=DB::table('post__sports')->where('status',1)->where('popular_post',1)->orderBy('id','desc')->limit(1)->get();
      $post_6=DB::table('post_entertainments')->where('status',1)->where('popular_post',1)->orderBy('id','desc')->limit(1)->get();
      $post_7=DB::table('post__tecnos')->where('status',1)->where('popular_post',1)->orderBy('id','desc')->limit(1)->get();
      @endphp


      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>জনপ্রিয় পোস্ট</span></h2>
            <ul class="spost_nav">
              <li>
              @foreach($post_1 as $gs)
              <div class="media wow fadeInDown"> <a href="{{url('bangladeshi/news/'.$gs->id)}}" class="media-left"> 
                  <img alt="" src="{{asset($gs->post_image)}}"> </a>
                  <div class="media-body"> <a href="{{url('bangladeshi/news/'.$gs->id)}}" class="catg_title"> {{$gs->post_title_bn}}</a> </div>
                </div>
              @endforeach
            </li>

            <li>
              @foreach($post_2 as $gs)
                <div class="media wow fadeInDown"> <a href="{{url('rajniti/news/'.$gs->id)}}" class="media-left"> 
                  <img alt="" src="{{asset($gs->post_image)}}"> </a>
                  <div class="media-body"> <a href="{{url('rajniti/news/'.$gs->id)}}" class="catg_title"> {{$gs->post_title_bn}}</a> </div>
                </div>
                
              @endforeach
            </li>

            <li>
              @foreach($post_3 as $gs)
                <div class="media wow fadeInDown"> <a href="{{url('worldi/news/'.$gs->id)}}" class="media-left"> 
                  <img alt="" src="{{asset($gs->post_image)}}"> </a>
                  <div class="media-body"> <a href="{{url('worldi/news/'.$gs->id)}}" class="catg_title"> {{$gs->post_title_bn}}</a> </div>
                </div>
                
              @endforeach
            </li>

            <li>
              @foreach($post_4 as $gs)
                <div class="media wow fadeInDown"> <a href="{{url('businesse/news/'.$gs->id)}}" class="media-left"> 
                  <img alt="" src="{{asset($gs->post_image)}}"> </a>
                  <div class="media-body"> <a href="{{url('businessse/news/'.$gs->id)}}" class="catg_title"> {{$gs->post_title_bn}}</a> </div>
                </div>
                
              @endforeach
            </li>

            <li>
            @foreach($post_5 as $gs)
              <div class="media wow fadeInDown"> <a href="{{url('sports/news/'.$gs->id)}}" class="media-left"> 
                <img alt="" src="{{asset($gs->post_image)}}"> </a>
                <div class="media-body"> <a href="{{url('sports/news/'.$gs->id)}}" class="catg_title"> {{$gs->post_title_bn}}</a> </div>
              </div>
              
            @endforeach
            </li>

            <li>
            @foreach($post_6 as $gs)
              <div class="media wow fadeInDown"> <a href="{{url('entertainment/news/'.$gs->id)}}" class="media-left"> 
                <img alt="" src="{{asset($gs->post_image)}}"> </a>
                <div class="media-body"> <a href="{{url('entertainment/news/'.$gs->id)}}" class="catg_title"> {{$gs->post_title_bn}}</a> </div>
              </div>
              
            @endforeach
            </li>

            <li>
            @foreach($post_7 as $gs)
              <div class="media wow fadeInDown"> <a href="{{url('techonology/news/'.$gs->id)}}" class="media-left"> 
                <img alt="" src="{{asset($gs->post_image)}}"> </a>
                <div class="media-body"> <a href="{{url('techonology/news/'.$gs->id)}}" class="catg_title"> {{$gs->post_title_bn}}</a> </div>
              </div>
              
            @endforeach
            </li>
              
            </ul>
          </div>
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">ক্যাটাগরি</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab"> ভিডিও</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                  <li><a href="{{url('rajnitii')}}">রাজনীতি</a></li>
                  <li><a href="{{url('bangladeshi')}}">বাংলাদেশ</a></li> 
                  <li><a href="{{url('worldi')}}">বিশ্ব</a></li>
                  <li><a href="{{url('businesse')}}">বাণিজ্য</a></li>
                  <li><a href="{{url('opinioni')}}">মতামত</a></li>
                  <li><a href="{{url('sportsi')}}">খেলা</a></li>
                  <li><a href="{{url('entertainmenti')}}">বিনোদন</a></li>
                  <li><a href="{{url('jobi')}}">চাকরি</a></li>
                  <li><a href="{{url('techonologyi')}}">প্রযুক্তি</a></li>
                  <li><a href="{{url('photographyi')}}">ফটোগ্রাফি</a></li>
                </ul> 
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments">
              </div>
            </div>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Sponsor</span></h2>
            <a class="sideAdd" href="#"><img src="images/add_img.jpg" alt=""></a> </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Sponsor</span></h2>
            <a class="sideAdd" href="#"><img src="images/add_img.jpg" alt=""></a> 
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Sponsor</span></h2>
            <a class="sideAdd" href="#"><img src="images/add_img.jpg" alt=""></a> 
          </div>
        </aside>
      </div>
    </div>
  </section>
  </div>

@endsection