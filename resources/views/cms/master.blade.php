<!DOCTYPE html>
<html>
<head>
       @include('cms.layout2.link')
</head>
<body class="nav-md">

        @include('cms.layout2.sidebar1')
        <!-- page content -->
        <div class="right_col" role="main">
                @yield('content')
        </div>

        @include('cms.layout2.script')
        @include('cms.layout2.footer')
</body>
</html> 