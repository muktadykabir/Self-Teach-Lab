    @yield('script')
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ asset('js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.sparkline.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/jquery.customSelect.min.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <!--right slidebar-->
    <script src="{{ asset('js/slidebars.min.js') }}"></script>
    <!--common script for all pages-->
    <script src="{{ asset('js/common-scripts5e1f.js?v=2') }}"></script>
    <script src="{{ asset('assets/select2/js/select2.min.js') }}"></script>
    <!--script for this page-->
    <script src="{{ asset('js/sparkline-chart.js') }}"></script>
    <script src="{{ asset('js/easy-pie-chart.js') }}"></script>
    <script src="{{ asset('js/count.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script type="text/javascript" language="javascript"
        src="{{ asset('assets/advanced-datatable/media/js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/data-tables/DT_bootstrap.js') }}"></script>
    <!--dynamic table initialization -->
    <script src="{{ asset('js/dynamic_table_init.js') }}"></script>
    {{-- <script src="{{ asset('js/datepicker/daterangepicker.min.js') }}"></script> --}}
    <!-- date range picker + momment js -->
    <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script> -->
    <script type="text/javascript" src="{{ asset('assets/daterangepicker-master/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/daterangepicker-master/daterangepicker.js') }}"></script>
    <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script> -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".select2box").select2();
        });

    </script>
    <script>
        CKEDITOR.replace('post');
    </script>

