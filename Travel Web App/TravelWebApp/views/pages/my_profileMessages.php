<div class="stickynav">
    <form action="<?php echo base_url() ?>index.php/profile/searchMessage" class="form-inline my-2 my-lg-0" method="post">
        <input class="form-control mr-sm-2" type="text" id="search_text" name="search_text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-2" type="submit">Search</button>
    </form>
</div>

<main role="main">

    <section class="jumbotron text-center" style= "background-color: SlateBlue">
        <div class="container">
            <h1 class="jumbotron-heading"><font color="white">Your Messages</h1>
            <p class="lead text-muted">In this section you will found the messages sent to your profile.</font></p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <?php 
            if (sizeof($messages) > 0) {
                echo "<br/>";
                echo "<div class='row'>";
                foreach ($messages as $row) {
                    echo "<div class='col-md-4'>";
                    echo "<div class='carb mb-4 box-shadow'>";
                    echo "<div class='card-body'>";
                    echo "<p class='card-text'> Title: $row->title</p>";
                    echo "<p class='card-text'> Date: $row->date</p>";
                    echo "<p class='card-text'> Message:  $row->content</p>";
                    echo "<div class='d-flex justify-content-between align-items-center'>";
                    echo "<div class='btn-group'>";
                    echo "<a id='button' value='Delete' class='btn btn-sm btn-danger' href='" . base_url() . 'index.php/profile/deleteMessage/' . $row->id . "' >Delete</a>";
                    echo "</div>";
                    echo "<small class='text-muted'>Sender: $row->sender </small>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                echo "</div>";
            } else {
                echo "<h2 align=center>Wow, you didn´t receive any message, start sending messages to you friends and meet up to do some activities together!</h2>";
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