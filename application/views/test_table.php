<!DOCTYPE html>
<html>
<head>
	<title>test_table</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$("#test").DataTable({
				"dataSrc": "",
				"ajax":{
					url:"http://localhost/ci/Datatable_test/test",
					type: "POST",
					dataSrc: "",
				},
				"columns" : [
					{data:"id"},
					{data:"Name"},
					{
					data:"",
					"defaultContent": "<i>Not set</i>",
					},
				],
				
				
			});
		});
	</script>
</head>
	<body>
		<div>
			<table id="test">
				<thead>
				<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Action</th>
				</tr>	
				</thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
				</tr>
			</table>
		</div>
	</body>
</html>