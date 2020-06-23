<!DOCTYPE html>
<html>
<head>
	@include('web.layout.partials.head')
</head>
<body class="page-body">
	@include('web.layout.partials.bunner')
	@include('web.layout.partials.slider')


	@yield('content')


	@include('web.layout.partials.footer')
	</div>	
</div>



	@include('web.layout.partials.scripts')
</body>
</html>