<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Check this Out">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Login</title>

    <!--Core CSS -->
    <link href="{{ URL::to('/') }}/admin_assets/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/admin_assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/admin_assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ URL::to('/') }}/admin_assets/css/style.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/admin_assets/css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="{{ URL::to('/') }}/admin_assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

       {!! Form::open(array('url' => 'administrator/login', 'method' => 'post', 'class' => 'form-signin')) !!}
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            <?php $message = Session::get('message'); ?>
            @if($message)
            <div class="alert alert-block alert-danger fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <strong> {{ Session::get('message') }} </strong>
            </div>
            @endif

            <div class="user-login-info">
                <input type="text" class="form-control" name="username" placeholder="User Name" autofocus required>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>

            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>

        </div>

      </form>

    </div>


    <script src="{{ URL::to('/') }}/admin_assets/js/jquery.js"></script>
    <script src="{{ URL::to('/') }}/admin_assets/bs3/js/bootstrap.min.js"></script>

  </body>
</html>
