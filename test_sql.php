<?php
	
	$id= $_POST["ID"];
	$reg_Name= $_POST["Reg_Name"];
	
	include('init_scripts.inc');
	
	if(!$connection)
	{
		die('Could not connect to database : '.mysql_error());
	}
	
		
	$myquery="SELECT * FROM Raspi_IoT_01 WHERE Index='$id'";
	
	$data1=mysql_query($myquery);
	
	// echo "<table><tr><th>FirstName</th><th>MiddleName</th><th>LastName</th><th>Phone1</th><th>Phone2</th><th>Email</th><th>Address</th>	</tr>";
	
	

	<input name="Reg_Name" value=" $data1[Reg_Name]"/>
	<input name="Reg_1" value="$data1[Reg_1] />
	<input name="Reg_2" value="$data1[Reg_2] />
	<input name="Reg_3" value="$data1[Reg_3] />
	<input name="Reg_4" value="$data1[Reg_4] />	



	
	
//	while($row=mysql_fetch_array($fetched))
//	{
//		echo "<tr>";
//		echo '<td><input type="text" value="'.$row['FirstName'].'"></td>';
//		echo '<td><input type="text" value="'.$row['MiddleName'].'"></td>';
//		echo '<td><input type="text" value="'.$row['LastName'].'"></td>';
//		echo '<td><input type="text" value="'.$row['Phone1'].'"></td>';
//		echo '<td><input type="text" value="'.$row['Phone2'].'"></td>';
//		echo '<td><input type="text" value="'.$row['Email'].'"></td>';
//		echo '<td><input type="text" value="'.$row['Address'].'"></td>';
//	}

?>
