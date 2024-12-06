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
                                        <form id="RegisterValidation" action="#" method="">
                                            <div class="card">
                                              <div class="card-header">
                                                <h4>Transportation Details</h4>
                                              </div>
                                              <div class="card-body">
                                                <div class="row">
                                                  <div class="col-md-6 mt-3">
                                                    <div class="form-group">
                                                      <label for="productCode" class="bmd-label-floating">Transfer Code</label>
                                                      <input type="text" class="form-control" id="productCode" name="product_code">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 mt-3">
                                                    <div class="form-group">
                                                      <label for="webID" class="bmd-label-floating">Web ID</label>
                                                      <input type="text" class="form-control" id="webID" name="web_id">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 mt-3">
                                                    <div class="form-group">
                                                      <label for="webSKU" class="bmd-label-floating">Web SKU</label>
                                                      <input type="text" class="form-control" id="webSKU" name="web_sku">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 mt-3">
                                                    <div class="form-group">
                                                      <label for="websiteLink" class="bmd-label-floating">Website Link</label>
                                                      <input type="url" class="form-control" id="websiteLink" name="website_link">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 mt-3">
                                                    <div class="form-group">
                                                      <label for="websiteLink" class="bmd-label-floating">Transfer Title</label>
                                                      <input type="url" class="form-control" id="websiteLink" name="website_link">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 mt-3">
                                                    <div class="form-group">
                                                      <label for="websiteLink" class="bmd-label-floating">Vehicle Name</label>
                                                      <input type="url" class="form-control" id="websiteLink" name="website_link">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-4  mt-3">
                                                    <div class="form-group">
                                                      <select class="form-control" id="transportationType" name="transportation_type">
                                                        <option value="" selected disabled>Select Vehicle</option>
                                                        <option value="economy_sedan">Economy Sedan - 4 Passengers</option>
                                                        <option value="luxury_sedan">Luxury Sedan - 4 Passengers</option>
                                                        <option value="economy_mpv">Economy MPV – 7 Passengers</option>
                                                        <option value="economy_suv">Economy SUV – 7 Passengers</option>
                                                        <option value="luxury_suv">Luxury SUV - 7 Passengers</option>
                                                        <option value="luxury_mpv">Luxury MPV - 7 Passengers</option>
                                                        <option value="economy_van">Economy Van – 11/12 Passengers</option>
                                                        <option value="economy_coach_22">Economy Coach - 22 Passengers</option>
                                                        <option value="luxury_coach_16_19">Luxury Coach - 16/19 Passengers</option>
                                                        <option value="economy_coach_30">Economy Coach - 30 Passengers</option>
                                                        <option value="economy_coach_34">Economy Coach - 34 Passengers</option>
                                                        <option value="luxury_minibus_35">Luxury Minibus - 35 Passengers</option>
                                                        <option value="luxury_bus_50">Luxury Bus - 50 Passengers</option>
                                                    </select>
                                                    </div>
                                                  </div> 
                                                  <div class="col-md-4  mt-3">
                                                    <div class="form-group">
                                                      <select class="form-control" id="productCity" name="product_city">
                                                        <option value="" selected disabled> Select Product City</option>
                                                        <option value="new_york">New York</option>
                                                        <option value="los_angeles">Los Angeles</option>
                                                        <option value="chicago">Chicago</option>
                                                        <option value="houston">Houston</option>
                                                        <option value="miami">Miami</option>
                                                        <option value="san_francisco">San Francisco</option>
                                                        <option value="atlanta">Atlanta</option>
                                                        <option value="seattle">Seattle</option>
                                                        <option value="boston">Boston</option>
                                                        <option value="denver">Denver</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-4  mt-3">
                                                    <div class="form-group">
                                                      <select class="form-control" id="productCity" name="product_city">
                                                        <option value="" selected disabled>Select Transfer Type</option>
                                                        <option value="" >Transfer Type</option>
                                                        <option value="">Arrival Transfer</option>
                                                        <option value="">Departure Transfer</option>
                                                        <option value="">One-Way Transfer</option>
                                                        <option value="">Two-Way Transfer</option>
                                                        <option value="">Half Day Hiring</option>
                                                        <option value="">Full Day Hiring</option>
                                                        <option value="">Full Day Hours</option>
                                                        <option value="">Inter-city Transfer</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-12 mt-5">
                                                    <div class="form-group">
                                                      <label for="language" class="bmd-label-floating">Vehicle Description</label>
                                                      <textarea type="text" class="form-control" id="language" name="language"></textarea>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 mt-3">
                                                    <div class="form-group">
                                                      <label for="websiteLink" class="bmd-label-floating">Seating Capacity</label>
                                                      <input type="number" class="form-control" id="websiteLink" name="website_link">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          
                                            <!-- Additional Information -->
                                            <div class="card mt-5">
                                                <div class="card-header">
                                                  <h4>Pick up/Drop off Location</h4>
                                                </div>
                                                <div class="card-body">
                                                  <div class="row">
                                                      <div class="col-md-6 mt-3" id="location-container">
                                                        <label for="locations" class="bmd-label-floating">Pick up Location</label>
                                                        <div class="form-group row" id="location-row">
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control" name="locations[]" placeholder="Add multiple locations, separated by commas">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3" id="location-container">
                                                      <label for="locations" class="bmd-label-floating">Drop off Location</label>
                                                      <div class="form-group row" id="location-row">
                                                          <div class="col-md-8">
                                                              <input type="text" class="form-control" name="locations[]" placeholder="Add multiple locations, separated by commas">
                                                          </div>
                                                      </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>



                                              <div class="card mt-5">
                                                <div class="card-header">
                                                  <h4>Luggage </h4>
                                                </div>
                                                <div class="card-body">
                                                  <div class="row">
                                                      <div class="col-md-6 mt-3" id="location-container">
                                                        <label for="locations" class="bmd-label-floating">Luggage Capacity</label>
                                                        <div class="form-group row" id="location-row">
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control" name="locations[]" placeholder="Add multiple locations, separated by commas">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3" id="location-container">
                                                      <label for="locations" class="bmd-label-floating">Seating & Luggage</label>
                                                      <div class="form-group row" id="location-row">
                                                          <div class="col-md-8">
                                                              <input type="text" class="form-control" name="locations[]" placeholder="Add multiple locations, separated by commas">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6 mt-3">
                                                    <div class="form-group">
                                                      <label for="inclusions" class="bmd-label-floating">Inclusions</label>
                                                      <textarea class="form-control" id="inclusions" name="inclusions"></textarea>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 mt-3">
                                                    <div class="form-group">
                                                      <label for="exclusions" class="bmd-label-floating">Exclusions</label>
                                                      <textarea class="form-control" id="exclusions" name="exclusions"></textarea>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-12">
                                                    <div class="form-group">
                                                      <select class="form-control" id="transportationType" name="transportation_type">
                                                        <option value="" selected disabled>Select Transportation</option>
                                                        <option value="sharing">Sharing</option>
                                                        <option value="private">Private</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 mt-5">
                                                    <div class="form-group">
                                                      <label for="duration" class="bmd-label-floating">Duration</label>
                                                      <input type="text" class="form-control" id="duration" name="duration">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-4 mt-5">
                                                    <div class="form-group">
                                                      <select class="form-control" id="productCity" name="product_city">
                                                        <option value="" selected disabled>Select Rates Policy</option>
                                                        <option value="" >Transfer Price </option>
                                                        <option value="">Transfer Price </option>
                                                        <option value="">Airport Parking Charges </option>
                                                        <option value="">Water Bottles </option>
                                                        <option value="">Child Seat Charges </option>
                                                        <option value="">Paging Board Charges </option>
                                                        <option value="">Airport Rep. Charges</option>
                                                    </select>
                                                    </div>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>

                                          <div class="card mt-5">
                                            <div class="card-header">
                                              <h4>Images/Videos</h4>
                                            </div>
                                            <div class="card-body">
                                              <div class="row">
                                                <div class="col-md-4 mt-3">
                                                  <div class="form-group">
                                                      <label for="heroImage">Hero Image</label>
                                                      <label class="custom-file-upload">
                                                          <input type="file" id="heroImage" name="hero_image" style="display: none;">
                                                          <span class="btn btn-primary">Choose File</span>
                                                      </label>
                                                  </div>
                                              </div>
                                              
                                              <div class="col-md-4 mt-3">
                                                  <div class="form-group">
                                                      <label for="images">Images</label>
                                                      <label class="custom-file-upload">
                                                          <input type="file" id="images" name="images" style="display: none;">
                                                          <span class="btn btn-primary">Choose File</span>
                                                      </label>
                                                  </div>
                                              </div>
                                              
                                              <div class="col-md-4 mt-3">
                                                  <div class="form-group">
                                                      <label for="videos">Videos</label>
                                                      <label class="custom-file-upload">
                                                          <input type="file" id="videos" name="videos" style="display: none;">
                                                          <span class="btn btn-primary">Choose File</span>
                                                      </label>
                                                  </div>
                                              </div>
                                              
                                              <div class="col-md-6 mt-3">
                                                <div class="form-group">
                                                  <label for="imageLinks" class="bmd-label-floating">Image Links</label>
                                                  <input type="text" class="form-control" id="imageLinks" name="image_links">
                                                </div>
                                              </div>
                                              <div class="col-md-6 mt-3">
                                                <div class="form-group">
                                                  <label for="videoLinks" class="bmd-label-floating">Video Links</label>
                                                  <input type="text" class="form-control" id="videoLinks" name="video_links">
                                                </div>
                                              </div>
                                        
                                              <!-- Status Dropdown -->
                                              <div class="col-md-6 mt-3 mb-5">
                                                  <label for="status" class="bmd-label-floating">Status</label>
                                                <div class="form-group">
                                                  <select class="form-control" id="status" name="status">
                                                    <option value=""selected disabled>Select Status</option>
                                                    <option value="active">Active</option>
                                                    <option value="inactive">Inactive</option>
                                                  </select>
                                                </div>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                              
                                            <!-- Submit Button -->
                                            <div class="card-footer text-left mt-5">
                                              <button type="submit" class="btn btn-rose">Submit</button>
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
