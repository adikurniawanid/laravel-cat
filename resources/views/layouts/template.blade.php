@include('layouts.head')


<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('layouts.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            @include('layouts.topbar')

            @yield('container')
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
        @include('layouts.footer')
    </div>
    <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    @include('modal.logout')
    @include('layouts.tail')
