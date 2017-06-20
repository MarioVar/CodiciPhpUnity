<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbName="Zone";
	
	//connessione
	$conn = new mysqli($servername, $username, $password, $dbName);
	
	//controllo
	if(!$conn){
		die("Connection Failed". mysqli_connect_error());
	}
	else{
		$sql="SELECT * FROM item";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
				echo "ID:".$row['id']."|Nome:".$row['nome']."|Descrizione:".$row['descrizione']."|Foto:".$row['foto'].";";
			}
		
		}

	}
?>