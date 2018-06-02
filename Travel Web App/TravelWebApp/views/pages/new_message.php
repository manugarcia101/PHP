

<h3>  New message </h3>

<br>

<div  class="container" align="center">
    <div  class="row">
        <div class="col-md-12 col-sm-16 pull-right posttimeline">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="status-upload nopaddingbtm">
						<input type="text" id="receiver" class="form-control" placeholder="Receiver" maxlength="50"><br>
						<input type="text" id="title" class="form-control" placeholder="Title" maxlength="50"><br>
                        <textarea type="text" id="textContent" class="form-control" placeholder="Message content" maxlength="1000"></textarea>
                        <br>
                        <button type="submit" class="btn btn-primary pull-right" onClick="send()">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    function send(){

        $.ajax({
            type: 'POST',
            url: "<?php echo base_url() ?>index.php/message/addMessage",
            data: {
                'receiver': $("#receiver").val(),
                'title': $("#title").val(),
                'content': $("#textContent").val(),
            },
            success: function(result){
                alert(result);
            }
        });

        $("#receiver").val("");
        $("#title").val("");
        $("#textContent").val("");
        
    };

</script>