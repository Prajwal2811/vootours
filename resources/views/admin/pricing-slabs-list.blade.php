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
                    <h4 class="card-title mb-0">Pricing Slabs List</h4>
                    <a href="{{ route('admin.create-pricing-slabs') }}" target="_blank"  class="btn btn-success btn-sm" id="add-admin-btn">
                      <i class="material-icons">person_add</i> Add Pricing Slabs
                    </a>
                  </div>
                </div>
                
                <div class="card-body">
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>Sr. No</th>
                          <th>Slab Name</th>
                          <th>Pricing Structure</th>
                          <th>Agent Assigned</th>
                          <th>Status</th>
                          <th class="disabled-sorting text-center">Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Sr. No</th>
                          <th>Slab Name</th>
                          <th>Pricing Structure</th>
                          <th>Agent Assigned</th>
                          <th>Status</th>
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
                            <td>
                              <div class="togglebutton">
                                <label>
                                  <input type="checkbox" checked>
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
                                        <form id="AgentPricingSlabs" action="#" method="">
                                          <div class="card">
                                              <div class="card-header">
                                                  <h4> Pricing Slabs</h4>
                                              </div>
                                              <div class="card-body">
                                                  <div class="row">
                                                      <!-- Agent Selection -->
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="agentName" class="bmd-label-floating">Agent Name</label>
                                                              <input type="text" class="form-control" id="agentName" name="agent_name" value="John Doe" required>
                                                          </div>
                                                      </div>
                                                      
                                                      <!-- Slab Name -->
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="slabName" class="bmd-label-floating">Slab Name</label>
                                                              <input type="text" class="form-control" id="slabName" name="slab_name" value="Premium Slab" required>
                                                          </div>
                                                      </div>
                                              
                                                      <!-- Pricing Slab -->
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="slabPricing" class="bmd-label-floating">Pricing Structure</label>
                                                              <input type="text" class="form-control" id="slabPricing" name="slab_pricing" value="$15-$30 per unit" required>
                                                          </div>
                                                      </div>
                                              
                                                      <!-- Assign Slab to Agents -->
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="assignSlab" class="bmd-label-floating">Assign to Agent</label>
                                                              <select class="form-control" id="assignSlab" name="assign_slab" required>
                                                                  <option value="" disabled>Select Agent</option>
                                                                  <option value="agent_1" selected>Agent 1</option>
                                                                  <option value="agent_2">Agent 2</option>
                                                                  <option value="agent_3">Agent 3</option>
                                                                  <option value="agent_4">Agent 4</option>
                                                                  <!-- Dynamic options can be generated here -->
                                                              </select>
                                                          </div>
                                                      </div>
                                              
                                                      <!-- Business Rules -->
                                                      <div class="col-md-12 mt-3">
                                                          <div class="form-group">
                                                              <label for="businessRules" class="bmd-label-floating">Business Rules</label>
                                                              <textarea class="form-control" id="businessRules" name="business_rules" rows="3" required>Agents must meet monthly sales targets to qualify for this slab.</textarea>
                                                          </div>
                                                      </div>
                                              
                                                      <!-- Effective Date -->
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="effectiveDate" class="bmd-label-floating">Effective Date</label>
                                                              <input type="date" class="form-control" id="effectiveDate" name="effective_date" value="2024-12-01" required>
                                                          </div>
                                                      </div>
                                              
                                                      <!-- Expiry Date -->
                                                      <div class="col-md-6 mt-3">
                                                          <div class="form-group">
                                                              <label for="expiryDate" class="bmd-label-floating">Expiry Date</label>
                                                              <input type="date" class="form-control" id="expiryDate" name="expiry_date" value="2024-12-31">
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

      