


<!DOCTYPE html>

<html>
<head>
<title>Home page
</title>
</head>
<style type="text/css">
	table{
		border-collapse: collapse;
		width: 100%;
		color: #588c7e;
		font-family: monospace;
		text-align: left;


	}
	th{
		background-color: #588c7e;
		color: white;

	}
	tr:nth-child(even){background-color: #f2f2f2}
	
</style>
<header id ="header"><table><tr><th><center> <big> Result manageement system</big></center></th><th>Logout</th></tr></table></header>
<header><center>Logout</center></header>
<body>	
	<div id="left side">
<table>
	<tr>
		<td>
			
		</td>
	</tr>
</table>
</div>
<div id ="right_side">
	<table>
		<tr>
			<th>
				ID
			</th>
			<th>
				Password
			</th>
			
		</tr>
		<?php
		$conn = mysqli_connect("localhost", "root","", "session");
			if($conn-> connect_error){
				die("Conecton falied".$conn-> connect_error);
			}
			$sql = "select id, password from signin";
			$Result = $conn-> query($sql);
			if($Result-> num_rows >0){
				while ($row = $Result-> fetch_assoc()) {
					echo "<tr><td>".$row["id"]."</td><td>".$row["password"]."</td></tr>";
					# code...
				}
				echo "</table>";
			}
			?>

	</table>
		
</div>



</body>
