<!DOCTYPE html>
<html>
<head>
<title> Meniu Doctori </title>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  margin-top:50px;
  margin-left: 0px;
}
th, td {
  padding: 5px;
  text-align: left;
}
body{
	background-image:url("pacientinserat.jpg")
}
</style>
</head>
<body>
<h1>Meniu Doctori</h1>
<table style="width:100%">
	<tr>
		<th>Cod</th>
		<th>Nume</th>
		<th>Prenume</th>
		<th>CNP</th>
		<th>Strada</th>
		<th>Numar Strada</th>
		<th>Data Nasterii</th>
		<th>Sex</th>
		<th>Telefon</th>
		<th>Email</th>
		<th>Parola</th>
		
		
	</tr>

<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=pie", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "select codpacient,nume,prenume,cnp,strada,numarstrada,datanasterii,sex,telefon,email,parola from pacient";
	
    echo ""; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
<?php

    foreach($conn->query($sql) as $row){
    	echo"<tr>";
			echo "<td>".$row['codpacient']."</td>";
				echo "<td>".$row['nume']."</td>";
					echo "<td>".$row['prenume']."</td>";
						echo "<td>".$row['cnp']."</td>";
							echo "<td>".$row['strada']."</td>";
								echo "<td>".$row['numarstrada']."</td>";
									echo "<td>".$row['datanasterii']."</td>";
										echo "<td>".$row['sex']."</td>";
											echo "<td>".$row['telefon']."</td>";
												echo "<td>".$row['email']."</td>";
													echo "<td>".$row['parola']."</td>";
														
										
    	echo "</tr>";								
}
 ?>
 <br>
 <br>
<form action="pacientinserat.php" method="post">
	
		<h1> Inserarea unui nou pacient</h1>	
		Nume:&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="nume" style="margin-right: 45 px">	
		Prenume:<input type="text" name="prenume" style="margin-right: 45 px">
		CNP:&nbsp; &nbsp;&nbsp; &nbsp;
		<input type="text" name="cnp" style="margin-right: 45 px">
		Oras: &nbsp;<input type="text" name="oras" style="margin-right: 45 px">		
		Strada: &nbsp; &nbsp;<input type="text" name="strada" style="margin-right: 45 px">	
		Numarul Strazii:<input type="text" name="numarstrada" style="margin-right: 45 px">
		<br>
		Data nasterii:<input type="text" name="datanasterii" style="margin-right: 45 px">		
		Sex:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
		<input type="text" name="sex" style="margin-right: 45 px">
		Telefon:&nbsp;&nbsp;<input type="text" name="telefon" style="margin-right: 45 px">		
		Email:<input type="text" name="email" style="margin-right: 45 px">
		Parola: &nbsp; &nbsp;<input type="text" name="parola" style="margin-right: 45 px">		
		&nbsp; &nbsp; 
		<input style="background-color:white;color:black;width:70px;" type="submit" name="Adaugati_pacient" class="button" value="Inserează"/>	
		<br/>
		</form>
<?php
include_once 'conexiune.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
	 if(isset($_POST['Adaugati_pacient'])){
		$database = new conexiune();
		$dbx =$database->openConnection();
		$nume=$_POST['nume'];
		$prenume=$_POST['prenume'];
		$cnp=$_POST['cnp'];
		$oras=$_POST['oras'];
		$strada=$_POST['strada'];
		$numarstrada=$_POST['numarstrada'];
		$datanasterii=$_POST['datanasterii'];
		$sex=$_POST['sex'];
		$telefon=$_POST['telefon'];
		$email=$_POST['email'];
		$parola=$_POST['parola'];
		$sql="INSERT INTO pacient (codpacient, nume, prenume, oras, cnp, strada, numarstrada, datanasterii, sex, telefon, email, parola)
    VALUES (default,?,?,?,?,?,?,?,?,?,?,?)";
		$result =$dbx->prepare($sql);
		$count= $result->execute(array($nume,$prenume,$oras,$cnp,$strada,$numarstrada,$datanasterii,$sex,$telefon,$email,$parola));
		echo '<script language="javascript">';
		echo 'alert("Pacient inserata cu succes")';
		echo'</script>';
	 }
}
?>
</body>
</html>
