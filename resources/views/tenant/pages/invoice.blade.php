@extends('landlord-tenant.layouts')
@section('content')
<div class="app-content container center-layout mt-2">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="col-12">
        <span class="text-bold-700" style="font-size: 30px;"> Invoice </span>
      </div>
           <!--  <div class="content-header-left col-md-6 col-12 mb-2">
              <span class="user-name text-bold-200" style="font-size: 18px;">Welcome to Landlords Technology,</span>
            <span class="user-name text-bold-700" style="font-size: 18px;">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</span>
          </div> -->
        </div>

        <div class="content-body">
          @include('flash::message')
        <section class="card">
          <div id="invoice-template" class="card-body">
            <!-- Invoice Company Details -->
            <div id="invoice-company-details" class="row">
              <div class="col-md-6 col-sm-12 text-center text-md-left">
                <div class="media">
                  <img src="{{url('landlord-tenants/images/logo/LT.png')}}" class="img-logo img-fluid"/>
                  <div class="media-body">
                    <ul class="ml-2 px-0 list-unstyled">
                      <li class="text-bold-800">Landlords Technology</li>
                      <li>Adeyemo Alakija,</li>
                      <li>Victoria Island,</li>
                      <li>Lagos,</li>
                      <li>Nigeria</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 text-center text-md-right">
                <h2>INVOICE</h2>
              <p class="pb-3"># {{$invoice->refId}}</p>
                <ul class="px-0 list-unstyled">
                  <li>Balance Due</li>
                <li class="lead text-bold-800">₦ {{$invoice->amount}}</li>
                </ul>
              </div>
            </div>
            <!--/ Invoice Company Details -->
            <!-- Invoice Customer Details -->
            <div id="invoice-customer-details" class="row pt-2">
              <div class="col-sm-12 text-center text-md-left">
                <p class="text-muted">Bill To</p>
              </div>
              <div class="col-md-6 col-sm-12 text-center text-md-left">
                <ul class="px-0 list-unstyled">
                <li class="text-bold-800">{{Auth::user()->username}}</li>
                  <li>{{Auth::user()->address}}</li>
                  <li>{{Auth::user()->state_of_origin}}</li>
                  <li>Nigeria.</li>
                </ul>
              </div>
              <div class="col-md-6 col-sm-12 text-center text-md-right">
                <p>
                <span class="text-muted">Invoice Date :</span> {{date('Y-m-d')}}</p>
                <p>
                  <span class="text-muted">Terms :</span> Receipt</p>
                <p>
                  {{-- <span class="text-muted">Due Date :</span> 10/05/2019</p> --}}
              </div>
            </div>
            <!--/ Invoice Customer Details -->
            <!-- Invoice Items Details -->
            <div id="invoice-items-details" class="pt-2">
              <div class="row">
                <div class="table-responsive col-sm-12">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th> Description </th>
                        <th class="text-right">Amount</th>
                        <th class="text-right">Property Id</th>
                        <th class="text-right">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>
                          <p>{{$invoice->paymentFor}}</p>
                        </td>
                        <td class="text-right">₦ {{$invoice->amount}}</td>
                        <td class="text-right">{{$invoice->refId}}</td>
                        <td class="text-right">{{$invoice->status}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-md-7 col-sm-12 text-center text-md-left">
                  <p class="lead">Payment Methods:</p>
                  <div class="row">
                    <div class="col-md-8">
                      {{-- <table class="table table-borderless table-sm">
                        <tbody>
                          <tr>
                            <td>Bank name:</td>
                            <td class="text-right">ABC Bank,</td>
                          </tr>
                          <tr>
                            <td>Acc name:</td>
                            <td class="text-right">Ogbeni Jude</td>
                          </tr>
                          <tr>
                            <td>REF No:</td>
                            <td class="text-right">FGS165461646546AA</td>
                          </tr>
                        </tbody>
                      </table> --}}
                    </div>
                  </div>
                </div>
                <div class="col-md-5 col-sm-12">
                  <p class="lead">Total due</p>
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>Sub Total</td>
                          <td class="text-right">₦ {{$invoice->amount}}</td>
                        </tr>
                        <tr>
                          <td class="text-bold-800">Total</td>
                          <td class="text-bold-800 text-right"> ₦{{$invoice->amount}}</td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- Invoice Footer -->
            <div id="invoice-footer">
              <div class="row">
                <!-- <div class="col-md-7 col-sm-12">
                  <h6>Terms & Condition</h6>
                  <p>You know, being a test pilot isn't always the healthiest business
                    in the world. We predict too much for the next year and yet far
                    too little for the next 10.</p>
                </div> -->
                <div class="col-md-5 col-sm-12 text-center">
                  <button type="button" class="btn btn-info btn-lg my-1"><i class="la la-paper-plane-o"></i> Print Invoice</button>
                </div>
              </div>
            </div>
            <!--/ Invoice Footer -->
          </div>
        </section>
      </div>


  </section>
</div>
</div>
</div> 
@endsection