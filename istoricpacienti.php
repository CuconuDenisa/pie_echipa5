<?php

include('session.php');
if (!isset($_SESSION['login_user'])) {
    header("location: login-page.php");
}

include("header.php");

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">


            <h1>Istoricul Internarii</h1>
            <table style="width:100%" id="table_id" class="display">
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

            </table>

            <br>
            <br>
            <br>
            <br>

        </div>
    </div>
</div>

<?php include("footer.php") ?>
 