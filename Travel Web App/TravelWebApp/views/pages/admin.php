<?php
	echo "Here we will find administration of the web page (Only for admins).";
?>

<script>
	$(document).ready(function(){
		$("#myButton").on('click', function(){
			$.ajax({
				type: 'POST',
				url: "<?php echo base_url()?>index.php/admin/addItem",
				data: {
					'nameitem': $("#nameitem").val(),
					'briefitem': $("#briefitem").val(),
					'imgitem': $("#imgitem").val(),
					'priceitem': $("#priceitem").val()
				},
				success: function(result){
					alert(result);
				},
				error: function(result, exception){
					alert(result);
				}
			});

				$("#nameitem").val("");
				$("#briefitem").val("");
				$("#imgitem").val("");
				$("#priceitem").val("");
			
			return false;
		});
		
	});

	$(document).ready(function(){
		$("#myButton2").on('click', function(){
			$.ajax({
				type: 'POST',
				url: "<?php echo base_url() ?>index.php/admin/addActivity",
				data: {
					'nameactivity': $("#nameactivity").val(),
					'briefactivity': $("#briefactivity").val(),
					'imgactivity': $("#imgactivity").val(),
					'priceactivity': $("#priceactivity").val(),
					'dateactivity': $("#dateactivity").val(),
					'placeactivity': $("#placeactivity").val()
				},
				success: function(result){
					alert(result);
				},
				error: function(result, exception){
					alert(result);
				}
			});

				$("#nameactivity").val("");
				$("#briefactivity").val("");
				$("#imgactivity").val("");
				$("#priceactivity").val("");
				$("#dateactivity").val("");
				$("#placeactivity").val("");
			
			return false;
		});
		
	});
</script>

<br><br>

<caption>Creation of a new element</caption>

<div class="table-responsive">
	<table class="table">

		<tr>

			<th>Creation of a new item</th>
				<tr>
					<td>Name of the item</td>
					<td><input id="nameitem" placeholder="Name" type="text" size="35" maxlength="40"> <span style="color:red;"> *Required field</span></td>
				</tr>		
				<tr>
					<td>Description of the item</td>
					<td><input id="briefitem" placeholder="Description" type="text" size="35" maxlength="140"></td>
				</tr>
				<tr>
					<td>Image of the item</td>
					<td><input id="imgitem" placeholder="Image" name="Select an Image" type="file" size="35" maxlength="80"></td>
				</tr>
				<tr>
					<td>Price of the item</td>
					<td><input id="priceitem" type="number" placeholder="Price" size="35" value=""> <span style="color:red;"> *Required field</span></td>
				</tr>
				<tr>
					<td><!--<button type="button" class="btn btn-primary" onclick="addNewItem(pepe,2,2,3)">Add</button>-->
						<input id="myButton" type="submit" class="btn btn-primary" value="Add"/>
					</td>
				</tr>
		</tr>

		<tr>

			<th>Creation of a new activity</th>

				<tr>
					<td>Name of the activity</td>
					<td><input id="nameactivity" placeholder="Name" type="text" size="35" maxlength="40"><span style="color:red;"> *Required field</span></td>
				</tr>		
				<tr>
					<td>Description of the activity</td>
					<td><input id="briefactivity" placeholder="Description" type="text" size="35" maxlength="140"></td>
				</tr>
				<tr>
					<td>Image of the activity</td>
					<td><input id="imgactivity" name="Select an image" placeholder="Image" type="file" size="35" maxlength="80"></td>
				</tr>
				<tr>
					<td>Price of the activity</td>
					<td><input id="priceactivity" type="number" placeholder="Price" size="35" value=""><span style="color:red;"> *Required field</span></td>
				</tr>
				<tr>
					<td>Date of the activity</td>
					<td><input id="dateactivity" placeholder="Date (yyyy-mm-dd)" type="text" size="35" maxlength="80"><span style="color:red;"> *Required field</span></td>
				</tr>
				<tr>
					<td>Place of the activity</td>
					<td><input id="placeactivity" placeholder="Starting place" type="text" type="text" size="35" maxlength="80"><span style="color:red;"> *Required field</span></td>
				</tr>
				<tr>
					<td><!--<button type="button" class="btn btn-primary" onclick="addNewActivity()">Add</button>-->
						<input id="myButton2" type="submit" class="btn btn-primary" value="Add"/>
					</td>
				</tr>

		</tr>

	</table>
</div>

