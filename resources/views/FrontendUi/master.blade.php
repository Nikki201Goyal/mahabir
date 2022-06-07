<!DOCTYPE html>
<html lang="en">
@include('FrontendUi.head')
<body>
<div class="main-content" id="panel">
@include('FrontendUi.navbar')
@yield('content')
</div>
@include('FrontendUi.footer')
@include('FrontendUi.scripts')

</body>
</html>