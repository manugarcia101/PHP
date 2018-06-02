<section id="intro" class="intro" style= "background-image: url('<?php echo asset_url() . 'images/default/' . $info[0]->background ?>');">
    <div id="intro2" class="intro2">
        <div class="col-md-6 px-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="fb-profile">
                        <img align="center" class="fb-image-profile thumbnail" src="<?php echo asset_url() . 'images/users/' . $info[0]->photo ?>" alt="Profile image" width="100" height="100"/>
                            <button class="btn btn-success pull-right" onClick="settings()"> Edit </button>
                        <div class="fb-profile-text">
                            <h1><?php echo $info[0]->username ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
  <div class="col-sm-12">
      <div data-spy="scroll" class="tabbable-panel">
        <div class="tabbable-line">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    </li>
                    </ul>
                </div>
            </nav>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_default_1">
                    <table>
                        <tr>
							<?php 
								if(!empty($info[0]->bio)){
									echo "<h2>Biography</h2>";
									echo $info[0]->bio;
									echo "<br>";
									echo "<br>";
								};
							?>
                        </tr>
                        <tr>
							<?php 
								if(!empty($info[0]->city)){
									echo "<h2>Living in</h2>";
									echo $info[0]->city;
									echo "<br>";
									echo "<br>";
								};
							?>
                        </tr>
                        <tr>
                            <h2>Contact </h2>
                            <p> <?php echo $info[0]->email ?>
                            </p>
                        </tr>
                    </table>
                </div>       
            </div>
    </div>
</div>

<br>

