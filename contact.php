<?php

include("header.php");

?>


<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Contacteaza-ne</h2>
            </div>
        </div>
    </div>
</section>
<section id="content">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-logo">
                    <h3>Nu ezita sa ne contactezi</h3>
                    <p>Staţionarea: la intrarea în spital este permisă oprirea numai temporar, în cazul de însoţire a unui pacient.
                        Respectaţi indicaţiile personalului de pază.
                        Blocarea accesului ambulanţelor/maşinilor unităţii sau parcarea pe locurile destinate acestora este interzisă (poate duce la ridicarea autoturismului dumneavoastră).</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p> </p>

                <!-- Form itself -->
                <form id="form1" id="form1" action="contact.php" method="POST">

                    <label>Nume
                    </label>
                    <input type="text" name="nume">
                    <label>Prenume
                    </label>
                    <input type="text" name="prenume">
                    <label>Email
                    </label>
                    <input type="text" name="email">
                    <label>Oras
                    </label>
                    <input type="text" name="oras">
                    <label>Telefon
                    </label>
                    <input type="text" name="telefon">

                    <label>Message

                    </label>
                    <textarea  name="subiect" placeholder="Scrie-ne.." style="height:200px"></textarea>

                    <input type="submit" value="Trimite" name="trimite">
                    <div class="spacer"></div>
                    <?php
                    include_once 'conexiune.php';
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        if(isset($_POST['trimite'])){
                            $database = new conexiune();
                            $dbx =$database->openConnection();
                            $nume=$_POST['nume'];
                            $prenume=$_POST['prenume'];
                            $email=$_POST['email'];
                            $oras=$_POST['oras'];
                            $telefon=$_POST['telefon'];
                            $subiect=$_POST['subiect'];
                            $sql="INSERT INTO contact (nume,prenume,email, oras,telefon, subiect)
    VALUES (?,?,?,?,?,?)";
                            $result =$dbx->prepare($sql);
                            $count= $result->execute(array($nume,$prenume,$email,$oras,$telefon,$subiect));
                            echo '<script language="javascript">';
                            echo 'alert("Mesajul tau a ajuns la noi")';
                            echo'</script>';
                        }
                    }
                    ?>
                </form>


            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d179174.37190093574!2d27.90741155708903!3d45.43757293691818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b6dee589f2c4b5%3A0x53d7342f252d702b!2zR2FsYcibaQ!5e0!3m2!1sen!2sro!4v1574888867244!5m2!1sen!2sro" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>

            <div class="col-md-6">
                <br>

                <p>ADRESĂ</p>
                <p>Galati Strada Brailei nr. 152</p>

                <p>PROGRAM DE AUDIENŢE MANAGER Ec. LUDOVICA RUSU</p>
                <p>Marţi şi Joi  –  orele 11.00-12.00</p>

                <p>INFORMAŢII ŞI PROGRAMĂRI</p>
                <p>Telefoane: 0262-216601; 0262-216602; 0262-211915;</p>
                <p>Fax: 0262-216603;  0262-215348</p>
                <p>Email: spitalulmaria@spital.ro</p>
            </div>
        </div>
    </div>

</section>


<?php

include("footer.php");

?>
