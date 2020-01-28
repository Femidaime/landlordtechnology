@extends('landlord-tenant.layouts')
@section('content')
<div class="app-content container center-layout mt-2">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="col-12">
        <span class="text-bold-700" style="font-size: 30px;"> View Agreements </span>
      </div>
           <!--  <div class="content-header-left col-md-6 col-12 mb-2">
              <span class="user-name text-bold-200" style="font-size: 18px;">Welcome to Landlords Technology,</span>
            <span class="user-name text-bold-700" style="font-size: 18px;">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</span>
          </div> -->
        </div>

        <div class="content-body">
          @include('flash::message')
          <section id="user-profile-cards-with-cover-image" class="row mt-2">

          <section id="image-gallery" class="card">
          <div class="card-header">
            <h4 class="card-title">Image gallery</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            
          </div>
          <div class="card-content">
            <div class="card-body">
              
            </div>
            <div class="card-body  my-gallery" itemscope itemtype="{{url('//schema.org/ImageGallery')}}">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope itemtype="{{url('//schema.org/ImageObject')}}">
                  <a href="{{url('/landlord-tenants/images/icons/docs.jpg')}}" itemprop="contentUrl" target="_blank" data-size="480x360">
                    <img src="{{url('/landlord-tenants/images/icons/docs.jpg')}}"
                    itemprop="thumbnail" alt="Image description" class="img-thumbnail img-fluid" target="_blank"/>
                  </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope itemtype="{{url('//schema.org/ImageObject')}}">
                  <a href="{{url('/landlord-tenants/images/icons/docs.jpg')}}" target="_blank" itemprop="contentUrl" data-size="480x360">
                    <img src="{{url('/landlord-tenants/images/icons/docs.jpg')}}"
                    itemprop="thumbnail" alt="Image description" class="img-thumbnail img-fluid" target="_blank" />
                  </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope itemtype="{{url('//schema.org/ImageObject')}}">
                  <a href="{{url('/landlord-tenants/images/icons/docs.jpg')}}" target="_blank" itemprop="contentUrl" data-size="480x360">
                    <img src="{{url('/landlord-tenants/images/icons/docs.jpg')}}"
                    itemprop="thumbnail" alt="Image description" class="img-thumbnail img-fluid" target="_blank" />
                  </a>
                </div>
              </div>
            </div>
            <!--/ Image grid -->
            <!-- Root element of PhotoSwipe. Must have class pswp. -->
            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
              <!-- Background of PhotoSwipe. 
             It's a separate element as animating opacity is faster than rgba(). -->
              <div class="pswp__bg"></div>
              <!-- Slides wrapper with overflow:hidden. -->
              <div class="pswp__scroll-wrap">
                <!-- Container that holds slides. 
                PhotoSwipe keeps only 3 of them in the DOM to save memory.
                Don't modify these 3 pswp__item elements, data is added later on. -->
                <div class="pswp__container">
                  <div class="pswp__item"></div>
                  <div class="pswp__item"></div>
                  <div class="pswp__item"></div>
                </div>
                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                <div class="pswp__ui pswp__ui--hidden">
                  <div class="pswp__top-bar">
                    <!--  Controls are self-explanatory. Order can be changed. -->
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader-active when preloader is running -->
                    <div class="pswp__preloader">
                      <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                          <div class="pswp__preloader__donut"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                  </div>
                  <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                  </button>
                  <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                  </button>
                  <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!--/ PhotoSwipe -->
        </section>

          </section>
        </div>
      </div>
    </div> 
    @endsection