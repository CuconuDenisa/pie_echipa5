<?php

include('login.php'); // Includes Login Script


if (isset($_SESSION['login_user'])) {
    header("location: index.php"); // Redirecting To Profile Page
}

include("header.php");
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="login">
                <h2>Login Doctor</h2>
                <form action="" method="post">
                    <label>UserName :</label>
                    <input id="name" name="username" placeholder="username" type="text">
                    <label>Parola :</label>
                    <input id="password" name="password" placeholder="**********" type="password"><br><br>
                    <input name="submit" type="submit" value=" Login ">
                    <span><?php echo $error; ?></span>
                </form>
            </div>
        </div>

    </div>
</div>



<?php include("footer.php") ?>

