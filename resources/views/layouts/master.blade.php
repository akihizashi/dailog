@include('layouts.header')
<body>
    @include('layouts.navbar')
    <div class="container-fluid">
        <div class="row">
            @include('layouts.menu')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    @yield('footer')
    <script src="https://unpkg.com/ionicons@4.4.6/dist/ionicons.js"></script>
</body>
@include('layouts.footer')
