<?php require_once('database/connection.php'); ?>
<?php

?>
<html>
    <head>
        <?php include 'component/css.php';?>
        
        <style>
            .login-container{
                max-width: 450px;
                margin: auto;
                padding: 20px;
                padding-bottom:0px;
                margin-top: 150px;
                border:solid 1px #D0CBCB;
                background-color:#fff;
            }
        </style>
    </head>
    <body>
        
            <div class="login-container" style="">
                <div style="text-align:center;padding:10px;"><h3>LOGIN</h3></div>
            <form class="form-horizontal">
                <div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> Please key in correct username and password</div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label" style="text-align:left;">Username</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label" style="text-align:left;">Password</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-Primary">Login</button>
                  </div>
                </div>
                <div style="margin-top: 40px;">
                    <span><a href="forgot.php">Forgot Password</a></span>
                    <span style="float:right;"><a href="register.php">Register Now</a></span>
                </div>
              </form>
                </div>
     
    </body>
    <?php include 'component/javascript.php';?>
    
</html>

