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
                                        <h4 class="card-title">Create Transportation</h4>
                                    </div>
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
                                                    <!-- Dynamic options for agents can be generated here -->
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
                                                    <!-- Dynamic options for packages/products can be generated here -->
                                                  </select>
                                                </div>
                                              </div>
                                      
                                              <!-- Pricing Structure -->
                                              <div class="col-md-6 mt-3">
                                                <div class="form-group">
                                                  <label for="pricingView" class="bmd-label-floating">Pricing Structure</label>
                                                  <input type="text" class="form-control" id="pricingView" name="pricing_view" placeholder="e.g., $10-$20 per unit" readonly>
                                                </div>
                                              </div>
                                      
                                              <!-- Availability Check -->
                                              <div class="col-md-6 mt-3">
                                                <div class="form-group">
                                                  <label for="availabilityCheck" class="bmd-label-floating">Availability Status</label>
                                                  <input type="text" class="form-control" id="availabilityCheck" name="availability_check" placeholder="Real-time availability" readonly>
                                                </div>
                                              </div>
                                      
                                      
                                              <!-- Booking Date -->
                                              <div class="col-md-6 mt-3">
                                                <div class="form-group">
                                                  <label for="bookingDate" class="bmd-label-floating">Booking Date</label>
                                                  <input type="date" class="form-control" id="bookingDate" name="booking_date" required>
                                                </div>
                                              </div>
                                      
                                      
                                              <!-- Instant Updates -->
                                              <div class="col-md-12 mt-3">
                                                <div class="form-group">
                                                  <label for="instantUpdates" class="bmd-label-floating">Instant Updates</label>
                                                  <input type="text" class="form-control" id="instantUpdates" name="instant_updates" placeholder="Updates reflect instantly in the system" readonly>
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
                </div>
            </div>
        </div>

<style>
    .card .card-body{
        bottom: 2rem;
    }
</style>
@include('admin.layouts.footer')
