<?php
defined('BASEPATH') or exit('No direct script access allowed');
    if ($this->session->userdata('admin_name')) {
    } else {
        redirect('Welcome/login');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Welcome</title>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
	 crossorigin="anonymous">

</head>

<body>
	<div class="container-fluid bg-dark">
		<header class="blog-header py-3">
			<div class="col-12 text-center">
				<h1 class="blog-header-logo text-white">SNRU Maps and News</h1>
			</div>
		</header>
	</div>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link active" href="<?php echo site_url('Welcome/index');?>">Home
					<span class="sr-only">(current)</span>
				</a>
				<a class="nav-item nav-link" href="<?php echo site_url('Admin/admin_list');?>">Admin</a>
				<a class="nav-item nav-link" href="<?php echo site_url('Map/map_list');?>">Map</a>
				<a class="nav-item nav-link" href="<?php echo site_url('News/news_list');?>">News</a>
				<a class="nav-item nav-link" href="../../map_api.php">Map API</a>
				<a class="nav-item nav-link" href="../../news_api.php">News API</a>
			</div>
		</div>
		<a>Hello,<?php echo $this->session->userdata('admin_name');?></a>
		<a href="<?php echo site_url('Welcome/logout');?>">
			<button type="button" class="btn btn-danger my-2 my-sm-0">Logout</button>
		</a>
	</nav>

	<h3 class="container" style="margin-top: 30px;">Home</h3>
	<div class="container marketing" style="margin-top: 30px;">
		<div class="row">
			<div class="col-lg-4">
				<img class="rounded-circle" src="../../img_home/admin.png" width="140" height="140">
				<h2>Admin</h2>
				<p>Add,Delete and Edit information admin.</p>
				<p>
					<a class="btn btn-secondary" href="<?php echo site_url('Admin/admin_list');?>" role="button">Go &raquo;</a>
				</p>
			</div>
			<div class="col-lg-4">
				<img class="rounded-circle" src="../../img_home/Map.png" width="140" height="140">
				<h2>Map</h2>
				<p>Add,Delete and Edit Map data.</p>
				<p>
					<a class="btn btn-secondary" href="<?php echo site_url('Map/map_list');?>" role="button">Go &raquo;</a>
				</p>
			</div>
			<div class="col-lg-4">
				<img class="rounded-circle" src="../../img_home/News.png" width="140" height="140">
				<h2>News</h2>
				<p>Add,Delete and Edit News data.</p>
				<p>
					<a class="btn btn-secondary" href="<?php echo site_url('News/news_list');?>" role="button">Go &raquo;</a>
				</p>
			</div>
		</div>
	</div>


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
	 crossorigin="anonymous"></script>
</body>

</html>