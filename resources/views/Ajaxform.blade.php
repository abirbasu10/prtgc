<html>
<title>Check</title>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>


<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
</head>
<center>
   
   <h1> Sending Data through AJAX Laravel</h1><br><br>
    <form id="myForm" style="width: 40%" method="get">		<!-- form id must -->
    <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name"><br>
    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name"><br>
    <input type="text" class="form-control" name="email" id="email" placeholder="Email"><br>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password"><br>
    <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>  <!-- button id must -->
</form>

 <div class="msg"></div>   
 </center>



<script type="text/javascript">
     $(document).ready(function() {
	
		$("#myForm").ajaxForm(form);


	});
	
	var form = {
		beforeSubmit : function(e) {
			
						
						 if(!$("#fname").val()) {		//True Case i.e. passed validation
						toastr.info("Enter First Name");
                        return false;
						 }
						 
						 

						 	 if(!$("#lname").val()) {		//True Case i.e. passed validation
						toastr.info("Enter last Name");
                        return false;
						 }

								if(!$("#email").val()) {		//True Case i.e. passed validation
						toastr.info("Enter Email");
                     return false;
						 }
		
	
						 if(!$("#password").val()) {		//True Case i.e. passed validation
						toastr.warning("Please give a Password");
                        return false;
						 }
						 
						  if($("#lname").val() && $("#fname").val() && $("#email").val() && $("#password").val()) {		//True Case i.e. passed validation
						   return true;
                     
						 }

			
		},
		success : function(msg) {
			
	toastr.success("Successfully submitted");
			
		},error: function (xhr) {
				toastr.error("ERROR");
	    }
	};

	
</script>
</html>