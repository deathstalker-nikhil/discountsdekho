<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | Backoffice</title>
    <link href="/assets/backoffice/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/backoffice/css/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="/assets/backoffice/css/backoffice/sb-admin-2.css" rel="stylesheet">
    <link href="/assets/backoffice/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="/backoffice/doLogin" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                                    <input type="submit" class="btn btn-lg btn-success btn-block" value="Login">
                                </div>
                            </fieldset>
                        </form>
                        <?php if($message != '') {?>
                            <p class="text-center text-danger"><?php echo $message; ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/backoffice/js/jquery.min.js"></script>
    <script src="/assets/backoffice/js/bootstrap.min.js"></script>
    <script src="/assets/backoffice/js/metisMenu/metisMenu.min.js"></script>
    <script src="/assets/backoffice/js/backoffice/sb-admin-2.js"></script>
</body>
</html>
