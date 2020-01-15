<?php

include("header.php");

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">

    <form action="programari.php" method="post">
    <h1> PROGRAMARE ONLINE:</h1>
    Nume Complet:
    <input type="text" name="nume" style="margin-right: 45 px">
    <br>
    Secializarea:
    <input type="text" name="specializarea" style="margin-right: 45 px">
    <br>
    Numar de telefon:
    <input type="text" name="telefon" style="margin-right: 45 px">
    <br>
    Email:
    <input type="text" name="email" style="margin-right: 45 px">
    <br>
    Preferinte Medic:
    <input type="text" name="medic" style="margin-right: 45 px">
    <br>
    <input style="background-color:white;color:black;width:70px;" type="submit" name="trimite" class="button" value="trimite"/>
</form>

<?php
include_once 'conexiune.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['trimite'])){
        $database = new conexiune();
        $dbx =$database->openConnection();
        $nume=$_POST['nume'];
        $specializarea=$_POST['specializarea'];
        $telefon=$_POST['telefon'];
        $email=$_POST['email'];
        $medic=$_POST['medic'];
        $sql="INSERT INTO rezervari(codrezervare,nume,specializarea,telefon,email,medic)
		VALUES(default,?,?,?,?,?)";
        $result =$dbx->prepare($sql);
        $count= $result->execute(array($nume,$specializarea,$telefon,$email,$medic));
        echo '<script language="javascript">';
        echo 'alert("Rezervare cu succes")';
        echo'</script>';
    }
}
?>

        </div>
    </div>
</div>


<?php

include("footer.php");

?>

