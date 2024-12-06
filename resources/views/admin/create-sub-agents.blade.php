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
                    <h4 class="card-title">Create Sub Agent</h4>
                  </div>
                  <div class="container">
                    <form id="RegisterValidation" action="#" method="">
                      <!-- Agent Details Section -->
                      <div class="card">
                        <div class="card-header">
                            <h4>Agent Details</h4>
                        </div>
                          <div class="card-body">
                              <div class="row">
                                <div class="col-md-12 mt-3">
                                    <div class="form-group">
                                        <label for="agentCode" class="bmd-label-floating">Agent</label>
                                        <select class="form-control" id="agentCode" name="agent_code">
                                            <option value="AG12345" selected>Agent 12345</option>
                                            <option value="AG67890">Agent 67890</option>
                                            <option value="AG11223">Agent 11223</option>
                                            <option value="AG44556">Agent 44556</option>
                                        </select>
                                    </div>
                                </div>
                                  <!-- Existing Fields -->
                                  <div class="col-md-6 mt-3">
                                      <div class="form-group">
                                          <label for="agentCode" class="bmd-label-floating">Agent Code *</label>
                                          <input type="text" class="form-control" id="agentCode" name="agent_code">
                                      </div>
                                  </div>
                                  <div class="col-md-6 mt-3">
                                      <div class="form-group">
                                          <label for="userName" class="bmd-label-floating">User Name *</label>
                                          <input type="text" class="form-control" id="userName" name="user_name">
                                      </div>
                                  </div>
                                  <div class="col-md-6 mt-3">
                                      <div class="form-group">
                                          <label for="designation" class="bmd-label-floating">Designation *</label>
                                          <input type="text" class="form-control" id="designation" name="designation">
                                      </div>
                                  </div>
                                  <div class="col-md-6 mt-3">
                                      <div class="form-group">
                                          <label for="travelAgency" class="bmd-label-floating">Travel Agency *</label>
                                          <input type="text" class="form-control" id="travelAgency" name="travel_agency">
                                      </div>
                                  </div>
                                  <div class="col-md-6 mt-3">
                                      <div class="form-group">
                                          <label for="preferredCurrency" class="bmd-label-floating">Preferred Currency *</label>
                                          <input type="text" class="form-control" id="preferredCurrency" name="preferred_currency">
                                      </div>
                                  </div>
                                  
                                  <!-- New Fields -->
                                  <div class="col-md-6 mt-3">
                                      <div class="form-group">
                                          <label for="contactPerson" class="bmd-label-floating">Contact Person *</label>
                                          <input type="text" class="form-control" id="contactPerson" name="contact_person">
                                      </div>
                                  </div>
                                  <div class="col-md-6 mt-3">
                                      <div class="form-group">
                                          <label for="tradeLicense" class="bmd-label-floating">Trade License *</label>
                                          <input type="text" class="form-control" id="tradeLicense" name="trade_license">
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
                                          <input type="date" class="form-control" id="tradeLicenseExpiry" name="trade_license_expiry_date">
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
                                          <label for="email" class="bmd-label-floating">Email
                                              Address *</label>
                                          <input type="email" class="form-control"
                                              id="email" name="email">
                                      </div>
                                  </div>
                                  <div class="col-md-6 mt-3">
                                      <div class="form-group">
                                          <div class="row">
                                              <div class="col-4">
                                                  <select class="form-control"
                                                      id="mobileCountryCode"
                                                      name="mobile_country_code">
                                                      <option value="" selected disabled>
                                                          Select Country Code</option>
                                                      <option value="+1">+1 (US)</option>
                                                      <option value="+91">+91 (India)</option>
                                                      <option value="+44">+44 (UK)</option>
                                                      <option value="+61">+61 (Australia)
                                                      </option>
                                                      <!-- Add more country codes as needed -->
                                                  </select>
                                              </div>
                                              <div class="col-8">
                                                  <input type="text" class="form-control"
                                                      id="mobileNo" name="mobile_no"
                                                      placeholder="Enter mobile number">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6 mt-3">
                                      <div class="form-group">
                                          <label for="skypeId" class="bmd-label-floating">Skype
                                              ID</label>
                                          <input type="text" class="form-control"
                                              id="skypeId" name="skype_id">
                                      </div>
                                  </div>
                                  <div class="col-md-6 mt-3">
                                      <div class="form-group">
                                          <label for="website"
                                              class="bmd-label-floating">Website</label>
                                          <input type="url" class="form-control"
                                              id="website" name="website">
                                      </div>
                                  </div>
                                  <div class="col-md-6 mt-3">
                                      <div class="form-group">
                                          <label for="telephone"
                                              class="bmd-label-floating">Telephone Number</label>
                                          <input type="text" class="form-control"
                                              id="telephone" name="telephone">
                                      </div>
                                  </div>
                                  <div class="col-md-6 mt-3">
                                      <div class="form-group">
                                          <div class="row">
                                              <div class="col-4">
                                                  <select class="form-control"
                                                      id="whatsappCountryCode"
                                                      name="whatsapp_country_code">
                                                      <option value="" selected disabled>
                                                          Select Country Code</option>
                                                      <option value="+1">+1 (US)</option>
                                                      <option value="+91">+91 (India)</option>
                                                      <option value="+44">+44 (UK)</option>
                                                      <option value="+61">+61 (Australia)
                                                      </option>
                                                      <!-- Add more country codes as needed -->
                                                  </select>
                                              </div>
                                              <div class="col-8">
                                                  <input type="text" class="form-control"
                                                      id="whatsappNo" name="whatsapp_no"
                                                      placeholder="Enter WhatsApp number">
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
                                          <label for="streetAddress"
                                              class="bmd-label-floating">Street Address *</label>
                                          <input type="text" class="form-control"
                                              id="streetAddress" name="street_address">
                                      </div>
                                  </div>
                                  <div class="col-md-4 mt-3">
                                      <div class="form-group">
                                          <label for="zipCode" class="bmd-label-floating">ZIP
                                              Code *</label>
                                          <input type="text" class="form-control"
                                              id="zipCode" name="zip_code">
                                      </div>
                                  </div>
                                  <div class="col-md-4 mt-3">
                                      <div class="form-group">
                                          <label for="city"
                                              class="bmd-label-floating">Town/City *</label>
                                          <input type="text" class="form-control"
                                              id="city" name="city">
                                      </div>
                                  </div>
                                  <div class="col-md-4 mt-3">
                                      <div class="form-group">
                                          <label for="country"
                                              class="bmd-label-floating">Country *</label>
                                          <input type="text" class="form-control"
                                              id="country" name="country">
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <!-- Submit Button -->
                      <div class="card-footer text-left mt-5">
                          <button type="submit" class="btn btn-rose">Add Sub Agent</button>
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

      