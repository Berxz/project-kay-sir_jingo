<?php
	require '2.php';
	
	if(ISSET($_POST['res'])){
		$query = mysqli_query($conn, "SELECT * FROM `test` ") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
			echo 
			"<tr>
				<td>".$fetch['name']."</td>
				<td>".$fetch['email']."</td>
				<td>".$fetch['msg']."</td>
			</tr>";
		}
	}
?>