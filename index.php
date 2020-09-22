<!DOCTYPE html>

<head>
<script type="text/javascript" language="javascript">
		function nplay(){

	if(document.getElementById("in").value === ""){
		alert("Insira o número!!");
	return false;}

		if(document.getElementById("in").value =< -1){
		alert("Somente números de 0 a 100!");
	return false;}

		if(document.getElementById("in").value >= 101){
		alert("Somente números de 0 a 100!");
	return false;}
	
		}
	</script>
	<style type="text/css">
		body{
	background-image: url(fed.png);
color: #071c68;
background-attachment: fixed;
font-family: 'Kodchasan', sans-serif;
	background-size: 30%;
}
h1{color: black;
margin: auto;}
h2{color: black;
margin: auto;}

h3{color: black;
margin: auto;}

main{background-color: white;
margin-top: 3%;
width: 100%}
p{
	margin: auto;
	margin-left: 5%;
	margin-top: 2%;
	color: #042868;
	font-size: 30px;
	width: 6%;
}
section{height: 30px;
margin-bottom: 20px;}
#in{border-radius: 55px;
	border-bottom-color: black;
width: 25%;
color: #042868;
text-align: center;
font-size: 30px;
height: 40px;
background-color: #f94600;}
#en{border-radius: 55px;
	border-bottom-color: black;
width: 20%;
text-align: center;
font-size: 30px;
height: 40px;}
aside{width: 900px;

}
header{background-color:white;
font-size: 25px;
color: black;
margin-top: 50px;}

footer{background-color:orange;
font-size: 25px;
color: black;
margin-top: 50px;}

#art{
width: 100%;
margin-bottom: 20%;
text-align:center;
margin:auto;
margin-left:4%;


}
#comp{
	border-radius: 550px;
	margin-bottom: 100px;
}
table{
background-color:transparent;
width:40%; 
margin-bottom: 10px;
height: 100%;
margin-right: 50%;
border-radius: 5px 5px 5px 5px;}
tr{

border:inset;
}
#table{
	width: 60%;
	text-align: center;

}
td{
	width: 500px;
}
	</style>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
	<title>LotoMania</title>
</head>
<body>

	<center><a href="http://www.caixa.gov.br/Paginas/home-caixa.aspx" target="black"><img src="css/caixa.png"
	width="50%" text-align="center"></a>	</center>
	<main>
	<section></section>
	<h1>Bem-Vindo ao LOTOMANIA! Insira os números do jogo e teste a sua sorte, quem sabe hoje é seu dia de sorte?</h1>
	<br>
	<h3>Caso não saiba como funciona o jogo, clique na imagem abaixo!</h3>
	<center><a href="https://www.terra.com.br/noticias/loterias/lotomania/regras-do-jogo-da-lotomania,1ee94d8366972240978cdddb625784bcqfytswib.html" target="black"><img src="css/com.png" id="comp" width="97%"></a></center>

<aside>
<form method="POST" action="#" id="form1">
<?php
?><article id="art"><center><?php
for ($i=1; $i <=4 ; $i++) 
{ 
?>
<table id="table">  
<tr>
<?php
for($o=1;$o<=5;$o++)
		{

?>



<center>
    <td ><p>Número:  </p><br>
<input type="name" name="n1[]" id="in">
<br>

</td><br>
</center>
<?php
		}
?>
</tr>
</table>
<?php
}
?>

 



<?php

?>
<br>
<br>

	</article>
</aside></center>
<input type="submit" name="Enviar" id="en" onclick="nplay()">
<a href="index.php"><input type="" name="Reset" id="en" placeholder="Clique para Reset"></a>
</main>
</form>
<form id="form2">
	<header>
		<h1>Resultados:</h1>
		<h2>(Caso tenha acertado aparecerá a mensagem: "Você Acertou esse!!!!")</h2>
<?php

	if (isset($_POST['n1'])) {

$num=$_POST['n1'];

$cont=0;

	


	for ($i=1; $i < 20 ; $i++) { 
		$loteria=array("$i"=>rand(1,20));
		$numero=array("$i"=>$num[$i]);
		$result=array_intersect($loteria, $numero);
		echo "--" .$loteria[$i]."<br>";

		foreach ($result as $value) {
			echo $value." <h1> Você Acertou esse!!!!</h1><br><br><br><br>";
			$cont++;


		}
	}


	}	


?>


</form>
</header>
<footer>
	<center>Desenvolvido por Lucas Pitas Baptista/finalizado no dia 01/11/2018</center>
</footer>
</body>
</html>





