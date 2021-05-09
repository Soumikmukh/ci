<!-- <?php 
if(isset($data)){
	print_r($data);
}
?> -->
<!DOCTYPE html>
<html>
<head>
<title>table</title>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>views/script/table.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
</head>
<body>
	<h1>soumik</h1>
<div style="width: 50%">
	<table id="example">
	<thead>
		<tr>
			<th>Id</th>
			<th>Fname</th>
			<th>Email</th>
		</tr>
	</thead>
	<tbody>
		<?php  
		foreach ($data as $value) {
		echo "<tr><td>".$value->id."</td><td>".$value->fname."</td><td>".$value->email."</td></tr>";
		}
		?>
	</tbody>
	</table>	
</div>

<script type="text/javascript">
	
$(function(){
$("#example").DataTable();
});
</script>
</body>
</html>