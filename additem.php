<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbName="Zone";
	
	//connessione
	$conn = new mysqli($servername, $username, $password, $dbName);
	$nome=$_POST['nomePost'];
	$descrizione=$_POST['descrizionePost'];
	$foto=$_POST['fotoPost'];
	//controllo
	if(!$conn){
		die("Connection Failed". mysqli_connect_error());
	}
	else{
		$sql="insert into item (nome,descrizione,foto) values ('".$nome."','".$descrizione."','".$foto."')";
		$result = mysqli_query($conn,$sql);

		if(!$result)
			echo "error";
		else
			echo "ok";

	}
?>