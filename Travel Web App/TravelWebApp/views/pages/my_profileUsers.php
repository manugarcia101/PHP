<div class="stickynav">
    <form action="<?php echo base_url() ?>index.php/user/searchUser" class="form-inline my-2 my-lg-0" method="post">
        <input class="form-control mr-sm-2" type="text" id="search_text" name="search_text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-2" type="submit">Search</button>
    </form>
</div>

<main role="main">

    <section class="jumbotron text-center" style= "background-color: DodgerBlue">
        <div class="container">
            <h1 class="jumbotron-heading"><font color="white">Your Friends</h1>
            <p class="lead text-muted">In this section you will found the users related with this profile.</font></p>
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
                        echo "<img class='card-img-top' src='" . asset_url() . "images/users/" . $row->photo . "' alt='$row->name'>"; 
                        echo "<div class='card-body'>";
                            echo "<p class='card-text'> Name: $row->name </p>";
                            echo "<p class='card-text'> Surname: $row->surname </p>";
                            echo "<p class='card-text'> Age: $row->age </p>";
                            echo "<p class='card-text'> E-mail: $row->email </p>";
                            echo "<div class='d-flex justify-content-between align-items-center'>";
                                echo "<div class='btn-group'>";
                                echo "<a id='button' value='Delete' class='btn btn-sm btn-danger' href='" . base_url() . 'index.php/profile/deleteUser/' . $row->username . "' >Delete</a>";
                                echo "</div>";
                                echo "<small class='text-muted'>Username: $row->username </small>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
                }
                echo "</div>";
            } else {
                echo "<h2 align=center>Wow, you don´t have any friends, see if you know somebody in our Users section.</h2>";
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
</script>