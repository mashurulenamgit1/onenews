@extends('admin.admin_layouts')

@section('admin_content')



    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Starlight</a>
        <span class="breadcrumb-item active">News Section</span>
      </nav>
      <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">New Post Add <a href="#" class="btn btn-success btn-sm pull-right">All Post</a></h6>
          <p class="mg-b-20 mg-sm-b-30">New Post add form</p>
          <form action="{{ route('store.rajpost') }}" method="post" enctype="multipart/form-data">
          	@csrf
          
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-8">
                <div class="form-group">
                  <label class="form-control-label">Post Title (BANGLA ): <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="post_title_bn"  >
                </div>
              </div><!-- col-4 -->  
              
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose Category" name="category_id">
                    <option label="Choose Category"></option>
                    @foreach($category as $row)
                    <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Post Details(first-part)<span class="tx-danger">*</span></label>
                   <textarea class="form-control" id="summernote" name="details_bn_one">
                    
                   </textarea>
                </div>  
              </div>
          

              <div class="col-lg-12">
              	<div class="form-group">
                  <label class="form-control-label">Post Details (second-part)<span class="tx-danger">*</span></label>
                   <textarea class="form-control" id="summernote1" name="details_bn_two">
                   	
                   </textarea>
                </div>	
              </div>
             

              <div class="col-lg-4">
              	<lebel>Post Image (Main Thumbnail)<span class="tx-danger">*</span></lebel>
              	<label class="custom-file">
      				  <input type="file" id="file" class="custom-file-input" name="post_image" onchange="readURL(this);" required="" accept="image">
      				  <span class="custom-file-control"></span>
      				  <img src="#" id="one" >
      				</label>
              </div>
             
            </div><!-- row -->
            <hr>


            <div class="row">
              <div class="col-lg-4">
                <label class="ckbox">
              <input type="checkbox" name="main_slider" value="1">
              <span>Main Slider</span>
            </label>
              </div><br>
              <div class="col-lg-4">
                <label class="ckbox">
                <input type="checkbox" name="current_news" value="1">
                <span>Current News</span>
              </label>
              </div><br>
              <div class="col-lg-4">
                <label class="ckbox">
                <input type="checkbox" name="current_post" value="1">
                <span>Current Post</span>
              </label>
              </div><br>
              <div class="col-lg-4">
                <label class="ckbox">
                <input type="checkbox" name="popular_post" value="1">
                <span>Popular Post</span>
              </label>
              </div><br>
              <div class="col-lg-4">
                <label class="ckbox">
                <input type="checkbox" name="general_news" value="1">
                <span>General News</span>
              </label>
              </div>
              <div class="col-lg-4">
                <label class="ckbox">
                <input type="checkbox" name="related_post" value="1">
                <span>Related Post</span>
              </label>
              </div>
            </div>
          

            <hr>
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Submit </button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </form>
        </div><!-- card -->
       
      </div><!-- sl-pagebody --> 
    </div><!-- sl-mainpanel -->





<script type="text/javascript">
	function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#one')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>

@endsection