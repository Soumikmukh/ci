<?php 
if(isset($error)){
	echo $error;
}else{
	echo "";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Image Upload</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script type="text/javascript">
	$(document).ready(function (e) { 
	    $('#load').on('submit',(function(e) {
	    	$("#res").empty();
	        e.preventDefault();

	        var base_url = $("#base_url").val();

	        var formData = new FormData(this);
	        var i;
	        $.ajax({
	            type:'POST',
	            url:'<?php echo base_url(); ?>Photo/upload',
	            data: formData,
	            cache:false,
	            contentType: false,
	            processData: false,
	            success:function(para){
	            	// console.log(para);
	            	var new_data = JSON.parse(para);
	            	console.log(new_data);
            		for (i=0; i<= new_data.length;i++){
		            	// $("#res").append("<p>"+new_data[i].name+"</p>");
		            	//  var show_image = setTimeout(function(){
		            	// $("#res").append("<img src='"+base_url+"upload/"+new_data[i].name+"' width='200px' height='200px' alt='girl'>"+"<br>");
		            	// },3000);

		            	$("#res").append("<img src='"+base_url+"upload/"+new_data[i].Name+"' width='200px' height='200px' alt='fuck'>"+"&nbsp &nbsp");
		            	// console.log(new_data[i].Name);
            		}
	            	
		            // $("#result").show();	            
		            // $("#result").attr("src","<?php echo base_url(); ?>upload/"+para);
	            }
	        });
	    }));
	    $("#result").hide();
	});
	</script>
</head>
<body>
	<form method="POST" id="load" enctype="multipart/form-data">
		<input type="hidden" id="base_url" value="<?=base_url()?>">
	<label for="file">Image:</label>
	<input type="file" name="pic" title="">
	<br>
	<input type="submit" name="sub">
	</form>
	<div id="res">
	<img id="result" src="<?php echo base_url(); ?>upload/" width="500px" height="200px">
	</div>
</body>
</html>