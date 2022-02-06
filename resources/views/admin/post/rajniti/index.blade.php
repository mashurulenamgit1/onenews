@extends('admin.admin_layouts')
@section('admin_content')
  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Post Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Post List </h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Post_Title(Bangla)</th>
                  <th class="wd-15p">Category(bangla)</th>
                  <th class="wd-15p">Image</th>
                  <th class="wd-15p">Status</th>
                  <th class="wd-15p">View</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($post as $row)
                <tr>
                  <td>
                    {{$row->id}}
                  </td>
                  <td>{{ $row->post_title_bn }}</td>
                  <td>{{ $row->category_name }}</td>
                  <td><img src="{{ URL::to($row->post_image) }}" height="50px;" width="50px;"></td>
                  <td>
                    @if($row->status == 1)
                     <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-danger">Inactive</span>
                    @endif
                  </td>
                  <td>{{ $row->view_count }}</td>
                  <td>
                  	<a href="{{ URL::to('edit/rajnitipost/'.$row->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                  	<a href="{{ URL::to('delete/rajpost/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
                    @if($row->status == 1)
                      <a href="{{ URL::to('inactive/rajpost/'.$row->id) }}" class="btn btn-sm btn-danger" title="Inactive"><i class="fa fa-thumbs-down"></i></a>
                    @else
                      <a href="{{ URL::to('active/rajpost/'.$row->id) }}" class="btn btn-sm btn-success" title="Active"><i class="fa fa-thumbs-up"></i></a>
                    @endif
                  </td>
                 
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->
  </div>



@endsection