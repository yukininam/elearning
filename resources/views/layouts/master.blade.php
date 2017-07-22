<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header')
</head>
<body>
    @include('layouts.navbar') 
    <div id="content">
        @yield('content')
    </div>
    @include('layouts.footer')
    @include('layouts.technicalfooter')
</body>
</html>