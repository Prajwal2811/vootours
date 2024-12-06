@include('admin.layouts.header')
<body class="">
  <div class="wrapper ">
    @include('admin.layouts.sidebar')
    <div class="main-panel">
      @include('admin.layouts.navbar')
      <style>
        .table .form-check .form-check-sign {
          top:0px;
        }
      </style>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <div class="d-flex justify-content-between align-items-center w-100">
                    <h4 class="card-title mb-0">Role List</h4>
                    <a href="{{ route('admin.create-role') }}" target="_blank" class="btn btn-success btn-sm" id="add-admin-btn">
                      <i class="material-icons">person_add</i> Add Role
                    </a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>Sr. No</th>
                          <th>Role</th>
                          <th>Status</th>
                          <th class="disabled-sorting text-center">Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Sr. No</th>
                          <th>Role</th>
                          <th>Status</th>
                          <th class="text-center">Actions</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Product Manager</td>
                          <td>
                            <div class="togglebutton">
                              <label>
                                <input type="checkbox">
                                <span class="toggle"></span>
                              </label>
                            </div>
                          </td>
                          <td class="td-actions">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="material-icons">edit</i></button>
                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Edit Role Details</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="container ">
                                        <form  action="#" method="">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <div class="col-md-12 mt-5">
                                                  <div class="form-group">
                                                    <label for="exampleEmail" class="bmd-label-floating">Role *</label>
                                                    <input type="text" value="admin" class="form-control" id="exampleEmail" required="true" name="email">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="container">
                                                <div class="row">
                                                  <div class="col-md-12">
                                                    <h4 class="card-title">Permissions</h4>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <div class="form-group">
                                                      <label for="permissions" class="bmd-label-floating">Agents</label>
                                                      <div id="permissions">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="create">
                                                            Add
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="edit">
                                                            Edit
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="delete">
                                                            Delete
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <div class="form-group">
                                                      <label for="permissions" class="bmd-label-floating">Sub-Agents</label>
                                                      <div id="permissions">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="create">
                                                            Add
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="edit">
                                                            Edit
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="delete">
                                                            Delete
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <div class="form-group">
                                                      <label for="permissions" class="bmd-label-floating">Agency</label>
                                                      <div id="permissions">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="create">
                                                            Add
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="edit">
                                                            Edit
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="delete">
                                                            Delete
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <div class="form-group">
                                                      <label for="permissions" class="bmd-label-floating">Products</label>
                                                      <div id="permissions">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="create">
                                                            Add
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="edit">
                                                            Edit
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="delete">
                                                            Delete
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-3">
                                                    <div class="form-group">
                                                      <label for="permissions" class="bmd-label-floating">Transportaion</label>
                                                      <div id="permissions">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="create">
                                                            Add
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="edit">
                                                            Edit
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="delete">
                                                            Delete
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <div class="form-group">
                                                      <label for="permissions" class="bmd-label-floating">Wallet</label>
                                                      <div id="permissions">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="create">
                                                            Add
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="edit">
                                                            Edit
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="delete">
                                                            Delete
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <div class="form-group">
                                                      <label for="permissions" class="bmd-label-floating">Report</label>
                                                      <div id="permissions">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="create">
                                                            Add
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="edit">
                                                            Edit
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="delete">
                                                            Delete
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary mx-4" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update changes</button>
                                          </div>
                                        </form>


                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                              <i class="material-icons">close</i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Role</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    Are you sure you want to delete this item? This action cannot be undone.
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Agency Manager</td>
                          <td>
                            <div class="togglebutton">
                              <label>
                                <input type="checkbox">
                                <span class="toggle"></span>
                              </label>
                            </div>
                          </td>
                          <td class="td-actions text-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="material-icons">edit</i></button>
                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Edit Role Details</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="container ">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <div class="col-md-12 mt-5">
                                                <div class="form-group">
                                                  <label for="exampleEmail" class="bmd-label-floating">Role *</label>
                                                  <input type="email" value="admin" class="form-control" id="exampleEmail" required="true" name="email">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary mx-4" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Update changes</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                              <i class="material-icons">close</i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Role</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    Are you sure you want to delete this item? This action cannot be undone.
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Transport Manager</td>
                          <td>
                            <div class="togglebutton">
                              <label>
                                <input type="checkbox">
                                <span class="toggle"></span>
                              </label>
                            </div>
                          </td>
                          <td class="td-actions text-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="material-icons">edit</i></button>
                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Edit Role Details</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="container ">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <div class="col-md-12 mt-5">
                                                <div class="form-group">
                                                  <label for="exampleEmail" class="bmd-label-floating">Role *</label>
                                                  <input type="email" value="admin" class="form-control" id="exampleEmail" required="true" name="email">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary mx-4" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Update changes</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                              <i class="material-icons">close</i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Role</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    Are you sure you want to delete this item? This action cannot be undone.
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Sales Manager</td>
                          <td>
                            <div class="togglebutton">
                              <label>
                                <input type="checkbox">
                                <span class="toggle"></span>
                              </label>
                            </div>
                          </td>
                          <td class="td-actions text-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="material-icons">edit</i></button>
                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Edit Role Details</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="container ">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <div class="col-md-12 mt-5">
                                                <div class="form-group">
                                                  <label for="exampleEmail" class="bmd-label-floating">Role *</label>
                                                  <input type="email" value="admin" class="form-control" id="exampleEmail" required="true" name="email">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary mx-4" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Update changes</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                              <i class="material-icons">close</i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Role</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    Are you sure you want to delete this item? This action cannot be undone.
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Finance Manager</td>
                          <td>
                            <div class="togglebutton">
                              <label>
                                <input type="checkbox">
                                <span class="toggle"></span>
                              </label>
                            </div>
                          </td>
                          <td class="td-actions text-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="material-icons">edit</i></button>
                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Edit Role Details</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="container ">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <div class="col-md-12 mt-5">
                                                <div class="form-group">
                                                  <label for="exampleEmail" class="bmd-label-floating">Role *</label>
                                                  <input type="email" value="admin" class="form-control" id="exampleEmail" required="true" name="email">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary mx-4" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Update changes</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                              <i class="material-icons">close</i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Role</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    Are you sure you want to delete this item? This action cannot be undone.
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      @include('admin.layouts.footer')

      