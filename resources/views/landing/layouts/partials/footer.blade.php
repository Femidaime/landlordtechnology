
<!-- Footer start -->
<footer class="footer" id="hideFooter">
    <div class="container footer-inner">
      <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
          <div class="footer-item">
            <h4>Contact Us</h4>
  
            <ul class="contact-info">
            <li>
              21 Adeyemo Alakija Street, Victoria Island, Lagos, Nigeira.
            </li>
            <li>
              Email: <a href="mailto:info@landlordstech.com">info@landlordstech.com</a>
            </li>
            <li>
              Phone: <a href="tel:+234-812-345-6789">+234 812 345 6789</a>
            </li>
          </ul>
  
            <ul class="social-list clearfix">
              <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
          <div class="footer-item">
            <h4>
              Useful Links
            </h4>
            <ul class="links">
              <li>
                <a href="{{url('/landlord/register')}}"><i class="fa fa-angle-right"></i>Landlords</a>
              </li>
              <li>
                <a href="{{url('/tenant/register')}}"><i class="fa fa-angle-right"></i>Tenant</a>
              </li>
              <li>
                <a href="coming-soon.html"><i class="fa fa-angle-right"></i>Investors</a>
              </li>
              <li>
                <a href="{{url('/agent/register')}}"><i class="fa fa-angle-right"></i>Agents</a>
              </li>
              <!-- <li>
                <a href="{{url('/coming-soon')}}"><i class="fa fa-angle-right"></i>Blog</a>
              </li> -->
              <li> 
                <a href="{{url('/coming-soon')}}"><i class="fa fa-angle-right"></i>iOS App</a>
              </li>
              <li>
                <a href="{{url('/coming-soon')}}"><i class="fa fa-angle-right"></i>Andriod App</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
          <!-- <div class="recent-posts footer-item">
            <h4>Recent Properties</h4>
            <div class="media mb-4">
              <a class="pr-4" href="properties-details.html">
                <img src="assets/img/landlord-tech-image-8.jpg" alt="sub-property-3">
              </a>
              <div class="media-body align-self-center">
                <h5>
                  <a href="properties-details.html">4 bedroom Apartment For Sale</a>
                </h5>
                <p>Lekki, Lagos.</p>
                <p> <strong>₦ 90,245,000</strong></p>
              </div>
            </div>
            <div class="media mb-4">
              <a class="pr-4" href="properties-details.html">
                <img src="assets/img/landlord-tech-image-7.jpg" alt="sub-property-3">
              </a>
              <div class="media-body align-self-center">
                <h5>
                  <a href="properties-details.html">4 bedroom Apartment For Sale</a>
                </h5>
                <p>Garki, Abuja.</p>
                <p> <strong>₦ 60,245,000</strong></p>
              </div>
            </div>
            <div class="media">
              <a class="pr-4" href="properties-details.html">
                <img src="assets/img/landlord-tech-image-6.jpg" alt="sub-property-3">
              </a>
              <div class="media-body align-self-center">
                <h5>
                  <a href="properties-details.html">4 bedroom Apartment For Sale</a>
                </h5>
                <p>Lekki, Lagos.</p>
                <p> <strong>₦ 50,245,000</strong></p>
              </div>
            </div>
          </div> -->
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
          <div class="footer-item clearfix">
            <h4>Subscribe</h4>
            <div class="Subscribe-box">
              <p> Subscribe to our daily newsletter and mail and get information on new properties and investment opportunities.</p>
              <form action="#" method="GET">
                <p>
                  <input type="text" class="form-contact" name="email" placeholder="Enter Address">
                </p>
                <p>
                  <button type="submit" name="submitNewsletter" class="btn btn-lg btn-round btn-white-lg-outline">
                    Subscribe
                  </button>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
  
      <div class="row">
        <div class="col-xl-12">
          <p class="copy">&copy; Landlords Technology. All Rights Reserved. 2019.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer end ->

 @include('landing.layouts.partials.menu');

 <!-- External JS libraries -->
<script src="{{asset('landing/js/jquery-2.2.0.min.js')}}"></script>
<script src="{{asset('landing/js/popper.min.js')}}"></script>
<script src="{{asset('landing/js/bootstrap.min.js')}}"></script>
<script src="{{asset('landing/js/jquery.selectBox.js')}}"></script>
<script src="{{asset('landing/js/rangeslider.js')}}"></script>
<script src="{{asset('landing/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('landing/js/jquery.filterizr.js')}}"></script>
<script src="{{asset('landing/js/wow.min.js')}}"></script>
<script src="{{asset('landing/js/backstretch.js')}}"></script>
<script src="{{asset('landing/js/jquery.countdown.js')}}"></script>
<script src="{{asset('landing/js/jquery.scrollUp.js')}}"></script>
<script src="{{asset('landing/js/particles.min.js')}}"></script>
<script src="{{asset('landing/js/typed.min.js')}}"></script>
<script src="{{asset('landing/js/dropzone.js')}}"></script>
<script src="{{asset('landing/js/jquery.mb.YTPlayer.js')}}"></script>
<script src="{{asset('landing/js/leaflet.js')}}"></script>
<script src="{{asset('landing/js/leaflet-providers.js')}}"></script>
<script src="{{asset('landing/js/leaflet.markercluster.js')}}"></script>
<script src="{{asset('landing/js/maps.js')}}"></script>
<script src="{{asset('landing/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{url('/landing/maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE')}}"></script>
<script src="{{asset('/landing/js/ie-emulation-modes-warning.js')}}"></script>
<!-- Custom JS Script -->
<script  src="{{asset('landing/js/app.js')}}"></script>
@yield('scripts')
 