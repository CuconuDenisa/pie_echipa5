<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image:url('internare.jpg');
    background-repeat: no-repeat
}

h1 {
  color: black;
  text-align: center;
  font-size: 50px
}

</style>
</head>
<body>

<h1>INSERARE INTERNARI</h1>
<h2>Pasul I:</h2>
<form action="pacientinserat.php" class="inline">
Introdu Pacient:<button class="float-left submit-button" style="background-color:white;color:black;width:70px;">Pacient</button>
</form>
<h2>Pasul II:</h2>
<form action="fisaconsultatii.php" class="inline">
Introdu fisa de consultatie:<button class="float-left submit-button" style="background-color:white;color:black;width:100px;">Consultatie</button>
</form>
<h2>Pasul III:</h2>
<form action="analize.php" class="inline">
Introdu fisa de analize:<button class="float-left submit-button" style="background-color:white;color:black;width:100px;">Analize</button>
</form>
<h2>Pasul IV:</h2>
<form action="internare.php" class="inline">
Introdu internare:<button class="float-left submit-button" style="background-color:white;color:black;width:100px;">Internare</button>
</form>
<br>
<br>
Afisare Istoric Internari:
	 <form action="istoricpacienti.php" class="inline">
	 <button class="float-left submit-button" style="background-color:white;color:black;width:70px;">Istoric</button>
</form>

</body>
</html>