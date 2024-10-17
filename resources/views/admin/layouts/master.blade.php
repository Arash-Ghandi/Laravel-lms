<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.layouts.head-tag')
    @yield('style')
    <title>
        @yield('title')
    </title>
</head>
<body>
    <div class="spinner-wrap" id="spiner_loader" style="display: block; opacity: 1;">
        <div class="spinner-circle"><span class="spinner-bar"></span>
        </div>
    </div>

    <section class="body-container">

        <section id="main-body" class="main-body">
            @include('admin.layouts.header')
            <div class="container-fluid">
                <div class="row">
                    @include('admin.layouts.sidebar')
                    @yield('content')
                </div>
            </div>
        </section>

    </section>

    @include('client.layouts.script')
    @yield('script')

</body>
</html>
