@extends('admin.admin_layouts')

@section('admin_content')

@php 
  $category=DB::table('postcategories')->get();
@endphp

    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Starlight</a>
        <span class="breadcrumb-item active">Product Section</span>
      </nav>
      <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title"> Post Update </h6>
          <p class="mg-b-20 mg-sm-b-30">Update Post </p>
          <form action="{{ url('update/sportpost/'.$post->id) }}" method="post" enctype="multipart/form-data">
          	@csrf
          <input type="hidden" name="category_id" value="{{ $post->category_id }}">
          <div class="form-layout">
            <div class="row mg-b-25">
              
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Post Title (BANGLA ): <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="post_title_bn"  value="{{ $post->post_title_bn }}">
                </div>
              </div><!-- col-4 -->         
              
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose Category" name="category_id">
                    <option label="Choose Category"></option>
                    @foreach($category as $row)
                    <option value="{{ $row->id }}" <?php if ($row->id == $post->category_id) {
                       echo "selected";
                    } ?> >{{ $row->category_name }}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->


              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Post Details (first-part)<span class="tx-danger">*</span></label>
                   <textarea class="form-control" id="summernote" name="details_bn_one">
                    {{ $post->details_bn_one }}
                   </textarea>
                </div>  
              </div>
              

              <div class="col-lg-12">
              	<div class="form-group">
                  <label class="form-control-label">Post Details (second-part)<span class="tx-danger">*</span></label>
                   <textarea class="form-control" id="summernote1" name="details_bn_two">
                   	{{ $post->details_bn_two }}
                   </textarea>
                </div>	
              </div>
             

              <div class="col-lg-4">
              	<lebel>Post Image (Main Thumbnail)<span class="tx-danger">*</span></lebel>
              	<label class="custom-file">
      				  <input type="file" id="file" class="custom-file-input" name="post_image" onchange="readURL(this);"  accept="image">
      				  <span class="custom-file-control"></span>
      				  <img src="#" id="one" >
      				</label>
              </div>
              <div class="col-lg-4">
                <lebel>Old Image<span class="tx-danger">*</span></lebel>
                <label class="custom-file">
                <img src="{{ URL::to($post->post_image) }}" style="height: 80px; width: 140px;" >
                <input type="hidden" name="old_image" value="{{ $post->post_image }}">
              </label>
              </div>
             
            </div><!-- row -->
            <hr>

            <div class="row">
              <div class="col-lg-4">
                <label class="ckbox">
            <input type="checkbox" name="main_slider" value="1" <?php if ($post->main_slider == 1) {
              echo "checked";
            }?> >
            <span>Main Slider</span>
          </label>
              </div>
              <div class="col-lg-4">
                <label class="ckbox">
            <input type="checkbox" name="current_news" value="1" <?php if ($post->current_news == 1) {
              echo "checked";
            }?>>
            <span>Current News</span>
          </label>
              </div>
              <div class="col-lg-4">
                <label class="ckbox">
            <input type="checkbox" name="current_post" value="1" <?php if ($post->current_post == 1) {
              echo "checked";
            }?>>
            <span>Current Post</span>
          </label>
              </div>
              <div class="col-lg-4">
                <label class="ckbox">
            <input type="checkbox" name="popular_post" value="1" <?php if ($post->popular_post == 1) {
              echo "checked";
            }?>>
            <span>Popular Post</span>
          </label>
              </div>
              <div class="col-lg-4">
                <label class="ckbox">
            <input type="checkbox" name="general_news" value="1" <?php if ($post->general_news == 1) {
              echo "checked";
            }?>>
            <span>General News</span>
          </label>
              </div>
              <div class="col-lg-4">
                <label class="ckbox">
            <input type="checkbox" name="related_post" value="1" <?php if ($post->related_post == 1) {
              echo "checked";
            }?>>
            <span>Related Post</span>
          </label>
              </div>
          </div>          

            <hr>
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Update </button>
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
