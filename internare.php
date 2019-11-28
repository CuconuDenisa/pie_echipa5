<?php

include("header.php");

?>
    <div class="content-pagini">
        <h1>INSERARE INTERNARE PACIENT</h1>
        <table style="width:100%">
            <tr>
                <th>Cod Sectie</th>
                <th>Denumire</th>
                <th>Specializare</th>
                <th>Camera</th>
                <th>Etaj</th>
            </tr>

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
            <form action="internare.php" method="post">
                <h1> Inserarea unui internari:</h1>
                Data Internarii:
                <input type="text" name="datainternarii" style="margin-right: 45 px">
                Ora Internarii:
                <input type="text" name="orainternarii" style="margin-right: 45 px">
                <input style="background-color:white;color:black;width:70px;" type="submit" name="inserareinternare"
                       class="button" value="Inserează Internare"/>
            </form>
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

        </table>
            <h1>Tabel Sectii</h1>


    </div>
<?php
include("footer.php");

?>