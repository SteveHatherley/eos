<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>Dashboard Title</title>

    <!-- CSS -->
    {!! HTML::style('css/bootstrap.css') !!}
    {!! HTML::style('css/datatables.css') !!}
    {!! HTML::style('css/style.css') }}

    @yield('styles')

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
    @section('nav')
        @include('admin.topbav')
    @show

	<div class="container-fluid">
		@section('content')
			Content Holder
		@show
	</div>
</body>
</html>