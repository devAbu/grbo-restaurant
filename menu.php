<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>documnet</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">    
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>

    <script>
    function cijena(){

        var izbor = document.getElementById("foodNum").value;
        var kolicina = document.getElementById("foodQuantity").value;
       
        
         if(izbor ==1){
            var cijena = 5 * kolicina;
            document.getElementById("foodPrice").value = cijena;
        } else if(izbor == 2){
            var cijena = 7.5 * kolicina;
            document.getElementById("foodPrice").value = cijena;
        } else if(izbor == 3){
            var cijena = 6 * kolicina;
            document.getElementById("foodPrice").value = cijena;
        } else if(izbor == 4){
            var cijena = 10 * kolicina;
            document.getElementById("foodPrice").value = cijena;
        } else if(izbor ==5){
            var cijena = 7 * kolicina;
            document.getElementById("foodPrice").value = cijena;
        } else if(izbor ==6){
            var cijena = 5 * kolicina;
            document.getElementById("foodPrice").value = cijena;
        } else if(izbor ==7){
            var cijena = 10 * kolicina;
            document.getElementById("foodPrice").value = cijena;
        } else if(izbor ==8){
            var cijena = 25 * kolicina;
            document.getElementById("foodPrice").value = cijena;
        } 
       
                
    }
    
    function cijena2(){

        var izbor = document.getElementById("drinkNum").value;
        var kolicina = document.getElementById("drinkQuantity").value;
       
        
         if(izbor ==1){
            var cijena = 3 * kolicina;
            document.getElementById("drinkPrice").value = cijena;
        } else if(izbor == 2){
            var cijena = 4.5 * kolicina;
            document.getElementById("drinkPrice").value = cijena;
        } else if(izbor == 3){
            var cijena = 2.5 * kolicina;
            document.getElementById("drinkPrice").value = cijena;
        } else if(izbor == 4){
            var cijena = 10 * kolicina;
            document.getElementById("drinkPrice").value = cijena;
        } else if(izbor ==5){
            var cijena = 5 * kolicina;
            document.getElementById("drinkPrice").value = cijena;
        } else if(izbor ==6){
            var cijena = 15 * kolicina;
            document.getElementById("drinkPrice").value = cijena;
        } else if(izbor ==7){
            var cijena = 10 * kolicina;
            document.getElementById("drinkPrice").value = cijena;
        } else if(izbor ==8){
            var cijena = 9.5 * kolicina;
            document.getElementById("drinkPrice").value = cijena;
        } 
       
                
    }
    </script>
        
</head>

<body style="background-color:rgb(173, 118, 73);">

        <header style="margin-bottom:20px;">
                <img src="images/logo.jpg" alt="logo">
                <a href="index.html"><input type="button" value="Home" class="btn btn-primary" style="margin-top:-180px;"></a>
                <a href="menu.php"><input type="button" value="Menu" class="btn btn-primary" style="margin-top:-180px;"></a>
                <a href="contact.html"><input type="button" value="Contact & Place" class="btn btn-primary" style="margin-top:-180px;"></a>
                <a href="feedback.php"><input type="button" value="Feedback" class="btn btn-primary" style="margin-top:-180px;"></a>
                <a href="signup.php"><input type="button" value="Sign up for free" class="btn btn-primary" style="float:right;margin-right:30px;margin-top:3px;"></a>
        <a href="log.php"><input type="button" value="Login" class="btn btn-primary" style="float:right;margin-right:30px;margin-top:3px;"></a>
            </header>
         
        
    <img src="images/bg.jpg" alt="res" style="width:350px; height:500px;">
            <h1 style="text-align:center; margin-top:-650px;margin-bottom:100px;">MENU & RESERVATIONS</h1>
           <form><!-- action="dataMenu.php" method="POST"-->
               
            <img src="images/clock.jpg" alt="clock" style="width:200px; height:150px;margin-left:400px;">
            
            <input type="date" name="dateVisit" id="dateVisit">
            
            <input type="time" name="timeVisit" id="timeVisit">
            
            <img src="images/food.jpg" alt="HRANA" style="margin-left:400px; width:200px; height:150px;margin-top:30px;">
    
        
    <select style="position:absolute;margin-top:30px;width:175px;">
        <option></option>
        <option>HRANA 1</option>
        <option>HRANA 2</option>
        <option>HRANA 3</option>
        <option>HRANA 4</option>
        <option>HRANA 5</option>
        <option>HRANA 6</option>
        <option>HRANA 7</option>
        <option>HRANA 8</option>
    </select>
    
        
    <input type="number" placeholder="Odaberi hranu" id="foodNum" name="foodNum">
    <input type="number" placeholder="KOLICINA" id="foodQuantity" onchange="cijena()" name="foodQuantity">
    
    <input type="number" placeholder="CIJENA" readonly min="0" id="foodPrice" name="foodPrice">
    <br><br>
    <img src="images/drinks.jpeg" alt="PICE" style="width:200px; height:150px; margin-left:400px;">
    <select style="position:absolute;width:175px;">
        <option></option>
        <option>PICE 1</option>
        <option>PICE 2</option>
        <option>PICE 3</option>
        <option>PICE 4</option>
        <option>PICE 5</option>
        <option>PICE 6</option>
        <option>PICE 7</option>
        <option>PICE 8</option>
    </select>
    <input type="text" placeholder="Odaberi pice" id="drinkNum" name="drinkNum">
    <input type="number" placeholder="KOLICINA" id="drinkQuantity" onchange="cijena2();" name="drinkQuantity">
    
    <input type="number" placeholder="CIJENA" readonly id="drinkPrice" name="drinkPrice">
    <br><br>
    <img src="images/card.jpg" alt="card" style="width:350px; height:200px;margin-bottom:-220px;">
    <input type="text" placeholder="Enter your name" id="fullName" name="fullName" style="margin-left:510px;width:350px;" class="form-control">
    <input id="unesi" value="SUBMIT" name="unseri" style="margin-left:910px;color:white;border:2px solid white;" class="btn btn-outline-info btn-lg" >
    <div id="poruka" class="alert"> </div>
	<input type="text" placeholder="CARD NUMBER" name="cardNum" id="cardNum" style="margin-left:510px;width:350px;" class="form-control" >
    </form>

	<script>
		$("#poruka").slideUp();
		$("#unesi").click(function(){
			$("#poruka").removeClass('alert-success').removeClass('alert-danger');	
			var dateVisit = $("#dateVisit").val();
			var timeVisit = $("#timeVisit").val();
			var foodNum = $("#foodNum").val();
			var foodQuantity = $("#foodQuantity").val();
			var foodPrice = $("#foodPrice").val();
			var drinkNum = $("#drinkNum").val();
			var drinkQuantity = $("#drinkQuantity").val();
			var drinkPrice = $("#drinkPrice").val();
			var fullName = $("#fullName").val();
			var cardNum = $("#cardNum").val();

			if (dateVisit  == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please enter date visit.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else if(timeVisit == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please enter time visit.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else if(foodNum == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please choose food.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else if(foodQuantity == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please enter quantity.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else if(drinkNum == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please choose drink.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else if(drinkQuantity == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please enter drink Quantity.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else if(fullName == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please enter your name.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else if(cardNum ==""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please enter your card number.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else{
				$.ajax({
			
					url: "./dataMenu.php?task=serve&dateVisit="+dateVisit+"&timeVisit="+timeVisit+"&foodNum="+foodNum+"&foodQuantity="+foodQuantity+"&foodPrice="+foodPrice+"&drinkNum="+drinkNum+"&drinkQuantity="+drinkQuantity+"&drinkPrice="+drinkPrice+"&fullName="+fullName+"&cardNum="+cardNum,
                    success: function (data) {
						if(data == 'SERVE'){
							$("#poruka").addClass('alert-success');
							$("#poruka").html('<strong>'+data+'</strong> Serve finished.');
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