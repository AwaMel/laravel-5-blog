<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<!-- bootstrap cdn -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	@yield('tempcss')

</head>
<body>



@yield('content')



<!-- JavaScripts -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.1.0.min.js" ></script>


@yield('tempjs')


</body>
</html>