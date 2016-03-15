<?php require_once('database/connection.php'); ?>
<?php

?>
<html>
    <head>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
        <style>
            .login-container{
                width:350px;
                margin: auto 0;
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-md-12 " >
                <form class="form-group login-container" method="post" action="index.php">
                    <input type="text" name="username" class="form-control">
                    <input type="password" name="password" class="form-control">
                    
                </form>
            </div>
        </div>
    </body>
    
    <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</html>

