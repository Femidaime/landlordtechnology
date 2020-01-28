


@extends('landlord-tenant.layouts')
@section('content')
<div class="app-content container center-layout mt-2">
        <div class="content-wrapper">
          <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
              <span class="user-name text-bold-200" style="font-size: 18px;">Welcome to Landlords Technology,</span>
              <span class="user-name text-bold-700" style="font-size: 18px;">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</span>
            </div>
          </div>
          <div class="content-body">
                @include('flash::message')
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Document Uploads</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                    <div class="heading-elements">
                      <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-content collapse show">
                    <div class="card-body">
                      <p class="card-text">(please attach files or images of your property document & note that clearer images would get quicker responses).</p>
                    <div>
                    <form  enctype="multipart/form-data" method = "post" action="{{url('landlord/addAgreement')}}">
                      {{-- <div class="dropzone dropzone-area" id="dpz-multiple-files"></div>   --}} 
                      <div class="form-control">
                        <select name="property_id" class="form-control" style="margin:5px" required>
                          @foreach($getProperty as $property)
                            <option value="">Select a property</option>
                            <option value="{{$property->id}}"> {{$property->area}} , {{$property->additionalInfo}}  </option>
                          @endforeach
                        </select> 
                        <div class="form-control">
                                <input type="file" name="photos[]" multiple required/>
                         </div> 
                      </div> 
                      @csrf  
                          {{-- <div class="dz-message">Drop Multiple Files Here To Upload</div> --}}
                          {{-- <input name="photos" type="file" multiple /> --}}
                     <div class="form-control">     
                      <button class="btn btn-primary" type="submit">submit</button> 
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
@endsection      
@section('scripts')
<script>

var myDropzone = new Dropzone("#dpz-multiple-files", { url: "/file/post"})

</script>
@endsection