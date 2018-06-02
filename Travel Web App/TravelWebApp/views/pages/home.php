<div class="parallax">

</div>

<div class="homebox">
	<div class="row">
		<div class="column">
		<img src=<?php echo asset_url() . 'images/activities/hikingWinter.jpg' ?> border="1" width=500 heigth=500>
		</div>
		<div class="columntext">
		<h2> Activities more requested </h2>
		</br>
		<p><em>Winter Hiking</em></p>
		<p>Not everyone is allowed to do such a hiking in the middle of the nordic winter. 
		When temperatures go below -15ºC, snow reaches 2 meters high, and there is no internet, 
		no electricity and no fluent water. You feel really in the nature. Are brave enough to do this?</p>
		</br>
		<p>Skuleskogen (Sweden)</p>
		</br>
		<button class="btn btn-primary" onClick="show_activities()" >See more activities</button>
		</div>
	</div>
	<div class="row">
		<div class="columntext">
		<h2> Items more bought </h2>
		</br>
		<p><em>Spanish bull</em></p>
		<p>Little ceramic figure of the tipical spanish icon</p>
		</br>
		<button class="btn btn-primary" onClick="show_items()" >See more items</button>
		</div>
		<div class="column">
		<img src=<?php echo asset_url() . 'images/items/sp1.jpg' ?> border="1" width=500 heigth=500>
		</div>
	</div>
</div>

<script>

	function show_activities(){

		$.ajax({
			url: "<?php echo base_url() ?>index.php/activity/list_activities/content",
			success: function(result){
				$("#myContent").html(result);
			}
		});
		
		return false;
	}

	function show_items(){

		$.ajax({
			url: "<?php echo base_url() ?>index.php/item/list_items/content",
			success: function(result){
				$("#myContent").html(result);
			}
		});
		
		return false;
	}

	function show_users(){

		$.ajax({
			url: "<?php echo base_url() ?>index.php/user/list_users/content",
			success: function(result){
				$("#myContent").html(result);
			}
		});
		
		return false;
	}

</script>