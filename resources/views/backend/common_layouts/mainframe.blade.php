

        @include('backend.main_components.header')
        <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": false}'>
        <div class="wrapper">
        @include('backend.main_components.sidebar')


        <div class="content-page">
            <div class="content">
                @include('backend.main_components.topbar')

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">


    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <link rel="stylesheet" type="text/css"  href="{{ ('css/toastr.min.css') }}">


                @yield('main_content')



                        </div>
                    </div>

                </div>
            </div>
        </div>

        @include('backend.main_components.footer')

        </div>
        @include('backend.main_components.rightsidebar')
        </body>
        {{-- <script>
            function myfunction(){
                $.NotificationApp.send("Title","Your awesome message text","Position","Background color","Icon");
            }
        </script> --}}
         <!-- bundle -->

         <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
         <script src="{{ asset('assets/js/app.min.js') }}"></script>

         <!-- third party js -->
         <script src="{{ asset('assets/js/vendor/apexcharts.min.js') }}"></script>
         <script src="{{ asset('assets/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
         <script src="{{ asset('assets/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
         <!-- third party js ends -->

         <!-- demo app -->
         <script src="{{ asset('assets/js/pages/demo.dashboard.js') }}"></script>

         <!-- demo js -->
        {{-- <script src="{{ asset('assets/js/pages/demo.toastr.js') }}"></script> --}}


        <!-- -->



         <!-- end demo js-->

         <script>
            @if(Session::has('success'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.success("{{ session('success') }}");
            @endif

            @if(Session::has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.error("{{ session('error') }}");
            @endif

            @if(Session::has('info'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.info("{{ session('info') }}");
            @endif

            @if(Session::has('warning'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.warning("{{ session('warning') }}");
            @endif
          </script>

<script type="text/javascript">
    var url = "{{ route('LangChange') }}";
    $(".Langchange").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
</script>

        </html>


