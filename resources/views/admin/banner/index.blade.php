@extends('admin.admin_layouts')
@section('admin_content')

  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Banner Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Banner List
          	<a href="#" class="btn btn-sm btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Add New</a>
          </h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Title</th>
                  <th class="wd-15p">Description</th>
                  <th class="wd-15p">Banner Image</th>
                  <th class="wd-15p">Status</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($banner as $row)
                <tr>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->title }}</td>
                  <td>{{ $row->description }}</td>
                  <td><img src="{{ URL::to($row->banner) }}" height="70px;" width="80px;"></td>
                  <td>
                    @if($row->status == 1)
                     <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-danger">Inactive</span>
                    @endif
                  </td>
                  <td>
                    <a href="{{ URL::to('edit/banner/'.$row->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                    <a href="{{ URL::to('delete/banner/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>

                    @if($row->status == 1)
                      <a href="{{ URL::to('inactive/banner/'.$row->id) }}" class="btn btn-sm btn-danger" title="Inactive"><i class="fa fa-thumbs-down"></i></a>
                    @else
                      <a href="{{ URL::to('active/banner/'.$row->id) }}" class="btn btn-sm btn-success" title="Active"><i class="fa fa-thumbs-up"></i></a>
                    @endif
                    
                  </td>
                 
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->


<!--modal-->
    <!-- LARGE MODAL -->
        <div id="modaldemo3" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-md">
              <div class="modal-header pd-x-80">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Banner Add</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
            <form method="post" action="{{ route('store.banner') }}" enctype="multipart/form-data">
              @csrf
              <div class="modal-body pd-20">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="title">
                </div>
                
                <div class="form-group">
                   <label for="exampleInputEmail1">Description<span class="tx-danger">*</span></label>
                   <textarea class="form-control" id="summernote" name="description">
                    
                   </textarea>
                </div>  
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Banner Image</label>
                  <input type="file" class="form-control"  aria-describedby="emailHelp" placeholder="" name="banner">
                </div>
              </div><!-- modal-body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
              </div>
            </form>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->


@endsection