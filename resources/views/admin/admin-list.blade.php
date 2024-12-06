@include('admin.layouts.header')
<body class="">
  <div class="wrapper ">
    @include('admin.layouts.sidebar')
    <div class="main-panel">
      @include('admin.layouts.navbar')
      
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
                    <h4 class="card-title mb-0">Admin List</h4>
                    <a href="{{ route('admin.create-admin') }}" target="_blank"  class="btn btn-success btn-sm" id="add-admin-btn">
                      <i class="material-icons">person_add</i> Add Admin
                    </a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>Sr. No</th>
                          <th>Name</th>
                          <th>Role</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th class="disabled-sorting text-center">Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Sr. No</th>
                          <th>Name</th>
                          <th>Role</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th class="text-center">Actions</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Nimish Gupta</td>
                          <td>Product Manager</td>
                          <td>nimish@mail.com</td>
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
                                      <h5 class="modal-title" id="exampleModalLongTitle">Edit Admin Details</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="container ">
                                        <form id="RegisterValidation" action="#" method="">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <select class="form-control" id="exampleAdminRole" name="role" required>
                                                  <option value="">Select Role</option>
                                                  <option value="user" selected>User</option>
                                                  <option value="admin">Admin</option>
                                                  <option value="moderator">Moderator</option>
                                                  <option value="editor">Editor</option>
                                                  <option value="viewer">Viewer</option>
                                                  <option value="superadmin">Super Admin</option>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="col-md-12 mt-5">
                                              <div class="form-group">
                                                <label for="exampleDesignation" class="bmd-label-floating">Designation *</label>
                                                <input type="text" class="form-control" id="exampleDesignation" name="designation" value="Software Engineer" required>
                                              </div>
                                            </div>
                                            <div class="col-md-6 mt-5">
                                              <div class="form-group">
                                                <label for="exampleName" class="bmd-label-floating">Name *</label>
                                                <input type="text" class="form-control" id="exampleName" name="name" value="John Doe" required>
                                              </div>
                                            </div>
                                            <div class="col-md-6 mt-5">
                                              <div class="form-group">
                                                <label for="exampleEmail" class="bmd-label-floating">Email Address *</label>
                                                <input type="email" class="form-control" id="exampleEmail" name="email" value="johndoe@example.com" required>
                                              </div>
                                            </div>
                                            <div class="col-md-2 mt-5">
                                              <div class="form-group">
                                                <select name="country_code" class="form-control" required>
                                                  <option value="" disabled>Select Code</option>
                                                  <option value="+1" selected>+1 (USA)</option>
                                                  <option value="+44">+44 (UK)</option>
                                                  <option value="+91">+91 (India)</option>
                                                  <option value="+61">+61 (Australia)</option>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="col-md-4 mt-5">
                                              <div class="form-group">
                                                <label for="examplePhone" class="bmd-label-floating">Phone Number *</label>
                                                <input type="text" class="form-control" id="examplePhone" name="phone" value="1234567890" required>
                                              </div>
                                            </div>
                                            <div class="col-md-2 mt-5">
                                              <div class="form-group">
                                                <select name="country_code" class="form-control" required>
                                                  <option value="" disabled>Select Code</option>
                                                  <option value="+1" selected>+1 (USA)</option>
                                                  <option value="+44">+44 (UK)</option>
                                                  <option value="+91">+91 (India)</option>
                                                  <option value="+61">+61 (Australia)</option>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="col-md-4 mt-5">
                                              <div class="form-group">
                                                <label for="exampleWhatsapp" class="bmd-label-floating">WhatsApp Number *</label>
                                                <input type="text" class="form-control" id="exampleWhatsapp" name="whatsapp" value="9876543210" required>
                                              </div>
                                            </div>
                                            <div class="card-footer text-left mt-5">
                                              <button type="submit" class="btn btn-rose">Update Admin</button>
                                            </div>
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
                                  <h5 class="modal-title" id="exampleModalLabel">Delete Admin</h5>
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
                          <td>Tauseef Anwar</td>
                          <td>Agency Manager </td>
                          <td>tauseef@mail.com</td>
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
                           
                            <!-- Button trigger modal -->
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                            <i class="material-icons">close</i>
                          </button>
                          <!-- Modal -->
                       
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Shubham </td>
                          <td>Transport Manager </td>
                          <td>shubham@mail.com</td>
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
                           
                            <!-- Button trigger modal -->
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                            <i class="material-icons">close</i>
                          </button>
                          <!-- Modal -->
                       
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Abhay Katakwar</td>
                          <td>Sales Manager</td>
                          <td>abhay@mail.com</td>
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
                           
                            <!-- Button trigger modal -->
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                            <i class="material-icons">close</i>
                          </button>
                          <!-- Modal -->
                       
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Charu Vaidya</td>
                          <td>Finance Manager</td>
                          <td>charu@mail.com</td>
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
                           
                            <!-- Button trigger modal -->
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                            <i class="material-icons">close</i>
                          </button>
                          <!-- Modal -->
                       
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
          </div>
          <!-- end row -->
        </div>
      </div>

      @include('admin.layouts.footer')

      