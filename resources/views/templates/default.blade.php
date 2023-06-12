@extends('layouts/head')
@include('layouts/bottom')
@include('layouts/logout')


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            @include('layouts/sidebar')
               
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    @include('layouts/topbar')

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                        @yield('dashboard')

                </div>
            <!-- End of Main Content -->

            @include('layouts/footer')
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Page level custom scripts -->
    <script src="{{ '/assets/js/demo/chart-area-demo.js' }}"></script>
    <script src="{{ '/assets/js/demo/chart-pie-demo.js' }}"></script>
</body>
</html>