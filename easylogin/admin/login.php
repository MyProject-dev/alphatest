<?php
require_once('../includes/load.php');
$EL = EasyLogin::getInstance();

if ($EL->is_logged()) {
    header('Location: index.php');
}

if (isset($_POST['signin'])) {
    if ( $EL->signin($_POST['user'], $_POST['password'], @$_POST['remember']) ) 
        header('Location: index.php');
    else 
        $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Sign in &middot; EasyLogin Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all">
        <style type="text/css">
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }
            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                border-radius: 4px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .alert {padding: 10px;}
            label {cursor: pointer;}
        </style>
    </head>
    <body>
        <div class="container">
            <form method="post" action="" class="form-signin">
                <h2>Admin Sign in</h2>
                <?php
                if (isset($error)) {
                    echo '<div class="alert alert-danger"><strong>Error:</strong> Invalid credentials !</div>';
                }
                ?>
                <div class="form-group">
                    <label for="user">Email or Username</label>
                    <input type="text" name="user" id="user" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="remember" value="1"> Remember me</label>
                </div>
                <div class="form-group">
                    <span class="pull-left"><a href="<?php echo $EL->config_item('home_url'); ?>">&larr; Back Home</a></span>
                    <button class="btn btn-primary pull-right" type="submit" name="signin">Sign in</button>
                    <br clear="all">
                </div>
            </form>
        </div>
    </body>
</html>