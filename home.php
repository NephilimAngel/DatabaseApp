<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>

<div class="content">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <a class="navbar-brand" href="#">User Details</a>
    </nav>
  
    <div class="row">
        <div class="col-md-offset-4 col-md-4 form">
            <legend>Enter User Info</legend>
          
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="fname" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="">Father's Name</label>
                <input type="password" class="form-control" id="lname" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="email" placeholder="someone@example.com">
            </div>
             <div class="form-group">
                <label for="">State</label>
                <input type="text" class="form-control" id="state" placeholder="Your current State">
            </div>
             <div class="form-group">
                <label for="">Country</label>
                <input type="text" class="form-control" id="country" placeholder="Your current Country">
            </div>
            <button class="btn btn-primary" id="submit">Submit</button>
        </div>
    </div>

    <br>

    <div class="row">
        
        <div class="col-md-offset-4 col-md-4 alert text-center" id="msg">
            <p></p>
        </div>

    </div>

    <br>

    <div class="col-md-offset-4 col-md-4 alert text-center" id="output">
    	

    </div>

</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/getset.js"></script>
</body>
</html>