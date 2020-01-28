@extends('landlord-tenant.layouts')
@section('content')

@section('customStyles')
<link rel="stylesheet" href="{{url('landing/css/form-elements.css')}}">
<style>
    * {
      box-sizing: border-box;
    }
    
    body {
      background-color: #f1f1f1;
    }
    
    #regForm {
      background-color: #ffffff;
      margin: 0px auto;
      font-family: Raleway;
      padding: 40px;
      width: 70%;
      min-width: 300px;
    }
    
    h1 {
      text-align: center;  
    }
    
    input {
      padding: 10px;
      width: 100%;
      font-size: 17px;
      font-family: Raleway;
      border: 1px solid #aaaaaa;
    }
    
    /* Mark input boxes that gets an error on validation: */
    input.invalid {
      background-color: #ffdddd;
    }
    
    /* Hide all steps by default: */
    .tab {
      display: none;
    }
    
    button {
      background-color: #4CAF50;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      font-size: 17px;
      font-family: Raleway;
      cursor: pointer;
    }
    
    button:hover {
      opacity: 0.8;
    }
    
    #prevBtn {
      background-color: #bbbbbb;
    }
    
    /* Make circles that indicate the steps of the form: */
    .step {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbbbbb;
      border: none;  
      border-radius: 50%;
      display: inline-block;
      opacity: 0.5;
    }
    
    .step.active {
      opacity: 1;
    }
    
    /* Mark the steps that are finished and valid: */
    .step.finish {
      background-color: #4CAF50;
    }
    </style>
@endsection
<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <span class="user-name text-bold-200" style="font-size: 14px;">Post Your Property & Documents for Authentication & Validation</span>
        </div>
      </div>
      <div class="content-body">
        
        <div class="col-xl-12 col-lg-12">
          <div class="card">
              @foreach ($errors->all() as $error)
                {{ $error }}<br/>
              @endforeach
            <div class="card-content">
              <div class="card-body">

                <div class="tab-pane" id="dropdownOpt12" role="tabpanel" aria-labelledby="dropdownOpt2-tab1"
                aria-expanded="false">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form-center">Property Amount</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  </div>
                  <div class="card-content collapse show">
                    <div class="card-body">
                    <form id="regForm" enctype="multipart/form-data" method="POST" action="{{url('/landlord/postPropert')}}">
                          <h1>Post Property:</h1>
                          @csrf
                          <!-- One "tab" for each step in the form: -->
                          <div class="tab">
                              <label for="eventInput1">States</label>
                            <p> <select name="state" class="selectpicker form-control">
                                <option>Select Your State</option>
                                <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross River">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                                <option value="FCT">FCT</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="Zamfara">Zamfara</option>
                              </select></p>
                              <label for="eventInput1">LGA</label>
                            <p><input placeholder="LGA" oninput="this.className = ''" name="lga"></p>
                            <label for="eventInput1">Area</label>
                            <p><input placeholder="area" oninput="this.className = ''" name="area"></p>
                            <label for="eventInput1">Property Address</label>
                            <p><input placeholder="Property Address" oninput="this.className = ''" name="propertyAddress"></p>
                          </div>

                          <!-- Step 2 -->
                          <div class="tab">Contact Info:
                              <label for="eventInput1">Title Of Document</label>
                            <p><input placeholder="Title Of Document" oninput="this.className = ''" name="titleOfDocument"></p>
                            <label for="eventInput1">Use Of Property</label>
                            <p>
                              <div class="row">
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <label for="eventInput3">Use Of Property</label>
                                       <select name="useOfProperty" onchange="fireDateChange(this.value)" id="useOfProperty" class="selectpicker form-control">
                                          <option>Select Your State</option>
                                          <option value="LEASE">Short  Lease</option>
                                          <option value="RENT">For Rent</option>
                                          <option value="SALE">For Sale</option>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <label for="eventInput3">Start Date</label>
                                      <input placeholder="Start Date" id="startDate" type="date" oninput="this.className = ''" name="startDate">
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <label for="eventInput3">End Date</label>
                                      <input placeholder="End Date" id="endDate" type="date" oninput="this.className = ''" name="endDate">
                                    </div>
                                  </div>
                              </div>
                            </p>
                              <label for="eventInput1">Type Of Property</label>
                              <p> <select name="propertyCategory_id" class="selectpicker form-control">
                                  <option>Select Your State</option>
                                  @foreach($propertyCats as $property)
                                    <option value="{{$property->id}}">{{$property->name}}</option>
                                  @endforeach 
                                </select></p>
                                <div class="row">
                                    <div class="col-md-3">
                                      <div class="form-group">
                                        <label for="eventInput3">Bedrooms</label>
                                        <select name="bedrooms" class="selectpicker form-control">
                                          <option>Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="">4</option>
                                          <option value="4+">More than 4</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group">
                                        <label for="eventInput3">Bathrooms</label>
                                        <select name="bathrooms" class="selectpicker form-control">
                                          <option>Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="4+">More than 4</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group">
                                        <label for="eventInput3">Toilet</label>
                                        <select name="toilet" class="selectpicker form-control">
                                          <option>Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="">4</option>
                                          <option value="4+">More than 4</option>
                                        </select>
                                      </div>
                                    </div>
                                </div>
                                  <label for="issueinput8">Additional information</label>
                                  <textarea id="issueinput8" rows="5" class="form-control" name="additionalInfo" placeholder=""
                                  data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                  data-title="Comments"></textarea>
                          </div>
                          <div class="tab">
                            <p><div class="form-group">
                                <label for="eventInput3">Currency</label>
                                <select name="currency" class="selectpicker form-control">
                                  <option>Select</option>
                                  <option value="Naira">Naira</option>
                                  <option value="Dollars">Dollars</option>
                                </select>
                              </div></p>

                            <label for="eventInput3">Price</label>
                            <p><input placeholder="Price" oninput="this.className = ''" name="price"></p>

                            <label for="eventInput3">Duration</label>
                            <select name="duration" class="selectpicker form-control">
                                <option>Select</option>
                                <option value="Daily">Daily</option>
                                <option value="Monthly">Monthly</option>
                                <option value="yearly">Yearly</option>
                              </select>
                          </div>
                          
                          <div class="tab">Login Info:

                            <label for="eventInput3">Main Image</label>
                            <p><input  oninput="this.className = ''" name="mainImage" type="file"></p>

                            <label for="eventInput3">Property Images</label>
                            <p><input placeholder="Price" type="file" multiple oninput="this.className = ''" name="propertyImages[]"></p>
                       
                          </div>
                          <div style="overflow:auto;">
                            <div style="float:right;">
                              <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                              <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                            </div>
                          </div>
                          <!-- Circles which indicates the steps of the form: -->
                          <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                          </div>
                        </form>

                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="linkOpt1" role="tabpanel" aria-labelledby="linkOpt-tab1"
              aria-expanded="false">
              {{-- <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-form-center">Property Document Uploads</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-content collapse show">
                            <div class="card-body">
                              <p class="card-text">(please attach files or images of your property document & note that clearer images would get quicker responses).</p>
                              <div action="#" class="dropzone dropzone-area" id="dpz-multiple-files">
                                <div class="dz-message">Drop Multiple Files Here To Upload</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="btn btn-outline-primary" href="landlord-overview-home.html" style="margin: 1rem; padding: 0.6rem 2rem;"> Submit </a>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  </div>
  </div>
  </div>
 @endsection     
 @section('scripts')
 <script src="{{url('landing/js/jquery.backstretch.js')}}"></script>
 <script src="{{url('landing/js/retina-1.1.0.min.js')}}"></script>
 <script src="{{url('landing/js/scripts.js')}}"></script>
 <script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab
    
    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }
    
    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }
    
    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
    }
    
    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";
    }

    function fireDateChange(val){

     
      var type = $("#usOfProperty").val();

      if(val == "SALE"){
        $("#startDate").hide();
        $("#endDate").hide();
      } else {
        $("#startDate").show();
        $("#endDate").show();
      }
    }
    </script>

 @endsection