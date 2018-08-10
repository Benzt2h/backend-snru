<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SNRU Map and News</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css
" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/floating-labels/floating-labels.css
" rel="stylesheet">
</head>

<body>
    <div class="form-signin">
        <?php echo form_open('Welcome/login_process') ?>
        <div class="text-center mb-4">
            <img class="mb-4" src="../../img_home/Logo.png" alt="" width="140">
            <h1 class="h3 mb-3 font-weight-normal">SNRU Maps and News</h1>
            <h1 class="h3 mb-3 font-weight-normal">Login</h1>
            <h3 class="h3 mb-3 font-weight-normal">
            </h3>
        </div>

        <div class="form-label-group">
            <input type="text" id="admin_id" name="admin_id" class="form-control" placeholder="ID" required autofocus>
            <label for="inputId">ID</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="admin_password" name="admin_password" class="form-control" placeholder="Password" required>
            <label for="inputPassword">Password</label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <?php echo form_close(); ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
</body>

</html>