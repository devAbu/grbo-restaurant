<!DOCTYPE html>
<html><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="#" type="text/css" rel="stylesheet">
    <title>Create an account</title>
    <meta name="author" content="obada">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>

</head>

<body style="max-width:500px;border:2px solid black;">
    <center>
    <img src="images/logo.jpg" style="width:350px; height: 200px;"> <br> <br>
    
    <form action="datasignup.php" method="POST">
    <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name" autofocus="" required="required" style="width:350px;"> <br>
    <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name" autofocus="" required="required" style="width:350px;"> <br>
    
    <input type="email" name="email" id="email" class="form-control" placeholder=" Email" autofocus="" required="required" style="width:350px;">  <br>
    
    <input type="password" name="password" id="password" class="form-control" placeholder="Password" autofocus="" required="required" style="width:350px;"> <br>
    
    <input class="btn btn-primary" id="create" value="Sign up for free"  style="width:325px;">
	<div id="alert" class="alert"> </div>
    </form>
    </center>
	
	<script>
		$("#alert").slideUp();
		$("#create").click(function(){
			$("#alert").removeClass('alert-success').removeClass('alert-danger');	
			var firstName = $("#firstName").val();
			var lastName = $("#lastName").val();
			var email = $("#email").val();
			var password = $("#password").val();
			
			if (firstName  == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter your first name.');
				$("#alert").slideDown(500).delay(1000).slideUp(500);
			}else if(lastName == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter your last name.');
				$("#alert").slideDown(500).delay(1000).slideUp(500);
			}else if(email == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter your email address.');
				$("#alert").slideDown(500).delay(1000).slideUp(500);
			}else if(password == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter password.');
				$("#alert").slideDown(500).delay(1000).slideUp(500);
			}else{
				$.ajax({
			
					url: "./datasignup.php?task=register&firstName="+firstName+"&lastName="+lastName+"&email="+email+"&password="+password,
                    success: function (data) {
						if(data == 'NEW'){
							$("#alert").addClass('alert-success');
							$("#alert").html('<strong>'+data+'</strong> Account created.');
							$("#alert").slideDown(500).delay(1000).slideUp(500);
						}else{
							$("#alert").addClass('alert-danger');
							$("#alert").html('<strong>Error</strong>Username or Email already exists. Please try another one.');
							$("#alert").slideDown(500).delay(1000).slideUp(500);
						}
                    },
                    error: function (data, err) {
							$("#alert").addClass('alert-danger');
							$("#alert").html('<strong>Problem occured</strong> Please try later.');
							$("#alert").slideDown(500).delay(1000).slideUp(500);
					}
				});
			}
		});
	</script>

</body>
</html>