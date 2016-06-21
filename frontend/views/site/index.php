<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Test Page</h1>

        <p class="lead">Third Party API Test Page</p>


        <form id="myForm" class="container">
            <div class="form-group col-md-6 col-md-offset-3">
                <input class="form-control" name="app_id" placeholder="app_id">
            </div>

            <div class="form-group col-md-6 col-md-offset-3">
                <input class="form-control" name="app_secret" placeholder="app_secret">
            </div>

            <div class="form-group col-md-6 col-md-offset-3">
                <input class="form-control" name="imei" placeholder="imei">
            </div>
        </form>
        
        <p><button id="query" class="btn btn-lg btn-success">Test Third Party API</button></p>
    </div>

    <div class="alert alert-success">
        App Request: <span id="app-request"></span><br>
        Server Response: <span id="server-response"></span>
    </div>

</div>





<?php 
$script = <<< JS

$('#query').click(function(){
    var request={};
    $('#myForm').serializeArray().map(function(x){request[x.name] = x.value;});
    $('#app-request').html(JSON.stringify(request));

    $.post('http://localhost/advanced/admin/thirdparty/getphone', request)
    .done(function(data){
        var data=$.parseJSON(data);
        $('#server-response').html(JSON.stringify(data));
    })
    .fail(function(data){
        var data=$.parseJSON(data);
        $('#server-response').html(JSON.stringify(data));
    });
});

JS;
$this->registerJS($script);
?>