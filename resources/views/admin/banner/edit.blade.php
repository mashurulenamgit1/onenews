@extends('admin.admin_layouts')
@section('admin_content')

  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Banner Update</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Banner Update
          	
          </h6>
          <br>
          <div class="table-wrapper">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
            <form method="post" action="{{ url('update/banner/'.$banner->id) }}" enctype="multipart/form-data">
              @csrf
              <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title" value="{{ $banner->title }}">
                </div>
              </div><!-- col-4 -->
            </div><br>
            <div class="row mg-b-25">
              <div class="form-group">
                   <label for="exampleInputEmail1">Description<span class="tx-danger">*</span></label>
                   <textarea class="form-control" id="summernote" name="description">
                    {{ $banner->description }}
                   </textarea>
                </div>
              </div><br>
              <div class="row mg-b-25">
                <div class="form-group">
                  <label for="exampleInputEmail1">New Banner</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="brand_logo">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Old Banner</label><br>
                 <img src="{{ URL::to($banner->banner) }}" style="height: 70px; width: 90px;">
                 <input type="hidden" name="old_logo" value="{{ $banner->banner }}">
                </div>
              </div><!-- modal-body -->

              <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20">Update</button>
              </div>
              </div>

            </form>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->
</div>


@endsection