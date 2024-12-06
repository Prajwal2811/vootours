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
                    <h4 class="card-title mb-0">Transportation List</h4>
                    <a href="{{ route('admin.create-transportation') }}" target="_blank"  class="btn btn-success btn-sm" id="add-admin-btn">
                      <i class="material-icons">person_add</i> Add Transportation
                    </a>
                  </div>
                </div>
                
                <div class="card-body">
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>Sr. No</th>
                          <th>Transfer Code</th>
                          <th>Transfer Title</th>
                          <th>Web ID</th>
                          <th>Status</th>
                          <th class="disabled-sorting text-center">Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Sr. No</th>
                          <th>Transfer Code</th>
                          <th>Transfer Title</th>
                          <th>Web ID</th>
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
                                            <div class="card">
                                              <div class="card-header">
                                                <h4>Transportation Details</h4>
                                              </div>
                                              <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6 mt-3">
                                                      <div class="form-group">
                                                        <label for="productCode" class="bmd-label-floating">Transfer Code</label>
                                                        <input type="text" class="form-control" id="productCode" name="product_code" value="T12345">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                      <div class="form-group">
                                                        <label for="webID" class="bmd-label-floating">Web ID</label>
                                                        <input type="text" class="form-control" id="webID" name="web_id" value="WEB98765">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                      <div class="form-group">
                                                        <label for="webSKU" class="bmd-label-floating">Web SKU</label>
                                                        <input type="text" class="form-control" id="webSKU" name="web_sku" value="SKU1234">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                      <div class="form-group">
                                                        <label for="websiteLink" class="bmd-label-floating">Website Link</label>
                                                        <input type="url" class="form-control" id="websiteLink" name="website_link" value="https://example.com">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                      <div class="form-group">
                                                        <label for="transferTitle" class="bmd-label-floating">Transfer Title</label>
                                                        <input type="text" class="form-control" id="transferTitle" name="transfer_title" value="Luxury Airport Transfer">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                      <div class="form-group">
                                                        <label for="vehicleName" class="bmd-label-floating">Vehicle Name</label>
                                                        <input type="text" class="form-control" id="vehicleName" name="vehicle_name" value="BMW 5 Series">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-4 mt-3">
                                                      <div class="form-group">
                                                        <select class="form-control" id="transportationType" name="transportation_type">
                                                          <option value="" selected disabled>Select Vehicle</option>
                                                          <option value="economy_sedan">Economy Sedan - 4 Passengers</option>
                                                          <option value="luxury_sedan">Luxury Sedan - 4 Passengers</option>
                                                          <option value="economy_mpv">Economy MPV – 7 Passengers</option>
                                                          <option value="luxury_mpv">Luxury MPV - 7 Passengers</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-4 mt-3">
                                                      <div class="form-group">
                                                        <select class="form-control" id="productCity" name="product_city">
                                                          <option value="" selected disabled>Select Product City</option>
                                                          <option value="new_york">New York</option>
                                                          <option value="los_angeles">Los Angeles</option>
                                                          <option value="chicago">Chicago</option>
                                                          <option value="miami">Miami</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-4 mt-3">
                                                      <div class="form-group">
                                                        <select class="form-control" id="transferType" name="transfer_type">
                                                          <option value="" selected disabled>Select Transfer Type</option>
                                                          <option value="arrival">Arrival Transfer</option>
                                                          <option value="departure">Departure Transfer</option>
                                                          <option value="one_way">One-Way Transfer</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-12 mt-5">
                                                      <div class="form-group">
                                                        <label for="vehicleDescription" class="bmd-label-floating">Vehicle Description</label>
                                                        <textarea class="form-control" id="vehicleDescription" name="vehicle_description">Luxury sedan with leather seats, air conditioning, and ample luggage space.</textarea>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                      <div class="form-group">
                                                        <label for="seatingCapacity" class="bmd-label-floating">Seating Capacity</label>
                                                        <input type="number" class="form-control" id="seatingCapacity" name="seating_capacity" value="4">
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
                                                            <input type="text" class="form-control" name="locations[]" placeholder="Add multiple locations, separated by commas" value="New York, Los Angeles">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6 mt-3" id="location-container">
                                                        <label for="locations" class="bmd-label-floating">Drop off Location</label>
                                                        <div class="form-group row" id="location-row">
                                                          <div class="col-md-8">
                                                            <input type="text" class="form-control" name="locations[]" placeholder="Add multiple locations, separated by commas" value="Chicago, Miami">
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                              </div>
                                            </div>



                                            <div class="card mt-5">
                                                <div class="card-header">
                                                  <h4>Luggage</h4>
                                                </div>
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="col-md-6 mt-3" id="location-container">
                                                      <label for="locations" class="bmd-label-floating">Luggage Capacity</label>
                                                      <div class="form-group row" id="location-row">
                                                        <div class="col-md-8">
                                                          <input type="text" class="form-control" name="locations[]" placeholder="Add multiple locations, separated by commas" value="3 large suitcases, 2 carry-ons">
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3" id="location-container">
                                                      <label for="locations" class="bmd-label-floating">Seating & Luggage</label>
                                                      <div class="form-group row" id="location-row">
                                                        <div class="col-md-8">
                                                          <input type="text" class="form-control" name="locations[]" placeholder="Add multiple locations, separated by commas" value="4 passengers, 2 large suitcases, 4 carry-ons">
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                      <div class="form-group">
                                                        <label for="inclusions" class="bmd-label-floating">Inclusions</label>
                                                        <textarea class="form-control" id="inclusions" name="inclusions">Water, Wi-Fi, Air Conditioning</textarea>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                      <div class="form-group">
                                                        <label for="exclusions" class="bmd-label-floating">Exclusions</label>
                                                        <textarea class="form-control" id="exclusions" name="exclusions">Food, Insurance</textarea>
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
                                                        <input type="text" class="form-control" id="duration" name="duration" value="2 hours">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-4 mt-5">
                                                      <div class="form-group">
                                                        <select class="form-control" id="productCity" name="product_city">
                                                          <option value="" selected disabled>Select Rates Policy</option>
                                                          <option value="transfer_price">Transfer Price</option>
                                                          <option value="airport_parking">Airport Parking Charges</option>
                                                          <option value="water_bottles">Water Bottles</option>
                                                          <option value="child_seat">Child Seat Charges</option>
                                                          <option value="paging_board">Paging Board Charges</option>
                                                          <option value="airport_rep">Airport Rep. Charges</option>
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
                                                  <input type="text" class="form-control" id="imageLinks" name="image_links" value="https://example.com/image1.jpg, https://example.com/image2.jpg">
                                                </div>
                                              </div>
                                              <div class="col-md-6 mt-3">
                                                <div class="form-group">
                                                  <label for="videoLinks" class="bmd-label-floating">Video Links</label>
                                                  <input type="text" class="form-control" id="videoLinks" name="video_links" value="https://example.com/video1.mp4, https://example.com/video2.mp4">
                                                </div>
                                              </div>
                                              
                                              <!-- Status Dropdown -->
                                              <div class="col-md-6 mt-3 mb-5">
                                                  <label for="status" class="bmd-label-floating float-left">Status</label>
                                                <div class="form-group">
                                                  <select class="form-control" id="status" name="status">
                                                    <option value=""selected disabled>Select Status</option>
                                                    <option value="active" selected>Active</option>
                                                    <option value="inactive">Inactive</option>
                                                  </select>
                                                </div>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                              
                                    <!-- Submit Button -->
                                    <div class="card-footer text-left mt-5">
                                        <button type="submit" class="btn btn-rose">Update</button>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Transportation</h5>
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

      