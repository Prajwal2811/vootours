@include('admin.layouts.header')
<body class="">
  <div class="wrapper ">
    @include('admin.layouts.sidebar')
    <div class="main-panel">
      @include('admin.layouts.navbar')
      
      <!-- End Navbar -->
      <div class="content">
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card ">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons"></i>
                    </div>
                    <h4 class="card-title">Create Admins</h4>
                  </div>
                  <div class="container">
                    <form id="RegisterValidation" action="#" method="">
                      <div class="row">
                        <div class="col-md-12 mt-4" >
                          <div class="form-group">
                            <select class="form-control" id="exampleAdminRole" name="role" required>
                              <option value="">Select Role</option>
                              <option value="user">User</option>
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
                            <label for="exampleName" class="bmd-label-floating">Designation *</label>
                            <input type="text"  class="form-control" id="exampleName" required="true" name="designation">
                          </div>
                        </div>
                        <div class="col-md-6 mt-3">
                          <div class="form-group">
                            <label for="exampleName" class="bmd-label-floating">Name *</label>
                            <input type="text" class="form-control" id="exampleName" required="true" name="name">
                          </div>
                        </div>
                        <div class="col-md-6 mt-3">
                          <div class="form-group">
                            <label for="exampleEmail" class="bmd-label-floating">Email Address *</label>
                            <input type="email" class="form-control" id="exampleEmail" required="true" name="email">
                          </div>
                        </div>
                        <div class="col-md-2 mt-3">
                          <div class="form-group">
                            <select name="country_code" class="form-control" required>
                              <option value="" disabled {{ old('country_code') ? '' : 'selected' }}>Country Code</option>
                              <option value="+1" {{ old('country_code') == '+1' ? 'selected' : '' }}>+1 (USA)</option>
                              <option value="+44" {{ old('country_code') == '+44' ? 'selected' : '' }}>+44 (UK)</option>
                              <option value="+91" {{ old('country_code') == '+91' ? 'selected' : '' }}>+91 (India)</option>
                              <option value="+61" {{ old('country_code') == '+61' ? 'selected' : '' }}>+61 (Australia)</option>
                          </select>
                          </div>
                        </div>
                        <div class="col-md-4 mt-3">
                          <div class="form-group">
                            <label for="exampleEmail" class="bmd-label-floating"> Phone Number *</label>
                            <input type="email" class="form-control" id="exampleEmail" required="true" name="email">
                          </div>
                        </div>
                        <div class="col-md-2 mt-3">
                          <div class="form-group">
                            <select name="country_code" class="form-control" required>
                              <option value="" disabled {{ old('country_code') ? '' : 'selected' }}>Country Code</option>
                              <option value="+1" {{ old('country_code') == '+1' ? 'selected' : '' }}>+1 (USA)</option>
                              <option value="+44" {{ old('country_code') == '+44' ? 'selected' : '' }}>+44 (UK)</option>
                              <option value="+91" {{ old('country_code') == '+91' ? 'selected' : '' }}>+91 (India)</option>
                              <option value="+61" {{ old('country_code') == '+61' ? 'selected' : '' }}>+61 (Australia)</option>
                          </select>
                          </div>
                        </div>
                        <div class="col-md-4 mt-3">
                          <div class="form-group">
                            <label for="exampleEmail" class="bmd-label-floating"> Whatsapp Number *</label>
                            <input type="email" class="form-control" id="exampleEmail" required="true" name="email">
                          </div>
                        </div>
                      <div class="card-footer text-left mt-5">
                        <button type="submit" class="btn btn-rose">Add </button>
                      </div>
                    </form>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
      @include('admin.layouts.footer')

      