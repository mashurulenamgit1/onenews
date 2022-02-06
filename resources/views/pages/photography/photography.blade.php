@extends('pages.index')
@section('content')

<div class="container">
<section id="contentSection">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="left_content">

        <div class="single_post_content">
          <h2><span>ফটোগ্রাফি</span></h2>
          <ul class="photograph_nav  wow fadeInDown">
            @foreach($post as $row)
            <li>
              <div class="photo_grid">
                <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="{{url('photography/news/'.$row->id)}}" title="{{$row->post_title_bn}}"> <img src="{{asset($row->post_image)}}" alt=""/>

                 </a></figure>

              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

@endsection