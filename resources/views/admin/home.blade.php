@extends('admin.admin_layouts')
@section('admin_content')
@php
  $postone=DB::table('post__bangladeshis')->sum('view_count');
  $posttwo=DB::table('post__rajnitis')->sum('view_count');
  $postthree=DB::table('post__worlds')->sum('view_count');
  $postfour=DB::table('post__businesses')->sum('view_count');
  $postfive=DB::table('post__sports')->sum('view_count');
  $postsix=DB::table('post__opinions')->sum('view_count');
  $banner=DB::table('banners')->get();
@endphp


    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">

        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">রাজনীতির খবরের মোট ভিউ</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ ($posttwo) }}</h3>
              </div><!--  card-body--> 
            </div><!--  card -->
          </div><!--  col-3 -->

          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">বাংলাদেশী খবরের মোট ভিউ</h6>  
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ ($postone) }}</h3>
              </div><!--  card-body--> 
            </div><!--  card -->
          </div><!--  col-3 -->

          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">বিশ্বের খবরের মোট ভিউ</h6>  
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ ($postthree) }}</h3>
              </div><!--  card-body--> 
            </div><!--  card -->
          </div><!--  col-3 -->

          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">বাণিজ্যের খবরের মোট </h6>  
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ ($postfour) }}</h3>
              </div><!--  card-body--> 
            </div><!--  card -->
          </div><!--  col-3 -->
          
          </div><!-- col-3--> 

          </div><!-- sl-pagebody -->

          <div class="sl-pagebody">

          <div class="sl-pagebody">

          <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-success">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">বিজ্ঞাপন</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ count($banner) }}</h3>
              </div><!--  card-body--> 
            </div><!--  card -->
          </div><!--  col-3 -->

        </div><!-- row -->


      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
@endsection
