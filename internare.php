<?php

include('session.php');
if (!isset($_SESSION['login_user'])) {
    header("location: login-page.php");
}

include("header.php");

?>
    <div class="content-pagini">
        <h1>INSERARE INTERNARE PACIENT</h1>
        <table style="width:100%" id="table_id" class="display">
            <thead>
            <tr>
                <th>Cod Sectie</th>
                <th>Denumire</th>
                <th>Specializare</th>
                <th>Camera</th>
                <th>Etaj</th>
            </tr>
            </thead>
            <tbody>

            <?php
            $servername = "localhost";
            $username = "nininexloc_pie";
            $password = "L~%XIZCefEeZ";


            try {
                $conn = new PDO("mysql:host=$servername;dbname=nininexloc_pie", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "select codsectie,denumire,specializarea,camera,etaj from sectie";

                echo "";
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
            ?>
            <?php

            foreach ($conn->query($sql) as $row) {
                echo "<tr>";
                echo "<td>" . $row['codsectie'] . "</td>";
                echo "<td>" . $row['denumire'] . "</td>";
                echo "<td>" . $row['specializarea'] . "</td>";
                echo "<td>" . $row['camera'] . "</td>";
                echo "<td>" . $row['etaj'] . "</td>";
                echo "</tr>";
            }
            ?>

            </tbody>

        </table>
        <form action="internare.php" method="post">
            <h1> Inserarea unui internari:</h1>
            Data Internarii:
            <input type="text" name="datainternarii" style="margin-right: 45 px">
            Ora Internarii:
            <input type="text" name="orainternarii" style="margin-right: 45 px">
            <input style="background-color:white;color:black;width:70px;" type="submit" name="inserareinternare"
                   class="button" value="Inserează Internare"/>
        </form>

        <?php
        include_once 'conexiune.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['inserareinternare'])) {
                $database = new conexiune();
                $dbx = $database->openConnection();
                $datainternarii = $_POST['datainternarii'];
                $orainternarii = $_POST['orainternarii'];
                $sql = "INSERT INTO internari (codinternari,datainternarii,orainternarii,codsectie,codanalize,codpacient,codfisaconsultatie)
		VALUES(default,?,?,(SELECT codsectie FROM sectie WHERE specializarea='CHIRURGIE'),(SELECT MAX(codanalize) FROM analize),(SELECT MAX(codpacient) FROM pacient),(SELECT MAX(codfisa) FROM fisaconsultatie))";
                $result = $dbx->prepare($sql);
                $count = $result->execute(array($datainternarii, $orainternarii));
                echo '<script language="javascript">';
                echo 'alert("Internare inserata cu succes")';
                echo '</script>';
            }
        }
        ?>


        <h1>Tabel Sectii</h1>

        <h1>Istoricul Internarii</h1>


        <table style="width:100%" id="table_id2" class="display">
            <thead>
            <tr>
                <th>Cod</th>
                <th>Data internarii</th>
                <th>Ora internarii</th>
                <th>Nume</th>
                <th>Prenume</th>
                <th>CNP</th>
                <th>Data Nasterii</th>
                <th>Gen</th>
                <th>Telefon</th>
                <th>Email</th>
            </tr>
            </thead>

            <tbody>

            <?php
            $servername = "localhost";
            $username = "nininexloc_pie";
            $password = "L~%XIZCefEeZ";


            try {
                $conn = new PDO("mysql:host=$servername;dbname=nininexloc_pie", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "SELECT t1.codinternari,t1.datainternarii,t1.orainternarii,t2.nume,t2.prenume,t2.cnp,t2.datanasterii,t2.gen,t2.telefon,t2.email from internari t1
inner join pacient t2
ON t1.codpacient=t2.codpacient;";

                echo "";
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
            ?>
            <?php

            foreach ($conn->query($sql) as $row) {
                echo "<tr>";
                echo "<td>" . $row['codinternari'] . "</td>";
                echo "<td>" . $row['datainternarii'] . "</td>";
                echo "<td>" . $row['orainternarii'] . "</td>";
                echo "<td>" . $row['nume'] . "</td>";
                echo "<td>" . $row['prenume'] . "</td>";
                echo "<td>" . $row['cnp'] . "</td>";
                echo "<td>" . $row['datanasterii'] . "</td>";
                echo "<td>" . $row['gen'] . "</td>";
                echo "<td>" . $row['telefon'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";

                echo "</tr>";
            }
            ?>

            </tbody>
        </table>
    </div>

<?php
include("footer.php");

?>

