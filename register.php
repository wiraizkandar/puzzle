<?php require_once('database/connection.php'); ?>
<?php

?>
<html>
    <head>
        <?php include 'component/css.php';?>
        <style>
            .instruction{
                    padding: 10px;
    /* border-left: solid 3px #CABF42; */
    border: solid 1px #E6E6E6;
    border-left: solid 5px #437EC7;
    margin-bottom: 40px;
            }
            
            .main-box{
                
                padding: 50px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid main-box" >
            <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                      <div class="instruction">
                            <h4 style="color:#437EC7">Registration</h4>
                            <p> Fill in the “username” field with either a real or imaginary name. Then, make up password that
                                you will remember, and fill it in the appropriate box. if you forget your password at any time,
                                you will be promoted for your name and mother’s name.Enter it below. You will be playing in
                                on time.
                            </p>
                      </div>
                    <form class="form-horizontal">
                        
                        <hr>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label" style="text-align:left;">Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label" style="text-align:left;">Mother's Name<br><span style="font-size:12px;font-weight: light;"><small>(Security Name)</small><span></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="mother's name">
                          </div>
                        </div>
                      <div class="form-group">
                          <label for="inputPassword3" class="col-sm-3 control-label" style="text-align:left;">Username</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="username">
                            <div style="margin-top:5px;"><small ><i class="fa fa-info-circle"></i> At least 5 characters</small></div>
                          </div>
                        </div>
                          <div class="form-group">
                          <label for="inputPassword3" class="col-sm-3 control-label" style="text-align:left;">Password</label>
                          <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            <div style="margin-top:5px;"><small ><i class="fa fa-info-circle"></i> At least 4 digit and start with alphabet</small></div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-3 control-label" style="text-align:left;">Confirm Password</label>
                          <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Confirm Password">
                          </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="col-sm-offset-9 col-sm-3 pull-right" style="text-align:right;">
                              <a type="button" href="index.php" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
</form> 
                  </div>
            </div>
        </div>
        
       
     
    </body>
    <?php include 'component/javascript.php';?>
    
</html>

