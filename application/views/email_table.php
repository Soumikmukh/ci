<table>
		<tr>
			<th></th>
			<th>Name</th>
			<th>Address</th>
		</tr>
			<?php
				if(isset($result)){
					foreach ($result as $data) {
			?>
				<tr>
				<td><input type="checkbox" name="email" value="<?php echo $data->id; ?>"></td>
				<td><?php echo $data->Name; ?></td>	
				<td><?php echo $data->Address; ?></td>	
				</tr>

				<?php 
				}
				}
				?>
	</table>