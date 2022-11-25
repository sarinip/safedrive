<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Driving School</title>
    <!-- datatables:css -->
    <link href=//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css>
    <link href=//cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css>
    <link href=//cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap4.min.css>
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- notification:css -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('/vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('/css/vertical-layout-light/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/css/fullcalender.min.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('/images/favicon.png')}}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src=//code.jquery.com/jquery-3.5.1.js></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>



</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        @include('layouts.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>
                        Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>
                        Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>

            <!-- partial:../../partials/_sidebar.html -->
            @include('layouts.sidemenu')
            <!-- partial -->

            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                @include('layouts.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    {{--@include('layouts.script')--}}
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
    <script src="{{asset('/vendors/select2/select2.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
{{--    <script src="{{asset('/js/off-canvas.js')}}"></script>--}}
    <script src="{{asset('/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('/js/template.js')}}"></script>
    <script src="{{asset('/js/settings.js')}}"></script>
    <script src="{{asset('/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('/js/file-upload.js')}}"></script>
    <script src="{{asset('/js/typeahead.js')}}"></script>
    <script src="{{asset('/js/select2.js')}}"></script>
    <script src="{{asset('/js/fullcalender.min.js')}}"></script>
    <!-- End custom js for this page-->
    <!-- Notification js-->

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- datatable js-->
    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": [

                {
                    extend: 'copy',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'csv',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'pdf',
                    exportOptions: {
                        columns: ':visible'
                    }
                }, "colvis"
            ]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>



    <script src=//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js></script>
    <script src=//cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js></script>
    <script src=//cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js></script>
    <script src=//cdn.datatables.net/buttons/1.7.1/js/buttons.bootstrap4.min.js></script>
    <script src=//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js></script>
    <script src=//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js></script>
    <script src=//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js></script>
    <script src=//cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js></script>
    <script src=//cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js></script>
    <script src=//cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js></script>
{{--    <script src=//cdnjs.com/libraries/Chart.js></script>--}}


    <!-- Plugin js for this page -->
{{--    <script src="{{asset('/js/chart.js')}}"></script>--}}
    <script src="{{asset('/js/dataTables.select.min.js')}}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
{{--    <script src="{{asset('/js/off-canvas.js')}}"></script>--}}
    <script src="{{asset('/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('/js/template.js')}}"></script>
    <script src="{{asset('/js/settings.js')}}"></script>
    <script src="{{asset('/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('/js/dashboard.js')}}"></script>
    <script src="{{asset('/js/db.js')}}"></script>
    <!-- End custom js for this page-->





</body>

</html>
