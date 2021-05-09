<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript">
	
	$(function(){
	$("#sub").click(function(){
	var name = $("#uname").val();
	var phone = $("#upass").val();
	$.ajax({
		url: '<?php echo base_url() ?>Hi/insert',
		type: 'POST',
		data: {nm: name, pn: phone},
		success: function(para){
		$("#tab").show();
		}
	});
	});
	});
</script>


<!DOCTYPE html>
<html>
<head>
	<title>hii</title>
</head>
<body>
<label>Name:</label>
<input type="text" name="name" id="uname"><br>
<label>Phone Number:</label>
<input type="text" name="phone" id="upass"><br>
<input type="submit" name="submit" id="sub">
<br><br><br>
<table id="tab" style="display: none;">
	<tr>
	<th>Name</th>
	<th>Phone</th>	
	</tr>
	<tr>
		<td id="tab1"></td>
		<td id="tab2"></td>
	</tr>
</table>
<a href="<?php echo base_url() ?>Hi/wordd">Download</a>
</body>
</html>