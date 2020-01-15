<?php

include('session.php');
if (!isset($_SESSION['login_user'])) {
    header("location: login-page.php");
}

include("header.php");

?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">


            <h1>Meniu Doctori-INSERARE INTERNARE PACIENT</h1>
            <table id="table_id" class="display">
                <thead>
                <tr>
                    <th>Cod Fisa</th>
                    <th>Motive Prezentare</th>
                    <th>Grupa De Sange</th>
                    <th>Tip Sistem Nervos</th>
                    <th>Tip Alimentatie</th>
                    <th>Afectiuni Virale</th>
                    <th>Afectiuni Bacteriene</th>
                    <th>Afectiuni Sange</th>
                    <th>Afectiuni Respiratorii</th>
                    <th>Afectiuni Digestive</th>
                    <th>Afectiuni Cardio-Vasculare</th>

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
                    $sql = "select codfisa,motiveprezentare,grupasange,tipsistemnervos,tipalimentatie,afectiunivirale,afectiunibacteriene,afectiunisange,afectiunirespiratorii,afectiunidigestive,afectiunicardiovasculare from fisaconsultatie";

                    echo "";
                } catch (PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                }
                ?>
                <?php

                foreach ($conn->query($sql) as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['codfisa'] . "</td>";
                    echo "<td>" . $row['motiveprezentare'] . "</td>";
                    echo "<td>" . $row['grupasange'] . "</td>";
                    echo "<td>" . $row['tipsistemnervos'] . "</td>";
                    echo "<td>" . $row['tipalimentatie'] . "</td>";
                    echo "<td>" . $row['afectiunivirale'] . "</td>";
                    echo "<td>" . $row['afectiunibacteriene'] . "</td>";
                    echo "<td>" . $row['afectiunisange'] . "</td>";
                    echo "<td>" . $row['afectiunirespiratorii'] . "</td>";
                    echo "<td>" . $row['afectiunidigestive'] . "</td>";
                    echo "<td>" . $row['afectiunicardiovasculare'] . "</td>";


                    echo "</tr>";
                }
                ?>

            </table>
            <form action="fisaconsultatii.php" method="post">
                <h1> Inserarea unui fise de consultatie:</h1>
                Motivele Prezentarii:
                <input type="text" name="motiveprezentare" style="margin-right: 45 px">
                Grupa De Sange:
                <input type="text" name="grupasange" style="margin-right: 45 px">
                Tipul Sistemului Nervos:
                <input type="text" name="tipsistemnervos" style="margin-right: 45 px">
                Tip Alimentatie:
                <input type="text" name="tipalimentatie" style="margin-right: 45 px">
                Afectiuni Virale:
                <input type="text" name="afectiunivirale" style="margin-right: 45 px">
                Afectiuni Bacteriene:
                <input type="text" name="afectiunibacteriene" style="margin-right: 45 px">
                Afectiuni Sange:
                <input type="text" name="afectiunisange" style="margin-right: 45 px">
                Afectiuni Respiratorii:
                <input type="text" name="afectiunirespiratorii" style="margin-right: 45 px">
                Afectiuni Digestive:
                <input type="text" name="afectiunidigestive" style="margin-right: 45 px">
                Afectiuni Cardio Vasculare:
                <input type="text" name="afectiunicardiovasculare" style="margin-right: 45 px">

                <input style="background-color:white;color:black;width:70px;" type="submit" name="fisaconsultatie"
                       class="button" value="Inserează fisa consultatie"/>
            </form>
            <?php
            include_once 'conexiune.php';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['fisaconsultatie'])) {
                    $database = new conexiune();
                    $dbx = $database->openConnection();
                    $motiveprezentare = $_POST['motiveprezentare'];
                    $grupasange = $_POST['grupasange'];
                    $tipsistemnervos = $_POST['tipsistemnervos'];
                    $tipalimentatie = $_POST['tipalimentatie'];
                    $afectiunivirale = $_POST['afectiunivirale'];
                    $afectiunibacteriene = $_POST['afectiunibacteriene'];
                    $afectiunisange = $_POST['afectiunisange'];
                    $afectiunirespiratorii = $_POST['afectiunirespiratorii'];
                    $afectiunidigestive = $_POST['afectiunidigestive'];
                    $afectiunicardiovasculare = $_POST['afectiunicardiovasculare'];
                    $sql1 = "INSERT INTO fisaconsultatie (codfisa,motiveprezentare,grupasange,tipsistemnervos,tipalimentatie,afectiunivirale,afectiunibacteriene,afectiunisange,afectiunirespiratorii,afectiunidigestive,afectiunicardiovasculare)
    VALUES (default,?,?,?,?,?,?,?,?,?,?)";
                    $result = $dbx->prepare($sql1);
                    $count = $result->execute(array($motiveprezentare, $grupasange, $tipsistemnervos, $tipalimentatie, $afectiunivirale, $afectiunibacteriene, $afectiunisange, $afectiunirespiratorii, $afectiunidigestive, $afectiunicardiovasculare));
                    echo '<script language="javascript">';
                    echo 'alert("Fisa de consultatie inserata cu succes")';
                    echo '</script>';
                }
            }
            ?>

        </div>
    </div>
</div>

<?php
include("footer.php");

?>
