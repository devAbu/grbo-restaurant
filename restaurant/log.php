<!DOCTYPE html>
<html><head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="#" type="text/css" rel="stylesheet">
        <link rel="shortcut icon" href="images/icon.ico">
        <meta name="author" content="obada">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        
    </head>
    
    <body style="max-width:500px;border:2px solid black;">
        <center>
            <img src="images/logo.jpg" style="width:350px; height: 200px;"> <br> <br>
            <form action="datalogin.php" method="POST">
            <input type="email" name="email" placeholder="Email" class="form-control" style="max-width:350px;"> <br>
            <input type="password" name="password" placeholder="Password" id="pass" class="form-control" style="max-width:360px;"> 
            
            <br>
            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0" style="margin-left:0px;">
            <input type="checkbox" class="custom-control-input" checked>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Remember my login</span>
        </label>
        
        <a href="#"> <label style="padding-left:95px; color:red;">Forgot password? </label></a>
        <br> <br>
        <input type="Submit" value="Login" name="insert" class="btn btn-primary" style="width:150px;">
        <br>
        
        </form>
        </center>
   
</body
></html>