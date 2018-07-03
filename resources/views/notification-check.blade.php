<!DOCTYPE html>
<html>
<head>
    <title>Check For Notification toastr</title>
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
</head>
<body>

@include('notification')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Notification</div>
                <div class="panel-body">
				
                <h3>    Check for notification  </h3>
					<br> <br>
					<button type="button" class="btn btn-success" id="s">SUCCESS</button>
					<br> <br>
					<button type="button" class="btn btn-danger" id="e">ERROR</button>
					<br> <br>
					<button type="button" class="btn btn-warning" id="w">WARNING</button>
					<br> <br>
					<button type="button" class="btn btn-info" id ="i">INFO</button>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>