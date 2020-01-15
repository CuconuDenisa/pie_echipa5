<?php

include('session.php');
if (!isset($_SESSION['login_user'])) {
    header("location: login-page.php");
}

include("header.php");

?>

    <div class="content-pagini">
        <h1>Meniu Doctori</h1>
        <table style="width:100%" id="table_id" class="display">

            <thead>
            <tr>
                <th>Cod Analize</th>
                <th>Data Recoltarii</th>
                <th>Data Efectuarii</th>
                <th>Varsta</th>
                <th>Presiunea</th>
                <th>Proba</th>
                <th>Receptie</th>
                <th>Opinii si Interpretari</th>
                <th>Analiza</th>
                <th>Rezultat</th>
                <th>Interval De Referinta</th>
                <th>Metoda</th>


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
                $sql = "SELECT t1.codanalize,t1.datarecoltarii,t1.dataefectuarii,t1.varsta,t1.presiunea,t1.proba,t1.receptie,t1.opiniisiinterpretari,t2.analiza,t2.rezultat,t2.intervaldereferinta,t2.metoda
	from analize t1
	inner join biochimie t2
	ON t1.codbiochimie=t2.codbiochimie;";

                echo "";
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
            ?>
            <?php

            foreach ($conn->query($sql) as $row) {
                echo "<tr>";
                echo "<td>" . $row['codanalize'] . "</td>";
                echo "<td>" . $row['datarecoltarii'] . "</td>";
                echo "<td>" . $row['dataefectuarii'] . "</td>";
                echo "<td>" . $row['varsta'] . "</td>";
                echo "<td>" . $row['presiunea'] . "</td>";
                echo "<td>" . $row['proba'] . "</td>";
                echo "<td>" . $row['receptie'] . "</td>";
                echo "<td>" . $row['opiniisiinterpretari'] . "</td>";
                echo "<td>" . $row['analiza'] . "</td>";
                echo "<td>" . $row['rezultat'] . "</td>";
                echo "<td>" . $row['intervaldereferinta'] . "</td>";
                echo "<td>" . $row['metoda'] . "</td>";

                echo "</tr>";
            }
            ?>

            </tbody>

        </table>
        <br>
        <br>
        <form action="analize.php" method="post">
            <h1> Inserare biochimie:</h1>
            Analiza:
            <input type="text" name="analiza" style="margin-right: 45 px">
            Rezultat:
            <input type="text" name="rezultat" style="margin-right: 45 px">
            Interval de referinta:
            <input type="text" name="intervaldereferinta" style="margin-right: 45 px">
            Metoda:
            <input type="text" name="metoda" style="margin-right: 45 px">
            <input style="background-color:white;color:black;width:70px;" type="submit" name="inserarebiochimie"
                   class="button" value="Inserează Analize"/>
            <br/>
            <h1> Inserarea unui analize medicale:</h1>
            Data Recoltarii Probelor:
            <input type="text" name="datarecoltarii" style="margin-right: 45 px">
            Data Efectuarii:
            <input type="text" name="dataefectuarii" style="margin-right: 45 px">
            Varsta Persoanei:
            <input type="text" name="varsta" style="margin-right: 45 px">
            Presiunea:
            <input type="text" name="presiunea" style="margin-right: 45 px">
            Proba:
            <input type="text" name="proba" style="margin-right: 45 px">
            Receptie:
            <input type="text" name="receptie" style="margin-right: 45 px">
            Opinii si interpretari:
            <input type="text" name="opiniisiinterpretari" style="margin-right: 45 px">

            <input style="background-color:white;color:black;width:70px;" type="submit" name="inserareanalize"
                   class="button" value="Inserează Analize"/>
            <br/>

            <br/>
        </form>
        <?php
        include_once 'conexiune.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['inserarebiochimie'])) {
                $database = new conexiune();
                $dbx = $database->openConnection();
                $analiza = $_POST['analiza'];
                $rezultat = $_POST['rezultat'];
                $intervaldereferinta = $_POST['intervaldereferinta'];
                $metoda = $_POST['metoda'];
                $sql = "INSERT INTO biochimie(codbiochimie,analiza,rezultat,intervaldereferinta,metoda)
		VALUES(default,?,?,?,?)";
                $result = $dbx->prepare($sql);
                $count = $result->execute(array($analiza, $rezultat, $intervaldereferinta, $metoda));
                echo '<script language="javascript">';
                echo 'alert("Bochimie inserata cu succes")';
                echo '</script>';
            }
        }
        ?>
        <?php
        include_once 'conexiune.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['inserareanalize'])) {
                $database = new conexiune();
                $dbx = $database->openConnection();
                $datarecoltarii = $_POST['datarecoltarii'];
                $dataefectuarii = $_POST['dataefectuarii'];
                $varsta = $_POST['varsta'];
                $presiunea = $_POST['presiunea'];
                $proba = $_POST['proba'];
                $receptie = $_POST['receptie'];
                $opiniisiinterpretari = $_POST['opiniisiinterpretari'];
                $sql = "INSERT INTO analize (codanalize,datarecoltarii,dataefectuarii,varsta,presiunea,proba,receptie,opiniisiinterpretari,codbiochimie)
		VALUES(default,?,?,?,?,?,?,?,(SELECT MAX(codbiochimie) FROM biochimie))";
                $result = $dbx->prepare($sql);
                $count = $result->execute(array($datarecoltarii, $dataefectuarii, $varsta, $presiunea, $proba, $receptie, $opiniisiinterpretari));
                echo '<script language="javascript">';
                echo 'alert("Pacient inserata cu succes")';
                echo '</script>';
            }
        }
        ?>
    </div>

<?php
include("footer.php");

?>