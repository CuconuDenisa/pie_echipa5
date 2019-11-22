<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Formular de contact</title>
<style type="text/css">
body{
	font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif; 
	font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
.myform{
	margin:0 auto;
	width:400px;
	padding:14px;
}
	#basic{
		border:solid 2px #DEDEDE;	
	}
	#basic h1 {
		font-size:14px;
		font-weight:bold;
		margin-bottom:8px;
	}
	#basic p{
		font-size:11px;
		color:#666666;
		margin-bottom:20px;
		border-bottom:solid 1px #dedede;
		padding-bottom:10px;
	}
	#basic label{
		display:block;
		font-weight:bold;
		text-align:right;
		width:140px;
		float:left;
	}
	#basic .small{
		color:#666666;
		display:block;
		font-size:11px;
		font-weight:normal;
		text-align:right;
		width:140px;
	}
	#basic input{
		float:left;
		width:200px;
		margin:2px 0 30px 10px;
	}
	#basic button{ 
		clear:both;
		margin-left:150px;
		background:#888888;
		color:#FFFFFF;
		border:solid 1px #666666;
		font-size:11px;
		font-weight:bold;
		padding:4px 6px;
	}

	#stylized{
		border:solid 2px #b7ddf2;
		background:#ebf4fb;

	}
	#stylized h1 {
		font-size:14px;
		font-weight:bold;
		margin-bottom:8px;
	}
	#stylized p{
		font-size:11px;
		color:#666666;
		margin-bottom:20px;
		border-bottom:solid 1px #b7ddf2;
		padding-bottom:10px;
	}
	#stylized label{
		display:block;
		font-weight:bold;
		text-align:right;
		width:140px;
		float:left;
	}
	#stylized .small{
		color:#666666;
		display:block;
		font-size:11px;
		font-weight:normal;
		text-align:right;
		width:140px;
	}
	#stylized input{
		float:left;
		font-size:12px;
		padding:4px 2px;
		border:solid 1px #aacfe4;
		width:200px;
		margin:2px 0 20px 10px;
	}
	#stylized button{ 
		clear:both;
		margin-left:160px;
		width:125px;
		height:31px;
		background:#444;
		text-align:center;
		line-height:31px;
		color:#FFFFFF;
		font-size:11px;
		font-weight:bold;
	}

</style>
</head>
<body>

<div id="stylized" class="myform">

<form id="form1" id="form1" action="formcontact.php" method="POST">

    <label>Nume
        <span class="small">Adauga numele:</span>
    </label>
<input type="text" name="nume">
	<label>Prenume
        <span class="small">Adauga prenumele:</span>
    </label>
<input type="text" name="prenume">
    <label>Email
        <span class="small">Introduceti emailul:</span>
    </label>
<input type="text" name="email">
	<label>Oras
        <span class="small">Completeaza orasul:</span>
    </label>
<input type="text" name="oras">
    <label>Telefon
        <span class="small">Adauuga numarul de telefon:</span>
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
</body>
</html>
