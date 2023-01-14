<?php
//Database file....
include 'config.php';

//running sql query to fetch all data ...	
	
	$sql = "SELECT * FROM donor";
	$result = $link->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>	
		<tr>
            <td><?=$row['id'];?></td>
			<td><?=$row['name'];?></td>
			<td><?=$row['blood'];?></td>
            <td >
			<input type="text" id="num" value="<?=$row['contact_number'];?>" style="display: none;">
			
			<?=$row['contact_number'];?></span></td>
            <td><button type="button" class="btn btn-light btn-sm" onclick="myFunction();">Copy</button></td>
		</tr>
<?php	
	}
	}
	else {
		echo "0 results";
	}

?>