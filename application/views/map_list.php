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
	<title>Map List</title>
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
				<a class="nav-item nav-link" href="./../../map_api.php">Map API</a>
				<a class="nav-item nav-link" href="./../../news_api.php">News API</a>
			</div>
		</div>
		<a href="<?php echo site_url('Welcome/logout');?>"><button type="button" class="btn btn-danger my-2 my-sm-0">Logout</button></a>
	</nav>

	<div class="container">
        <a href="<?php echo site_url('Map/map_insert');?>"><button type="button" class="btn btn-primary">Add</button></a>
        <table class="table" class="thead-dark">
            <thead>
                <tr>
                    <th scope="col">Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
					<th scope="col">Img</th>
					<th scope="col">Latitude</th>
					<th scope="col">Logitude</th>
					<th scope="col">Manager</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $list) {
    ?>
                <tr>
                    <td>
                        <?php echo $list['map_number']; ?>
                    </td>
                    <td>
                        <?php echo $list['map_name']; ?>
                    </td>
                    <td>
                        <?php echo $list['map_description']; ?>
                    </td>
                    <td>
						<img style='width:128px;height:128px;' src='../../<?php echo $list['map_img']; ?>'>
                    </td>
                    <td>
                        <?php echo $list['map_latitude']; ?>
                    </td>
                    <td>
                        <?php echo $list['map_logitude']; ?>
                    </td>
                    <td>
                        <a href="<?php echo site_url('Map/map_edit') ?>/<?php echo $list['map_number']; ?>">
                            <button class="btn btn-info">Edit</button>
                        </a>
                        <a href="<?php echo site_url('Map/map_delete') ?>/<?php echo $list['map_number']; ?>">
                            <button class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
                <?php
} ?>
            </tbody>
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