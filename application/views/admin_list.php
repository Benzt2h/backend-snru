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
	<title>Admin List</title>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
	 crossorigin="anonymous">

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link" href="<?php echo site_url('Welcome/index');?>">Home</a>
				<a class="nav-item nav-link active" href="<?php echo site_url('Admin/admin_list');?>">Admin
					<span class="sr-only">(current)</span>
				</a>
				<a class="nav-item nav-link" href="<?php echo site_url('Map/map_list');?>">Map</a>
				<a class="nav-item nav-link" href="<?php echo site_url('News/news_list');?>">News</a>
				<a class="nav-item nav-link" href="./../../map_api.php">Map API</a>
				<a class="nav-item nav-link" href="./../../news_api.php">News API</a>
			</div>
		</div>
		<a>Hello,
			<?php echo $this->session->userdata('admin_name');?>
		</a>
		<a href="<?php echo site_url('Welcome/logout');?>">
			<button type="button" class="btn btn-danger my-2 my-sm-0">Logout</button>
		</a>
	</nav>

<h1 class="text-center" >SNRU Maps and News</h1>

	<h3 class="container" style="margin-top: 30px;">Admin</h3>
	<div class="container" style="margin-top: 30px;">
		<div class="row">
			<div class="col-lg-4">
				<a href="<?php echo site_url('Admin/admin_insert');?>">
					<button type="button" class="btn btn-primary">Add</button>
				</a>
			</div>
			<div class="col-lg-4">
				<?php echo form_open('Admin/admin_search');?>
				<input class="form-control" type="text" name="search">
			</div>
			<button type="submit" class="btn btn-success">Search</button>
			<?php echo form_close();?>
		</div>
		<table class="table" class="thead-dark">
			<thead>
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Password</th>
					<th scope="col">Name</th>
					<th scope="col">Manage</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data as $list) {
    ?>
				<td>
					<?php echo $list['admin_id']; ?>
				</td>
				<td>
					<?php echo $list['admin_password']; ?>
				</td>
				<td>
					<?php echo $list['admin_name']; ?>
				</td>
				<td>
					<a href="<?php echo site_url('Admin/admin_edit'); ?>/<?php echo $list['admin_id']; ?>">
						<button type="button" class="btn btn-warning">Edit</button>
					</a>
					<a href="<?php echo site_url('Admin/admin_delete'); ?>/<?php echo $list['admin_id']; ?>">
						<button type="button" class="btn btn-danger">Delete</button>
					</a>
				</td>
			</tbody>
			<?php
} ?>
		</table>
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