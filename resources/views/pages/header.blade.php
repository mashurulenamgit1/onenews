@php
$post=DB::table('post__bangladeshis')->where('status',1)->where('current_news',1)->orderBy('id','desc')->limit(1)->get();
$post_two=DB::table('post__rajnitis')->where('status',1)->where('current_news',1)->orderBy('id','desc')->limit(1)->get();
$post_three=DB::table('post__worlds')->where('status',1)->where('current_news',1)->orderBy('id','desc')->limit(1)->get();
$post_four=DB::table('post__businesses')->where('status',1)->where('current_news',1)->orderBy('id','desc')->limit(1)->get();
$post_five=DB::table('post__sports')->where('status',1)->where('current_news',1)->orderBy('id','desc')->limit(1)->get();
$post_six=DB::table('post_entertainments')->where('status',1)->where('current_news',1)->orderBy('id','desc')->limit(1)->get();
$post_seven=DB::table('post__tecnos')->where('status',1)->where('current_news',1)->orderBy('id','desc')->limit(1)->get();
@endphp
<div class="container-fluid">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">

              <li>

            </li>

              
            </ul>
          </div>
          <div class="header_top_right">
            <p>Friday, December 05, 2045</p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="index.html" class="logo"><img src="images/logo.jpg" alt=""></a></div>
          <div class="add_banner"><a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="{{url('/')}}"><span class="fa fa-home desktop-home"></span><span class="mobile-show">হোম</span></a></li>
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
    </nav>
  </section>
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>তাজা খবর</span> 
          <ul id="ticker01" class="news_sticker">

          @foreach($post as $cn)
            <li><a href="{{url('bangladeshi/news/'.$cn->id)}}"><img src="{{asset($cn->post_image)}}" alt="">{{$cn->post_title_bn}}</a></li>
          @endforeach
          @foreach($post_two as $cn_two)
            <li><a href="{{url('rajniti/news/'.$cn_two->id)}}"><img src="{{asset($cn_two->post_image)}}" alt="">{{$cn_two->post_title_bn}}</a></li>
          @endforeach
          @foreach($post_three as $cn_three)
            <li><a href="{{url('worldi/news/'.$cn_three->id)}}"><img src="{{asset($cn_three->post_image)}}" alt="">{{$cn_three->post_title_bn}}</a></li>
          @endforeach
          @foreach($post_four as $cn_four)
            <li><a href="{{url('businesse/news/'.$cn_four->id)}}"><img src="{{asset($cn_four->post_image)}}" alt="">{{$cn_four->post_title_bn}}</a></li>
          @endforeach
          @foreach($post_five as $cn_five)
            <li><a href="{{url('sports/news/'.$cn_five->id)}}"><img src="{{asset($cn_five->post_image)}}" alt="">{{$cn_five->post_title_bn}}</a></li>
          @endforeach
          @foreach($post_six as $cn_six)
            <li><a href="{{url('entertainment/news/'.$cn_six->id)}}"><img src="{{asset($cn_six->post_image)}}" alt="">{{$cn_six->post_title_bn}}</a></li>
          @endforeach
          @foreach($post_seven as $cn_seven)
            <li><a href="{{url('techonology/news/'.$cn_seven->id)}}"><img src="{{asset($cn_seven->post_image)}}" alt="">{{$cn_seven->post_title_bn}}</a></li>
          @endforeach
                      
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>