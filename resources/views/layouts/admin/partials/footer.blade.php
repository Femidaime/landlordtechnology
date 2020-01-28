<footer class="footer">
        © {{date('Y')}} All rights reserved. Tremendoc LTD
    </footer>
    <!-- End Footer Section -->
</div>
</div>

<!-- Start core js -->
<script src="{{url('admin/assets/global/plugins/jquery/dist/jquery.min.js')}}"></script>
<script src="{{url('admin/assets/global/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{url('admin/assets/global/plugins/Waves/dist/waves.min.js')}}"></script>
<script src="{{url('admin/assets/global/plugins/screenfull.js/dist/screenfull.min.js')}}"></script>
<script src="{{url('admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- Start core javascript -->

<!-- Start global js -->
<script src="{{url('admin/assets/global/js/left-menu.min.js')}}"></script>
<!-- End global js -->

<!-- Start page plugin js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="{{url('admin/assets/global/plugins/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{url('admin/assets/global/plugins/chart.js/samples/utils.js')}}"></script>
<script src="{{url('admin/assets/global/plugins/jquery.sparkline/jquery.sparkline.js')}}"></script>
<script src="{{url('admin/assets/global/plugins/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{url('admin/assets/global/plugins/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{url('admin/assets/global/plugins/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- End page plugin js -->

<!-- Start page js -->
<script src="{{url('admin/assets/global/js/dashboard_v1.min.js')}}"></script>
<script src="{{ url('admin/js/jquery-confirm.js')}}"></script>

<!-- End page js -->
@yield('scripts')
</body>
</html>