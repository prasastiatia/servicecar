<!DOCTYPE html>
<html>
<head>
	@include('users.head_user')
</head>
<body class=" vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click"  data-color="bg-black" data-menu="vertical-menu"  data-col="2-columns">
@include('users.header_user')
@include('users.sidebar_user')

<!-- Content Wrapper. Contains page content -->

  
 <div class="app-content content">
        <!-- Chart -->
@yield('content')
<!-- /.content-wrapper -->
</div>

@include('users.footer_user')

<!-- ./wrapper -->
@include('users.script')

</body>
</html>