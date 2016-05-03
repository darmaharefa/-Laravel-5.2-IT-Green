<!DOCTYPE html>
<html lang="en">
<head>
	@include('parts2._header')
</head>
<body>

	<div id="wrapper">
		@include('parts2._navbar')
		<div id="page-wrapper">
			<div class="container-fluid">
				@include('parts2._message')
				@yield("breadcrumb")
				@yield('konten')
			</div>
		</div>
	</div>
	
	@include('parts2._footer')
</body>
</html>