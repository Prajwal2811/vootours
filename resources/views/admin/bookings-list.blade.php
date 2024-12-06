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
                    <h4 class="card-title mb-0">My Bookings List</h4>
                    <a href="{{ route('admin.create-bookings') }}" target="_blank"  class="btn btn-success btn-sm" id="add-admin-btn">
                      <i class="material-icons">person_add</i> Make Booking
                    </a>
                  </div>
                </div>
                
                <div class="card-body">
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>Sr. No</th>
                          <th>Package/Product Name</th>
                          <th>Pricing Structure</th>
                          <th>Agent Assigned</th>
                          <th>Availability Status</th>
                          <th>Booking Date</th>
                          <th>Cancellation Date</th>
                          <th class="disabled-sorting text-center">Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Sr. No</th>
                          <th>Package/Product Name</th>
                          <th>Pricing Structure</th>
                          <th>Agent Assigned</th>
                          <th>Availability Status</th>
                          <th>Booking Date</th>
                          <th>Cancellation Date</th>
                          <th class="disabled-sorting text-center">Actions</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                          <tr>
                            <td>1</td>
                            <td>Premium Slab</td>
                            <td>$20 - $50 per service</td>
                            <td>John Doe</td>
                            <td>Available</td>
                            <td>2024-12-05</td>
                            <td>2024-12-10</td>
                          
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
                                        <form id="AgentPackageAccess" action="#" method="">
                                          <div class="card">
                                            <div class="card-header">
                                              <h4>Agent Access and Booking Management</h4>
                                            </div>
                                            <div class="card-body">
                                              <div class="row">
                                        
                                                <!-- Agent Selection Dropdown -->
                                                <div class="col-md-6 mt-3">
                                                  <div class="form-group">
                                                    <label for="agentDropdown" class="bmd-label-floating">Select Agent</label>
                                                    <select class="form-control" id="agentDropdown" name="agent_dropdown" required>
                                                      <option value="" selected disabled>Select Agent</option>
                                                      <option value="agent_1">Agent 1</option>
                                                      <option value="agent_2">Agent 2</option>
                                                      <option value="agent_3">Agent 3</option>
                                                      <option value="agent_4">Agent 4</option>
                                                      <option value="agent_5">Agent 5</option> <!-- Dummy agent added -->
                                                    </select>
                                                  </div>
                                                </div>
                                        
                                                <!-- Package/Product Catalog -->
                                                <div class="col-md-6 mt-3">
                                                  <div class="form-group">
                                                    <label for="packageCatalog" class="bmd-label-floating">Package/Product Catalog</label>
                                                    <select class="form-control" id="packageCatalog" name="package_catalog" required>
                                                      <option value="" selected disabled>Select Package/Product</option>
                                                      <option value="package_1">Package 1</option>
                                                      <option value="package_2">Package 2</option>
                                                      <option value="product_1">Product 1</option>
                                                      <option value="product_2">Product 2</option>
                                                      <option value="package_3">Package 3</option> <!-- Dummy package added -->
                                                      <option value="product_3">Product 3</option> <!-- Dummy product added -->
                                                    </select>
                                                  </div>
                                                </div>
                                        
                                                <!-- Pricing Structure -->
                                                <div class="col-md-6 mt-3">
                                                  <div class="form-group">
                                                    <label for="pricingView" class="bmd-label-floating">Pricing Structure</label>
                                                    <input type="text" class="form-control" id="pricingView" name="pricing_view" placeholder="e.g., $10-$20 per unit" value="$15-$30 per unit" readonly>
                                                  </div>
                                                </div>
                                        
                                                <!-- Availability Check -->
                                                <div class="col-md-6 mt-3">
                                                  <div class="form-group">
                                                    <label for="availabilityCheck" class="bmd-label-floating">Availability Status</label>
                                                    <input type="text" class="form-control" id="availabilityCheck" name="availability_check" placeholder="Real-time availability" value="Available" readonly>
                                                  </div>
                                                </div>
                                        
                                                <!-- Booking Date -->
                                                <div class="col-md-6 mt-3">
                                                  <div class="form-group">
                                                    <label for="bookingDate" class="bmd-label-floating">Booking Date</label>
                                                    <input type="date" class="form-control" id="bookingDate" name="booking_date" value="2024-12-15" required>
                                                  </div>
                                                </div>
                                        
                                                <!-- Instant Updates -->
                                                <div class="col-md-12 mt-3">
                                                  <div class="form-group">
                                                    <label for="instantUpdates" class="bmd-label-floating">Instant Updates</label>
                                                    <input type="text" class="form-control" id="instantUpdates" name="instant_updates" placeholder="Updates reflect instantly in the system" value="Enabled" readonly>
                                                  </div>
                                                </div>
                                        
                                              </div>
                                            </div>
                                        
                                            <!-- Submit Button -->
                                            <div class="card-footer text-left mt-5">
                                              <button type="submit" class="btn btn-rose">Submit</button>
                                            </div>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Pricing Slab</h5>
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

      