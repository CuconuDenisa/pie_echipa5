<?php


include_once 'conexiune.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['inserareinternare'])) {
        $database = new conexiune();
        $dbx = $database->openConnection();
        $datainternarii = $_POST['datainternarii'];
        $orainternarii = $_POST['orainternarii'];
        $sql = "INSERT INTO internari (codinteranari,datainternarii,orainternarii,codsectie,codanalize,codpacient,codfisa)
		VALUES(default,?,?,?,?,?,?)";
        $result = $dbx->prepare($sql);
        $count = $result->execute(array($datainternarii, $orainternarii));
        echo '<script language="javascript">';
        echo 'alert("Pacient inserata cu succes")';
        echo '</script>';
    }
}
