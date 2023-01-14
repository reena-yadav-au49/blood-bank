<?php
require ('config.php');

if(isset($_POST["search"])) {
{

	$search = mysqli_real_escape_string($link, $_POST["search"]);
	$sql = "SELECT * FROM donor
	WHERE id  LIKE '%".$search."%'
	OR name LIKE '%".$search."%'	
	OR blood LIKE '%".$search."%'
    OR contact_number LIKE '%".$search."%'
	ORDER BY id DESC	";

    $result = $link->query($sql);
	
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
        ?>	
                <tr>
                    <td><?=$row['id'];?></td>
                    <td><?=$row['name'];?></td>
                    <td><?=$row['blood'];?></td>
                    <td id="num"><?=$row['contact_number'];?></td>
                    <td><button type="button" class="btn btn-light btn-sm" id="cpy">Copy</button></td>

                </tr>
        <?php	
            }
            }
            else {
                echo "0 results";
            }
}
}
?>