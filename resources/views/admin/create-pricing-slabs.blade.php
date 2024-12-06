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
                                      <form id="AgentPricingSlabs" action="#" method="">
                                        <div class="card">
                                          <div class="card-header">
                                            <h4>Agent Pricing Slabs</h4>
                                          </div>
                                          <div class="card-body">
                                            <div class="row">
                                              <!-- Agent Selection -->
                                              <div class="col-md-6 mt-3">
                                                <div class="form-group">
                                                  <label for="agentName" class="bmd-label-floating">Agent Name</label>
                                                  <input type="text" class="form-control" id="agentName" name="agent_name" required>
                                                </div>
                                              </div>
                                              
                                              <!-- Slab Name -->
                                              <div class="col-md-6 mt-3">
                                                <div class="form-group">
                                                  <label for="slabName" class="bmd-label-floating">Slab Name</label>
                                                  <input type="text" class="form-control" id="slabName" name="slab_name" required>
                                                </div>
                                              </div>
                                      
                                              <!-- Pricing Slab -->
                                              <div class="col-md-6 mt-3">
                                                <div class="form-group">
                                                  <label for="slabPricing" class="bmd-label-floating">Pricing Structure</label>
                                                  <input type="text" class="form-control" id="slabPricing" name="slab_pricing" placeholder="e.g., $10-$20 per unit" required>
                                                </div>
                                              </div>
                                      
                                              <!-- Assign Slab to Agents -->
                                              <div class="col-md-6 mt-3">
                                                <div class="form-group">
                                                  <label for="assignSlab" class="bmd-label-floating">Assign to Agent</label>
                                                  <select class="form-control" id="assignSlab" name="assign_slab" required>
                                                    <option value="" selected disabled>Select Agent</option>
                                                    <option value="agent_1">Agent 1</option>
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
                                                  <textarea class="form-control" id="businessRules" name="business_rules" rows="3" placeholder="Enter the rules for assigning this slab" required></textarea>
                                                </div>
                                              </div>
                                      
                                              <!-- Effective Date -->
                                              <div class="col-md-6 mt-3">
                                                <div class="form-group">
                                                  <label for="effectiveDate" class="bmd-label-floating">Effective Date</label>
                                                  <input type="date" class="form-control" id="effectiveDate" name="effective_date" required>
                                                </div>
                                              </div>
                                      
                                              <!-- Expiry Date -->
                                              <div class="col-md-6 mt-3">
                                                <div class="form-group">
                                                  <label for="expiryDate" class="bmd-label-floating">Expiry Date</label>
                                                  <input type="date" class="form-control" id="expiryDate" name="expiry_date">
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
