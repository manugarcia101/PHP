<div class="stickynav">
	<div class="form-inline my-2 my-lg-0">
		<input class="form-control" type="text" id="search_text" name="search_text" placeholder="Search" aria-label="Search" maxsize="40">
		&nbsp;&nbsp;
		<button class="btn btn-outline-success my-2 my-sm-2" type="submit" onClick="search()">Search</button>
	</div>
</div>

<main role="main">

    <section class="jumbotron text-center" style= "background-color: Tomato">
        <div class="container">
			<h1 class="jumbotron-heading"><font color="white">Activities current available in the web</h1>
            <p class="lead text-muted">You can add them to your profile or filter them by name in the web search</font></p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <?php 
				if (sizeof($activities) > 0) {
					echo "<br/>";
					echo "<div class='row'>";
					foreach ($activities as $row) {
						echo "<div class='col-md-4'>";
							echo "<div class='carb mb-4 box-shadow'>";
								echo "<img class='card-img-top' src='" . asset_url() . "images/activities/" . $row->image . "' alt='$row->name' width='300' height='300'>";
								echo "<div class='card-body'>";
									echo "<p class='card-text'> Name: $row->name </p>";
									echo "<p class='card-text'> Description: $row->brief </p>";
									echo "<p class='card-text'> Place: $row->place </p>";
									echo "<p class='card-text'> Date: $row->date </p>";
									echo "<p class='card-text'> Price: $row->price </p>";
									echo "<a id='button' class='btn btn-primary' href='#' onClick='addActivity(".$row->id.")' >Add to my activities</a>";
									if ($_SESSION['logged_in']['group'] == 1) {
										echo "<a id='button' class='btn btn-sm btn-danger' href='#' onClick='deleteActivity(".$row->id.")' >Delete from the system!</a>";
									}
								echo "</div>";
							echo "</div>";
						echo "</div>";
					}
					echo "</div>";
				} else {
					echo "<h2 align=center>More activities will be released soon by our administrators.</h2>";
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

	function addActivity($idActivity){
		$.ajax({
			type: 'POST',
			url: "<?php echo base_url() ?>index.php/activity/addActivity",
			data: {
				'idActivity': $idActivity,
			},
			success: function(result){
				$("#myContent").html(result);
				alert("It has been added to your list of activities in your profile.");
			},
			error: function(result){
				alert("You already have this activity.");
			}
		});
	};

	function deleteActivity($idActivity){
		$.ajax({
			type: 'POST',
			url: "<?php echo base_url() ?>index.php/activity/deleteActivity",
			data: {
				'idActivity': $idActivity,
			},
			success: function(result){
				$("#myContent").html(result);
				alert("The activity have been removed from the system.");
			}
		});
	};

	function search(){
		$.ajax({
			type: 'POST',
			url: "<?php echo base_url() ?>index.php/activity/searchActivity",
			data: {
				'text': $("#search_text").val(),
			},
			success: function(result){
				$("#myContent").html(result);
			}
		});
	};
</script>