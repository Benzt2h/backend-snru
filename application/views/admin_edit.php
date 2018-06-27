<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Admin Edit</title>
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
				<a class="nav-item nav-link active" href="<?php echo site_url('Welcome/index');?>">Home
					<span class="sr-only">(current)</span>
				</a>
				<a class="nav-item nav-link" href="<?php echo site_url('Admin/admin_list');?>">Admin</a>
				<a class="nav-item nav-link" href="<?php echo site_url('Map/map_list');?>">Map</a>
				<a class="nav-item nav-link" href="<?php echo site_url('News/news_list');?>">News</a>
				<a class="nav-item nav-link" href="<?php echo site_url('Map/map_api');?>">Map API</a>
				<a class="nav-item nav-link" href="<?php echo site_url('News/news_api');?>">News API</a>
			</div>
		</div>
		<a href="<?php echo site_url('Welcome/logout');?>"><button type="button" class="btn btn-danger my-2 my-sm-0">Logout</button></a>
	</nav>

    <div class="container">
        <?php echo form_open('Admin/admin_edit_process') ?>
        <div class="form-group">
            ID
            <input required  pattern="{20}" class="form-control" type="text" name="admin_id" value="<?php echo $data[0]['admin_id'];?>">
            <br> Password
            <input required pattern="{20}" class="form-control" type="password" name="admin_password" value="<?php echo $data[0]['admin_password'];?>">
            <br> Name
            <input required class="form-control" type="text" name="admin_name" value="<?php echo $data[0]['admin_name'];?>">
            <br>
        </div>
        <button type="submit" class="btn btn-success">แก้ไขข้อมูล</button>
        <?php echo form_close() ?>
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