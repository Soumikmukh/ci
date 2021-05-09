<!DOCTYPE html>
<html>
<head>
	<title>gmail</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$("#inbox").click(function(){ 
				$.ajax({
					url:"<?php echo base_url();?>Gmail/gmail",
					success: function(param){
						$("#inbox_view").show();
						$("#inbox_view").html(param);
						$("#inbox_view").append("<h3 id='del' style='display:none;'>Delete</h3>");
					}
				});
			});

			$("#del").click(function(){
				var mails =[];
				$("input:checkbox[name=email]:checked").each(function(){
				    mails.push($(this).val());
				});
				$.ajax({
					url:"<?php echo base_url(); ?>Gmail/move",
					data:{"allemail":mails},
					type:"POST",
					success: function(){
						location.href="<?php echo base_url() ?>Gmail";
						$("#inbox").click();
					},
					error: function(param){
						alert(param);
					}	
				});
			});

			$("#bin").click(function(){
				$.ajax({
					url:"<?php echo base_url(); ?>Gmail/bin_data",
					success: function(param){
						$("#inbox_view").show();
						$("#inbox_view").html(param);	
					}
				});	
			});
    		
		});

	</script>
</head>
<body>
	<div>
		<h5 id="inbox" style="float: left; padding-right: 10px; color: red">Inbox</h5>
		<h5 id="bin" style="width: 0%">Bin</h5>

	</div>
	<div id="inbox_view" style="display: show;">
		<?php
			if(isset($output)){
				echo $output;	
			}
		?>			
	</div>
	<h4 id="dele"></h4>
</body>
</html>