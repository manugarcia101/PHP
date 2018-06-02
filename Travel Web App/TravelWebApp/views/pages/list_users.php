<div class="stickynav">
	<div class="form-inline my-2 my-lg-0">
		<input class="form-control" type="text" id="search_text" name="search_text" placeholder="Search" aria-label="Search" maxsize="40">
		&nbsp;&nbsp;
		<button class="btn btn-outline-success my-2 my-sm-2" type="submit" onClick="search()">Search</button>
	</div>
</div>

<main role="main">

    <section class="jumbotron text-center" style= "background-color: DodgerBlue">
        <div class="container">
			<h1 class="jumbotron-heading"><font color="white">Users current available in the web</h1>
            <p class="lead text-muted">You can add them to your profile or filter them by name in the web search</font></p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <?php 
				if (sizeof($users) > 0) {
					echo "<br/>";
					echo "<div class='row'>";
					foreach ($users as $row) {
						echo "<div class='col-md-4'>";
							echo "<div class='carb mb-4 box-shadow'>";
								echo "<img class='card-img-top' src='" . asset_url() . "images/users/" . $row->photo . "' width='300' height='300'>";
								echo "<div class='card-body'>";
									echo "<p class='card-text'> Username: $row->username </p>";
									echo "<p class='card-text'> Email: $row->email </p>";
									echo "<a id='button' align:'center' class='btn btn-primary' href='#' onClick='addUser(\"$row->username\")' >Add to my friends</a>";
								echo "</div>";
							echo "</div>";
						echo "</div>";
					}
					echo "</div>";
				} else {
					echo "<h3 align=center>Wow, you add all the users as your friends. Try to send them a message and apply for an activity!</h3>";
				}
				?>
            </div>
        </div>
    </div>

</main>

<script>
	$(document).ready(function(){
		$(".col-md-4").hover(function(){
			$(this).children(".carb.mb-4.box-shadow").toggleClass('shadow');
		});
	});

	function addUser($username){

		$.ajax({
			type: 'POST',
			url: "<?php echo base_url() ?>index.php/user/addUser",
			data: {
				'username': $username,
			},
			success: function(result){
				$("#myContent").html(result);
				alert("It has been added to your list of friends in your profile.");
			},
			error: function(result){
				alert("You already have this friend.");
			}
		});

	};

	function search(){
		$.ajax({
			type: 'POST',
			url: "<?php echo base_url() ?>index.php/user/searchUser",
			data: {
				'text': $("#search_text").val(),
			},
			success: function(result){
				$("#myContent").html(result);
			}
		});
	};
</script>