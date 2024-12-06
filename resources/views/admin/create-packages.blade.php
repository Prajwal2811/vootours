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
                                        <h4 class="card-title">Create Packages</h4>
                                    </div>
                                    <div class="container">
                                        <form id="RegisterValidation" action="#" method="">
                                            <!-- Packages Details Section -->
                                            <div class="card">
                                              <div class="card-header">
                                                <h4>Packages Details</h4>
                                              </div>
                                              <div class="card-body">
                                                <div class="row">
                                                  <div class="col-md-6">
                                                    <div class="form-group">
                                                      <label for="productCode" class="bmd-label-floating">Product Code *</label>
                                                      <input type="text" class="form-control" id="productCode" name="product_code">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="form-group">
                                                      <label for="productTitle" class="bmd-label-floating">Product Title *</label>
                                                      <input type="text" class="form-control" id="productTitle" name="product_title">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 mt-3">
                                                    <div class="form-group">
                                                      <label for="productCategory" class="bmd-label-floating">Product Category *</label>
                                                      <input type="text" class="form-control" id="productCategory" name="product_category">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 mt-3">
                                                    <div class="form-group">
                                                      <label for="productCity" class="bmd-label-floating">Product City *</label>
                                                      <input type="text" class="form-control" id="productCity" name="product_city">
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
                                                      <label for="shortDescription" class="bmd-label-floating">Short Description</label>
                                                      <input class="form-control" id="shortDescription" name="short_description">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 mt-3">
                                                    <div class="form-group">
                                                      <label for="highlights" class="bmd-label-floating">Highlights</label>
                                                      <textarea class="form-control" id="highlights" name="highlights"></textarea>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 mt-3">
                                                    <div class="form-group">
                                                      <label for="description" class="bmd-label-floating">Description</label>
                                                      <textarea class="form-control" id="description" name="description"></textarea>
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
                                                </div>
                                              </div>
                                            </div>
                                          
                                            <!-- Transportation Section -->
                                            <div class="card mt-5">
                                              <div class="card-header">
                                                <h4>Transportation</h4>
                                              </div>
                                              <div class="card-body mb-5">
                                                <div class="row">
                                                  <div class="col-md-12">
                                                    <div class="form-group">
                                                      <select class="form-control" id="transportationType" name="transportation_type">
                                                        <option value="" selected disabled>Select Transportation</option>
                                                        <option value="sharing">Sharing</option>
                                                        <option value="private">Private</option>
                                                        <option value="without_transfer">Without Transfer</option>
                                                        <option value="tickets_only">Tickets Only</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          
                                            <!-- Additional Information -->
                                            <div class="card mt-5">
                                                <div class="card-header">
                                                  <h4>Additional Information</h4>
                                                </div>
                                                <div class="card-body">
                                                  <div class="row">
                                                    
                                                    <!-- Language Field -->
                                                    <div class="col-md-6 mt-3">
                                                      <div class="form-group">
                                                        <label for="language" class="bmd-label-floating">Language</label>
                                                        <input type="text" class="form-control" id="language" name="language">
                                                      </div>
                                                    </div>
                                              
                                                    <!-- Timings Field -->
                                                    <div class="col-md-3 mt-3">
                                                        <div class="form-group">
                                                          <label for="opening_time" class="bmd-label-floating">Opening Time</label>
                                                          <input type="time" class="form-control" id="opening_time" name="opening_time">
                                                        </div>
                                                      </div>
                                                      
                                                      <div class="col-md-3 mt-3">
                                                        <div class="form-group">
                                                          <label for="closing_time" class="bmd-label-floating">Closing Time</label>
                                                          <input type="time" class="form-control" id="closing_time" name="closing_time">
                                                        </div>
                                                      </div>
                                                    <!-- Days of Operation Field -->
                                                    <div class="row">
                                                      <label class="col-sm-2 col-form-label label-checkbox">Days of operation</label>
                                                      <div class="col-sm-10 checkbox-radios">
                                                        <div class="form-check form-check-inline">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="days_of_operation[]" value="monday"> Monday
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="days_of_operation[]" value="tuesday"> Tuesday
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="days_of_operation[]" value="wednesday"> Wednesday
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="days_of_operation[]" value="thursday"> Thursday
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="days_of_operation[]" value="friday"> Friday
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="days_of_operation[]" value="saturday"> Saturday
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="days_of_operation[]" value="sunday"> Sunday
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                          </label>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    

                                                    <!-- Location Field (Multiple Locations) -->
                                                    <div class="col-md-12 mt-3" id="location-container">
                                                        <label for="locations" class="bmd-label-floating">Location(s)</label>
                                                        <div class="form-group row" id="location-row">
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control" name="locations[]" placeholder="Add multiple locations, separated by commas">
                                                            </div>
                                                            <div class="col-md-2">
                                                                <button type="button" class="btn btn-secondary" id="duplicate-location">Add New</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                                    <script>
                                                        $(document).ready(function() {
                                                            // Duplicate input field
                                                            $('#duplicate-location').click(function() {
                                                                var newInput = $('#location-row').clone();  // Clone the first input field container
                                                                newInput.find('input').val('');  // Clear the value of the new input field
                                                                newInput.find('#duplicate-location').remove();  // Remove the duplicate button from the new input
                                                                newInput.append('<div class="col-md-2"><button type="button" class="btn btn-danger remove-location">Remove</button></div>'); // Add remove button inside the row
                                                                $('#location-container').append(newInput);  // Append the new input field to the container
                                                            });
                                                    
                                                            // Remove input field and button
                                                            $(document).on('click', '.remove-location', function() {
                                                                $(this).closest('.form-group').remove();  // Remove the entire row (input field + remove button)
                                                            });
                                                        });
                                                    </script>
                                                    
                                                    
                                              
                                                    <!-- Duration Field -->
                                                    <div class="col-md-6 mt-3">
                                                      <div class="form-group">
                                                        <label for="duration" class="bmd-label-floating">Duration</label>
                                                        <input type="text" class="form-control" id="duration" name="duration">
                                                      </div>
                                                    </div>
                                              
                                                    <!-- Rates Policy Field -->
                                                    <div class="col-md-6 mt-3">
                                                      <div class="form-group">
                                                        <label for="ratesPolicy" class="bmd-label-floating">Rates Policy</label>
                                                        <input type="text" class="form-control" id="ratesPolicy" name="rates_policy">
                                                      </div>
                                                    </div>
                                              
                                                    <!-- Age Policy Section -->
                                                    <div class="col-md-6 mt-3">
                                                      <div class="form-group">
                                                        <label for="adultAgePolicy" class="bmd-label-floating">Adult Age Policy</label>
                                                        <input type="text" class="form-control" id="adultAgePolicy" name="adult_age_policy">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                      <div class="form-group">
                                                        <label for="childAgePolicy" class="bmd-label-floating">Child Age Policy</label>
                                                        <input type="text" class="form-control" id="childAgePolicy" name="child_age_policy">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                      <div class="form-group">
                                                        <label for="infantAgePolicy" class="bmd-label-floating">Infant Age Policy</label>
                                                        <input type="text" class="form-control" id="infantAgePolicy" name="infant_age_policy">
                                                      </div>
                                                    </div>
                                              
                                                    <!-- Images/Videos Section -->
                                                    <div class="col-md-6 mt-3">
                                                        <div class="form-group">
                                                            <label for="heroImage">Hero Image</label>
                                                            <label class="custom-file-upload">
                                                                <input type="file" id="heroImage" name="hero_image" style="display: none;">
                                                                <span class="btn btn-primary">Choose File</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6 mt-3">
                                                        <div class="form-group">
                                                            <label for="images">Images</label>
                                                            <label class="custom-file-upload">
                                                                <input type="file" id="images" name="images" style="display: none;">
                                                                <span class="btn btn-primary">Choose File</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6 mt-3">
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
