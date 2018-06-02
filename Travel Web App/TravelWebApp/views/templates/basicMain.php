<!DOCTYPE html>
<html>
	<head>
		<title>Travel Web App</title>
		
		<link rel="stylesheet" href="<?php echo asset_url().'css/bootstrap.min.css'?>">
		
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Vollkorn">
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<link rel="icon" href="<?php echo asset_url() . 'images/default/icon.png' ?>">
	</head>
	
</html>
<style>
body, html {
    height: 100%;
    margin: 0;

	 /* The image used */
    background-image: url("<?php echo asset_url()?>images/default/selva.gif"); 

	    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: repeat-x;
    background-size: cover;
	background-attachment:fixed;
	
	display: block;
	position: relative;

	-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.bg {
   
	
    /* Full height */
    height: 100%; 
	width: ?px;
    margin:0;
	/*background-size: 100% 100%;*/
	
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: repeat-x;
    background-size: cover;
	background-attachment:fixed;
	
	display: block;
	position: relative;

	-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

#myTable {
    font-size: 8pt;
    font-family: tahoma;
    margin-top: 1px;
    margin-right: 30px;
    position:absolute;
    top:0;
    right:0;
}

.parent{
	padding-right:50px;
}

.signIn, .signUp {
	height: 5%;
    width: 5%;
    float: right;
}

.signIn{
	margin-right: 50px;
	margin-left: 50px;
}

.floatClear {
    clear: both;
}

</style>
<body class="text-center">

<script>
	function signin(){
		$.ajax({
			url: "<?php echo base_url() ?>index.php/user/login/content",
			success: function(result){
				$("#myContent").html(result);
			}
		});
		
		return false;
	}
	
	function signup(){
		$.ajax({
			url: "<?php echo base_url() ?>index.php/user/register/content",
			success: function(result){
				$("#myContent").html(result);
			}
		});
		
		return false;
	}
</script>

<div class="bg">

<!-- Begin page content -->
<div class="container1">
<div class="page-header">
<font face="Vollkorn" size=10px><b>Travel Web App</b></font>
</div>

<div class="parent">
	<div class="signIn">
		<button id="signin" type="button" class="btn btn-primary" onClick="signin()">Sign in</button>
	</div>
	<div class="signUp">
		<button id="signup" type="button" class="btn btn-primary" onClick="signup()">Sign up</button>
	</div>
</div>

<br>
<p>This is a Web based Application where you can apply for activities of every kind and buy items to be prepared for the action. </p>
<p>Also contact with friends and do activities together meanwhile your holidays.</p>
<br>

<div id="myContent"><?=$content?></div>

</div>

<!-- End page content -->
<footer class="footer">
<div class="container">
<hr>
<p class="text-muted">&copy; 2017-2018</p>
<p class="text-muted">Web Based Technologies - University of Jaén - 2018.</p>
</div>
</footer>

</div>

</body>
</html>