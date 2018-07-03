<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script>
$(document).ready(function(){
    

  $("#s").click(function(){
	  
  		toastr.success("SUCCESS");
  });

 $("#i").click(function(){
  		toastr.info("INFORMATION");
 });

 $("#w").click(function(){
  		toastr.warning("{{ Session::get('warning') }}");
  });

 $("#e").click(function(){
  		toastr.error("{{ Session::get('error') }}");
  });

 });
</script>