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
                    <h4 class="card-title mb-0">Packages List</h4>
                    <a href="{{ route('admin.create-packages') }}" target="_blank"  class="btn btn-success btn-sm" id="add-admin-btn">
                      <i class="material-icons">person_add</i> Add Packages
                    </a>
                  </div>
                </div>
                
                <div class="card-body">
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>Sr. No</th>
                          <th>Agent Code</th>
                          <th>Name</th>
                          <th>Designation</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th class="disabled-sorting text-center">Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Sr. No</th>
                          <th>Agent Code</th>
                          <th>Name</th>
                          <th>Designation</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th class="text-center">Actions</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>AG12345</td>
                          <td>John Doe</td>
                          <td>Travel Consultant</td>
                          <td>john.doe@example.com</td>
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
                                      <h5 class="modal-title" id="exampleModalLongTitle">Edit Agencies Details</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="container">
                                        <form id="RegisterValidation" action="#" method="">
                                          <!-- Agent Details Section -->
                                          <div class="card">
                                              <div class="card-header">
                                                  <h4>Agencies Details</h4>
                                              </div>
                                              <div class="card-body">
                                                  <div class="row">
                                                      <!-- Existing Fields -->
                                                      <div class="col-md-6 ">
                                                          <div class="form-group">
                                                              <label for="agentCode" class="bmd-label-floating">Agent Code *</label>
                                                              <input type="text" class="form-control" id="agentCode" name="agent_code" value="AG12345">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6 ">
                                                          <div class="form-group">
                                                              <label for="userName" class="bmd-label-floating">User Name *</label>
                                                              <input type="text" class="form-control" id="userName" name="user_name" value="john_doe">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="designation" class="bmd-label-floating">Designation *</label>
                                                              <input type="text" class="form-control" id="designation" name="designation" value="Sales Manager">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="travelAgency" class="bmd-label-floating">Travel Agency *</label>
                                                              <input type="text" class="form-control" id="travelAgency" name="travel_agency" value="Dream Vacations">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="preferredCurrency" class="bmd-label-floating">Preferred Currency *</label>
                                                              <input type="text" class="form-control" id="preferredCurrency" name="preferred_currency" value="USD">
                                                          </div>
                                                      </div>
                                                      
                                                      <!-- New Fields -->
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="contactPerson" class="bmd-label-floating">Contact Person *</label>
                                                              <input type="text" class="form-control" id="contactPerson" name="contact_person" value="Jane Smith">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="tradeLicense" class="bmd-label-floating">Trade License *</label>
                                                              <input type="text" class="form-control" id="tradeLicense" name="trade_license" value="TL123456789">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="vatCertificate">VAT Certificate *</label>
                                                              <label class="custom-file-upload">
                                                                  <input type="file" id="vatCertificate" name="vat_certificate" style="display: none;">
                                                                  <span class="btn btn-primary">Choose File</span>
                                                              </label>
                                                          </div>
                                                      </div>
                                                      
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="tradeLicenseExpiry" class="bmd-label-floating">Trade License Expiry Date *</label>
                                                              <input type="date" class="form-control" id="tradeLicenseExpiry" name="trade_license_expiry_date" value="2025-12-31">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      
                                          <!-- Contact Information Section -->
                                          <div class="card mt-5">
                                              <div class="card-header">
                                                  <h4>Contact Information</h4>
                                              </div>
                                              <div class="card-body">
                                                  <div class="row">
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="email" class="bmd-label-floating">Email Address *</label>
                                                              <input type="email" class="form-control" id="email" name="email" value="john.doe@example.com">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <div class="row">
                                                                  <div class="col-4">
                                                                      <select class="form-control" id="mobileCountryCode" name="mobile_country_code">
                                                                          <option value="" selected disabled>Select Country Code</option>
                                                                          <option value="+1">+1 (US)</option>
                                                                          <option value="+91">+91 (India)</option>
                                                                          <option value="+44">+44 (UK)</option>
                                                                          <option value="+61">+61 (Australia)</option>
                                                                      </select>
                                                                  </div>
                                                                  <div class="col-8">
                                                                      <input type="text" class="form-control" id="mobileNo" name="mobile_no" placeholder="Enter mobile number" value="1234567890">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="skypeId" class="bmd-label-floating">Skype ID</label>
                                                              <input type="text" class="form-control" id="skypeId" name="skype_id" value="john_doe_skype">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="website" class="bmd-label-floating">Website</label>
                                                              <input type="url" class="form-control" id="website" name="website" value="https://www.dreamvacations.com">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="telephone" class="bmd-label-floating">Telephone Number</label>
                                                              <input type="text" class="form-control" id="telephone" name="telephone" value="9876543210">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <div class="row">
                                                                  <div class="col-4">
                                                                      <select class="form-control" id="whatsappCountryCode" name="whatsapp_country_code">
                                                                          <option value="" selected disabled>Select Country Code</option>
                                                                          <option value="+1">+1 (US)</option>
                                                                          <option value="+91">+91 (India)</option>
                                                                          <option value="+44">+44 (UK)</option>
                                                                          <option value="+61">+61 (Australia)</option>
                                                                      </select>
                                                                  </div>
                                                                  <div class="col-8">
                                                                      <input type="text" class="form-control" id="whatsappNo" name="whatsapp_no" placeholder="Enter WhatsApp number" value="9876543210">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      
                                          <!-- Address Information Section -->
                                          <div class="card mt-5">
                                              <div class="card-header">
                                                  <h4>Address Information</h4>
                                              </div>
                                              <div class="card-body">
                                                  <div class="row">
                                                      <div class="col-md-12 mt-3">
                                                          <div class="form-group">
                                                              <label for="streetAddress" class="bmd-label-floating">Street Address *</label>
                                                              <input type="text" class="form-control" id="streetAddress" name="street_address" value="123 Vacation St.">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-4 mt-3">
                                                          <div class="form-group">
                                                              <label for="zipCode" class="bmd-label-floating">ZIP Code *</label>
                                                              <input type="text" class="form-control" id="zipCode" name="zip_code" value="12345">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-4 mt-3">
                                                          <div class="form-group">
                                                              <label for="city" class="bmd-label-floating">Town/City *</label>
                                                              <input type="text" class="form-control" id="city" name="city" value="Los Angeles">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-4 mt-3">
                                                          <div class="form-group">
                                                              <label for="country" class="bmd-label-floating">Country *</label>
                                                              <input type="text" class="form-control" id="country" name="country" value="USA">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      
                                          <!-- Bank Account Details Section -->
                                          <div class="card mt-5">
                                              <div class="card-header">
                                                  <h4>Bank Account Details</h4>
                                              </div>
                                              <div class="card-body">
                                                  <div class="row" id="bankDetailsSection">
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="bankAccountHolder" class="bmd-label-floating">Account Holder Name *</label>
                                                              <input type="text" class="form-control" id="bankAccountHolder" name="bank_account_holder" value="John Doe">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="bankAccountNumber" class="bmd-label-floating">Account Number *</label>
                                                              <input type="text" class="form-control" id="bankAccountNumber" name="bank_account_number" value="1234567890">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="bankName" class="bmd-label-floating">Bank Name *</label>
                                                              <input type="text" class="form-control" id="bankName" name="bank_name" value="ABC Bank">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="bankBranch" class="bmd-label-floating">Bank Branch *</label>
                                                              <input type="text" class="form-control" id="bankBranch" name="bank_branch" value="Downtown Branch">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="iban" class="bmd-label-floating">IBAN *</label>
                                                              <input type="text" class="form-control" id="iban" name="iban" value="US1234567890">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="swiftCode" class="bmd-label-floating">SWIFT Code *</label>
                                                              <input type="text" class="form-control" id="swiftCode" name="swift_code" value="ABCXYZ12">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      
                                          <!-- Submit Button -->
                                          <div class="form-group text-center mt-4">
                                              <button type="submit" class="btn btn-primary">Submit</button>
                                          </div>
                                      </form>
                                      
                                      
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
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Package</h5>
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
                            <!-- Trigger Button -->
                            <button type="button" class="btn btn-warning mx-1" data-toggle="modal" data-target="#duplicateModal">
                                Duplicate
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="duplicateModal" tabindex="-1" role="dialog" aria-labelledby="duplicateModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="duplicateModalLabel">Confirm Duplication</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to duplicate this item?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-warning" id="confirmDuplicate">Confirm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                document.getElementById('confirmDuplicate').addEventListener('click', function() {
                                    // Your duplication logic here
                                    console.log("Item duplicated successfully!");
                                    
                                    // Close the modal
                                    $('#duplicateModal').modal('hide');
                                });
                            </script>
                            

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

      