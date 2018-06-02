<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="author:AlejandroUreñaMarin&ManuelGarciaLopez" content="FirstWebApp">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Travel Web App</title>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>  
		<link rel="stylesheet" href="<?php echo asset_url() . 'css/bootstrap.min.css' ?>">
		<script rel="stylesheet" href="<?php echo asset_url() . 'js/bootstrap.min.js' ?>"></script>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="icon" href="<?php echo asset_url() . 'images/default/icon.png' ?>">
	</head>
</html>
<style>
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("");

    /* Full height */
    height: 100%; 
	width: ?px;
    margin:0;
	
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: repeat-x;
    background-size: cover;
	background-attachment:fixed;
	
	display: block;
	height: auto;
	position: relative;
}

#myTable {
    font-size: 8pt;
    font-family: tahoma;
    margin-top: 0%;
    margin-right: 15%;
    position:absolute;
    top:0;
    right:0;
	width:300px;
}

.intro {
    width: 100%;
    position: relative;
    margin-right: 1%;
    margin-left: 1%;
    margin-bottom: 1%;
    margin-top: 1%;
}

.intro2{
    width: 90%;
    position: relative;
    margin-right: 5%;
    margin-left: 5%;
    margin-bottom: 5%;
    margin-top: 5%;
}

.settings {
    position: relative;
	width: 40%;
	margin-right: 10%;
    margin-left: 10%;
    margin-bottom: 5%;
    margin-top: 5%;

}

.sticky{
	position: fixed;
	overflow: hidden;
  	background-color: #333B3D;
  	top: 0;
  	width: 100%;
	display: flex;
	z-index: 180;
	clear: both;
    -webkit-font-smoothing: subpixel-antialiased;
	margin-right:50%;
}

.sticky_profile{
	position: fixed;
	overflow: hidden;
  	background-color: rgb(248, 249, 250);
  	top: 56px;
  	width: 1110px;
	float: center;
	display: flex;
	z-index: 180;
	clear: both;
    -webkit-font-smoothing: subpixel-antialiased;
	margin-right:50%;
}

.stickynav{
	position: fixed;
  	top: 0;
	margin-left:50%;
	margin-right
	left:18em;
  	width: 100%;
	display: flex;
	z-index: 180;
	clear: both;
    -webkit-font-smoothing: subpixel-antialiased;
}

.content {
  	padding-top: 60px;
	box-sizing: border-box;
    overflow: hidden;
	display: block;
}

* {
    -webkit-tap-highlight-color: transparent;
}

::-webkit-scrollbar {
    width: 10px;
}
 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,1); 
    -webkit-border-radius: 10px;
    border-radius: 10px;
}
 
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: #BDBDBD; 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,1,1); 
}
::-webkit-scrollbar-thumb:hover {
    background: #555; 
}

.shadow{
	box-shadow: 3px 3px 4px #000;
}

.homebox{
	width: 100%;
	margin: 10% auto 0;
	box-sizing: border-box;
	display: table;
	background: white;
}

.row{
	margin: 2% 0;
}

.column{
	display: table-cell;
	padding: 2%;
	width: 50%;
}

.columntext{
	display: table-cell;
	padding: 2%;
	padding-top: 3%;
	width: 50%;
	text-align: justify;
	background: white;
	color: black;
	vertical-align: middle;
}

.parallax{
	/* The image used */
    background-image: url("<?php echo asset_url() ?>images/default/test.jpg"); 

    /* Set a specific height */
    min-height: 400px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
	top: 0;
}

</style>
<body>

<script>
	$(document).ready(function(){
		$("li .nav-link").on('click', function(){
			
			$.ajax({
				url: "<?php echo base_url() ?>index.php/" + $(this).attr('id'),
				success: function(result){
					$("#myContent").html(result);
				}
			});
			
			return false;
		});
	});
	
	function myInfo(){
		$.ajax({
			url: "<?php echo base_url() ?>index.php/profile/my_profileInfo/content",
			success: function(result){
				$("#myContent").html(result);
			}
		});
		return false;
	};
	
	function myItems(){
		$.ajax({
			url: "<?php echo base_url() ?>index.php/profile/my_profileItems/content",
			success: function(result){
				$("#myContent").html(result);
			}
		});
		return false;
	};
	
	function myActivities(){
		$.ajax({
			url: "<?php echo base_url() ?>index.php/profile/my_profileActivities/content",
			success: function(result){
				$("#myContent").html(result);
			}
		});
		return false;
	};
	
	function myFriends(){
		$.ajax({
			url: "<?php echo base_url() ?>index.php/profile/my_profileUsers/content",
			success: function(result){
				$("#myContent").html(result);
			}
		});
		return false;
	};
	
	function myMessages(){
		$.ajax({
			url: "<?php echo base_url() ?>index.php/profile/my_profileMessages/content",
			success: function(result){
				$("#myContent").html(result);
			}
		});
		return false;
	};
	
	function settings(){
		$.ajax({
			url: "<?php echo base_url() ?>index.php/profile/my_profileSettings/content",
			success: function(result){
				$("#myContent").html(result);
			}
		});
		return false;
	};
	
</script>

<div class="bg">

<!-- Begin page content -->
<header class="sticky">
	<nav class="navbar navbar-expand navbar-dark bg-dark">
		<ul class="navbar-nav ">
			<li class="nav-item active">
			<a class="nav-link" id="home/index/content" href="#">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="activity/list_activities/content" href="#">Activities</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="item/list_items/content" href="#">Items</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="user/list_users/content" href="#">Users</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="message/new_message/content" href="#"> New Message</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="profile/my_profileInfo/content" href="#">My Profile</a>
			</li>     
			<?php 
			$group = $_SESSION['logged_in']['group'];
			if($group == 1){
				echo '
				<li class="nav-item">
				<a class="nav-link" id="admin/index/content" href="#">Admin</a>
				</li>';
			}
			?>
			<a class="nav-link" id="logout" href="<?php echo base_url() ?>index.php/user/logout">Logout</a>
		</ul>
	</nav>
</header>

<div class="container">

	<div id="myContent" class="content"><?= $content ?></div>

</div>
<!-- End page content -->
<footer class="footer" align="center">
<div class="container">

<hr>
<p class="text-muted">&copy; 2017-2018</p>
<p class="text-muted">Web Based Technologies - University of Jaén - 2018.</p>
</div>
</footer>



</body>
</div>
</html>