<!DOCTYPE html>
<html lang="en">
@include('dashboardui.head')
<body>
@include('dashboardui.sidenav')
<div class="main-content" id="panel">
@include('dashboardui.navbar')
@yield('content')
</div>
@include('dashboardui.footer')
@include('dashboardui.scripts')
</body>
</html>