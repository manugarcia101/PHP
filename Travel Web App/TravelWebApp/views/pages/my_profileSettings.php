<main role="main">

    <section class="jumbotron text-center" style= "background-color: Orange">
        <div class="container">
            <h1 class="jumbotron-heading"><font color="white">Your Settings</h1>
            <p class="lead text-muted">You can edit your settings in this section.</font></p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
            <br/>
                <div class="col-md-4">
                    <div class="carb mb-4 box-shadow">
                        <img class="card-img-top" src="<?php echo asset_url() . 'images/users/' . $settings[0]->photo ?>">
                    </div>
                </div>

            <div class="settings">
                <h1>Setting options</h1>
                <br>
                Name:
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="<?php echo $settings[0]->name ?>">
                Surname:
                <input type="text" name="surname" id="surname" class="form-control" placeholder="Surname"  value="<?php echo $settings[0]->surname ?>">
                Age:
                <input type="number" name="age" id="age" class="form-control" placeholder="Age"  value="<?php echo $settings[0]->age ?>">
                Biography:
                <input type="text" name="bio" id="bio" class="form-control" placeholder="Biography" value="<?php echo $settings[0]->bio ?>">
                City:
                <input type="text" name="city" id="city" class="form-control" placeholder="City" value="<?php echo $settings[0]->city ?>">
                Photo:
                <input type="text" name="photo" id="photo" class="form-control" placeholder="Photo" value="<?php echo $settings[0]->photo ?>">
                Background photo:
                <input type="text" name="brackground" id="background" class="form-control" placeholder="Background"  value="<?php echo $settings[0]->background ?>"><br>
				<button class="btn btn-lg btn-primary btn-block" type="submit" onClick="changeSettings()">Save</button>
            </div>
            
        </div>
        </div>
    </div>


</main>

<script>
    function changeSettings(){
        $.ajax({
                type: 'POST',
                url: "<?php echo base_url()?>index.php/profile/changeSettings",
                data: {
                    'name': $("#name").val(),
                    'surname': $("#surname").val(),
                    'age': $("#age").val(),
                    'bio': $("#bio").val(),
                    'city': $("#city").val(),
                    'photo': $("#photo").val(),
                    'background': $("#background").val()
                },
                success: function(result){
                    $("#myContent").html(result);
                    alert("Data user changed successfully.");
                }
            });
            
            return false;
    }
    
</script>