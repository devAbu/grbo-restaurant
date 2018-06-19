<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">    
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
    
</head>
<body style="background-color:rgb(199, 253, 247);">
        <header>
                <img src="images/logo.jpg" alt="logo">
                <a href="index.html"><input type="button" value="Home" class="btn btn-primary" style="margin-top:-180px;"></a>
                <a href="menu.php"><input type="button" value="Menu" class="btn btn-primary" style="margin-top:-180px;"></a>
                <a href="contact.html"><input type="button" value="Contact & Place" class="btn btn-primary" style="margin-top:-180px;"></a>
                <a href="feedback.php"><input type="button" value="Feedback" class="btn btn-primary" style="margin-top:-180px;"></a>
                <a href="signup.php"><input type="button" value="Sign up for free" class="btn btn-primary" style="float:right;margin-right:30px;margin-top:3px;"></a>
        <a href="log.php"><input type="button" value="Login" class="btn btn-primary" style="float:right;margin-right:30px;margin-top:3px;"></a>
            </header>
    <h1 style="margin-left:550px;margin-top:-150px;margin-bottom:80px;">FEEDBACK</h1>
    <label style="margin-left:550px; margin-bottom:30px;">ENTER YOUR OPINION:</label> <br>
    <form> <!-- action = "datafeedback.php" method = "POST"-->
    <textarea cols="65px;" rows="20px;" name="opinion" id="opinion" style="margin-left:400px;background-color:rgb(245, 245, 245);">
    </textarea>
<br>
    <input value="SUBMIT" name="unsei" id="unesi" class="btn btn-outline-dark btn-lg" style="margin-left:460px; width:350px;"> 
	<div id="poruka" class="alert"> </div>
    </form>
	
	<script>
		$("#poruka").slideUp();
		$("#unesi").click(function(){
			$("#poruka").removeClass('alert-success').removeClass('alert-danger');	
			var opinion = $("#opinion").val();

			if (opinion  == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please enter date visit.');
				$("#poruka").slideDown(500);
			}else{
				$.ajax({
			
					url: "./datafeedback.php?task=feed&opinion="+opinion,
                    success: function (data) {
						if(data.indexOf("feed") !== -1){
							$("#poruka").addClass('alert-success');
							$("#poruka").html('<strong>'+data+'</strong>Thanks.');
							$("#poruka").slideDown(500).delay(1000).slideUp(500);
						}else{
							$("#poruka").addClass('alert-danger');
							$("#poruka").html('<strong>Error</strong>Please try again.');
							$("#poruka").slideDown(500).delay(1000).slideUp(500);
						}
                    },
                    error: function (data, err) {
							$("#poruka").addClass('alert-danger');
							$("#poruka").html('<strong>Problem occured</strong> Please try later.');
							$("#poruka").slideDown(500).delay(1000).slideUp(500);
					}
				});
			}
		});
	</script>

	
</body>
</html>