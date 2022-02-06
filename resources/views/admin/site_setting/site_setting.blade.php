<!--@/extends('admin.admin_layouts')
@/section('admin_content')-->
  <!-- ########## START: MAIN PANEL ########## -->
    <!--<div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Coupon Table</h5>
        </div>--><!-- sl-page-title -->

        <!--<div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Coupon List
          	<a href="#" class="btn btn-sm btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Add New</a>
          </h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p">ID</th>
                  <th class="wd-10p">Phone One</th>
                  <th class="wd-10p">Phone Two</th>
                  <th class="wd-10p">Email</th>
                  <th class="wd-10p">Company Name</th>
                  <th class="wd-10p">Company Address</th>
                  <th class="wd-10p">Facebook Link</th>
                  <th class="wd-10p">Youtube Link</th>
                  <th class="wd-10p">Instagram Link</th>
                  <th class="wd-10p">Twitter Link</th>
                  
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @/foreach($sitesetting as $row)
                <tr>
                  <td>{/{ $row->id }}</td>
                  <td>{/{ $row->phone_one }}</td>
                  <td>{/{ $row->phone_two }}</td>
                  <td>{/{ $row->email }}</td>
                  <td>{/{ $row->company_name }}</td>
                  <td>{/{ $row->company_address }}</td>
                  <td>{/{ $row->facebook }}</td>
                  <td>{/{ $row->youtube }}</td>
                  <td>{/{ $row->instagram }}</td>
                  <td>{/{ $row->twitter }}</td>
                  
                  <td>
                  	<a href="{/{ URL::to('edit/sitesetting/'.$row->id) }}" class="btn btn-sm btn-info">edit</a>
                  	<a href="{/{ URL::to('delete/sitesetting/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">delete</a>
                  </td>
                 
                </tr>
                @/endforeach
              </tbody>
            </table>
          </div>--><!-- table-wrapper -->
        <!--</div>--><!-- card -->
      <!--</div>--><!-- sl-pagebody -->


<!--modal-->
        <!-- LARGE MODAL -->
        <!--<div id="modaldemo3" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">SiteSetting Add</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @/if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @/foreach ($errors->all() as $error)
                              <li>{/{ $error }}</li>
                          @/endforeach
                      </ul>
                  </div>
              @/endif
            <form method="post" action="{/{ route('store.sitesettings') }}">
              @/csrf
              
              <div class="form-layout">
                <div class="row mg-b-25">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label"> Phone One: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="phone_one"  required="" value="">
                    </div>
                  </div>--><!-- col-4 -->
                  <!--<div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Phone Two: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="phone_two"  required="" value="">
                    </div>
                  </div> --> <!-- col-4 -->
                  <!--<div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Email <span class="tx-danger">*</span></label>
                      <input class="form-control" type="email" name="email"  required="" value="">
                    </div>
                  </div>--><!-- col-4 -->
                   <!--<div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Company Name <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="company_name"  required="" value="">
                    </div>
                  </div>--><!-- col-4 -->

                   <!--<div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Company Address <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="company_address"  required="" value="">
                    </div>
                  </div>--><!-- col-4 -->
                  <!--<div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Facebook Link<span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="facebook"  required="" value="">
                    </div>
                  </div>--><!-- col-4 -->
                  <!--<div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Youtube Link<span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="youtube"  required="" value="">
                    </div>
                  </div>--><!-- col-4 -->
                  <!--<div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Instagram Link<span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="instagram"  required="" value="">
                    </div>
                  </div>--><!-- col-4 -->
                 <!-- <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Twitter Link<span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="twitter"  required="" value="">
                    </div>
                  </div>--><!-- col-4 --><br>
                  

                <!--</div>--><!-- row -->
                
                <!--<br>
              
                <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                </div>--><!-- form-layout -->
            <!--</form>
            </div>
          </div>--><!-- modal-dialog -->
        <!--</div>--><!-- modal -->




<!--@/endsection-->