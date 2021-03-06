<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Super Liga</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="cobas/css/bootstrap.min.css" rel="stylesheet">
    <link href="cobas/css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- Navs -->
				@include('layouts.navs')
			<!-- End Navs -->
			<!-- Isi -->
				@yield('content')
			<!-- Akhir Isi -->
			
			<!-- Caroussel  -->
				@include('layouts.keren')
			<!-- End Caroussel -->
			<!-- Pagination -->
				@include('layouts.pagination')
			<!-- End Pagination -->
		</div>
	</div>
</div>

    <script src="cobas/js/jquery.min.js"></script>
    <script src="cobas/js/bootstrap.min.js"></script>
    <script src="cobas/js/scripts.js"></script>
  </body>
</html>