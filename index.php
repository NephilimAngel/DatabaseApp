<!DOCTYPE html>
<html>
<head>
  <title>Setup Database</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>

<div class="content">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <a class="navbar-brand" href="#">Database Project Setup</a>
    </nav>
  
    <div class="row">
        <div class="col-md-offset-4 col-md-4 form">
            <legend>Setup Your Database</legend>
          
            <div class="form-group">
                <label for="">MySQL User</label>
                <input type="text" class="form-control" id="user" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="">MySQL Password</label>
                <input type="password" class="form-control" id="pass" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="">Connection Url</label>
                <input type="text" class="form-control" id="connStr" placeholder="http://">
            </div>
            <div class="form-group">
                <label for="">DB Name</label>
                <input type="text" class="form-control" id="dbName" placeholder="Database">
            </div>
            
            <button class="btn btn-primary" id="test">Test</button>
            <button class="btn btn-primary pull-right" id="conn">Connect</button>
        </div>
    </div>

    <br>

    <div class="row">
        
        <div class="col-md-offset-4 col-md-4 alert text-center" id="msg">
            <p></p>
        </div>

    </div>

</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/connect.js"></script>
</body>
</html>