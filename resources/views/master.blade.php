<!DOCTYPE html>
<html>
	<head>
		@include("parts._header")
	</head>
	<body id="page1">
		<div id="main">
			
			@include("parts._menu")	
		
			<!-- Pesan Selamat Datang -->
			@yield('welcome')

			<!-- Konten Start -->
			@yield('konten')
			<!--Konten End-->

			@include("parts._footer")
		</div>
	</body>
</html>