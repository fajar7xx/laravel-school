<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('meta')
    <title>Dashboard - Laravel School</title>
    
    @include('backend.inc.head')

    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        @include('backend.inc.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('backend.inc.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                @include('backend.inc.footer')
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    
    @yield('modal')

    @include('backend.inc.footer-script')
</body>

</html>
