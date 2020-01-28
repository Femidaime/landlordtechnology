



@extends('landlord-tenant.layouts')
@section('content')
<div class="app-content container center-layout mt-2">
        <div class="content-wrapper">
          <div class="content-header row">
          <div class="col-12">
              <span class="text-bold-700" style="font-size: 30px;"> Finance</span>
            </div>
            <div class="content-header-left col-md-6 col-12 mb-2">
              <span class="user-name text-bold-200" style="font-size: 18px;">Welcome to Landlords Technology,</span>
              <span class="user-name text-bold-700" style="font-size: 18px;">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</span>
            </div> 
          </div>
           {{-- 
          <div class="content-body">
                @include('flash::message')
           <section class="basic-select">
            {{-- <div class="row match-height Payment-Tab">
              <div class="col-12">
                <h4 class="text-uppercase">Account Information</h4>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-12">
                <div class="card">
                  <div class="card-block">
                    <div class="card-body">
                      <fieldset class="form-group">
                        <select class="selectpicker form-control">
                          <option>Select Your Bank</option>
                          <option value="AccessBank">Access Bank</option>
                          <option value="DiamondBank">Access Bank (Diamond)</option>
                          <option value="Ecobank">Ecobank </option>
                          <option value="FidelityBank">Fidelity Bank</option>
                          <option value="FirstBank">First Bank</option>
                          <option value="FCMB">First City Monument Bank</option>
                          <option value="GTB">Guaranty Trust Bank</option>
                          <option value="Heritagebank">Heritage Bank</option>
                          <option value="keystonebank">Keystone Bank </option>
                          <option value="skyebank">Polaris Bank</option>
                          <option value="StanbicIBTC">Stanbic IBTC</option>
                          <option value="standardchartered">Standard Chartered Bank</option>
                          <option value="sterlingbank">Sterling Bank</option>
                          <option value="unionbank">Union Bank</option>
                          <option value="UBA">UBA</option>
                          <option value="Unity">Unity Bank</option>
                          <option value="wemabank">Wema Bank</option>
                          <option value="zenithbank">Zenith Bank</option>
                        </select>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-12">
                <div class="card">
                  <div class="card-block">
                    <div class="card-body">
                      <div class="form-group">
                        <input type="text" id="Bank-Account-Number" class="form-control" placeholder="Bank Account Number"
                        name="Account Number">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-12">
                <div class="card">
                  <div class="card-block">
                    <div class="card-body">
                      <div class="form-group">
                        <input type="text" id="Bank-Account-Name" class="form-control" placeholder="Bank Account name"
                        name="Account Name">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-12">
                <div class="card">
                  <div class="card-block">
                    <div class="card-body">
                     <fieldset class="form-group">
                      <select class="form-control" id="basicSelect">
                        <option>Select Payment Duration</option>
                        <option>Weekly</option>
                        <option>Monthly</option>
                        <option>Yearly</option>
                      </select>
                    </fieldset>
                  </div>
                </div>
                <a class="btn btn-outline-primary" href="tenant-overview-home.html" style="margin: 1rem 0 0 1rem; padding: 1rem  0.6rem; width: 200px;"> Search </a>
              </div>
            </div> --}}
          </div>
        </section>
      
      
        <section class="">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"> Property Payment log </h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="table-responsive">
                    <table class="table table-hover mb-0">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Description</th>
                          <th>Payment For</th>
                          <th>Amount</th>
                          <th>Reference</th>
                          <th>Property Id</th>
                          <th>Created At</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $index = 1; ?>
                        @if(count($getInvoice) < 1)
                         <tr></td>No invoice to show  </td></tr>
                        @endif
                        @foreach($getInvoice as $invoice)
                        
                        <tr>
                           
                          <td><?php echo $index++; ?></td>
                          <td>{{$invoice->description}}</td>
                          <td>{{$invoice->paymentFor}}</td>
                          <td>₦{{$invoice->amount}}</td>
                          <td>{{$invoice->refId}}</td>
                          {{-- <td>kjhgf</td> --}}
                          <td>{{$invoice->verifiedProperties->uniqueId}}</td>
                          <td>{{$invoice->created_at}}</td>
                        <td><a  href= "{{url('/tenant/view-invoice')}}/{{$invoice->id}}" class="btn-sm btn-primary">View Invoice</button></a>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
       </div>
     </div>
  </div>
@endsection  