<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Atelier 3 multiplication</title>
    <meta charset="utf-8">
     <link rel="stylesheet" href="style3/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>
<div class="container jumbotron mt-5">
    <div class="card card-secondary">
        <div class="card-heiding"><h3 style="text-align: center; background-color:#510a41; color: white">Resultat Étape 3</h3></div>
          <div class="card-body">
            <?php
                $reponse = $_POST['reponse'];
                $resultat = $_POST['resultat'];
                $question = $_POST['question'];

                foreach ($_POST['reponse'] as $partie => $reponse ) {
               ?>

                        <p style="font-size: 25px;"><?php  echo $question[$partie]?></p>
                    <p style="font-size: 25px;">votre réponse est: <?php echo $reponse?> </p>
                    <?php if ($resultat[$partie] == $reponse) {
                        echo '<h2 class="animated infinite pulse delay-1s" style="color:#510a41; font-size:25px;">Bravo vous avez trouve !</h2>';

                    } else {
                        echo '<p class="animated infinite pulse delay-1s" style="color:red; font-size:25px;">Vous avez perdue !</p>';
                        echo '<p style="color:#510a41; font-size:25px;" >Voici la bonne réponse: '.$resultat[$partie].'</p>';
                    }
            } ?>
         </div>
       </div>
         <div  class="d-flex justify-content-end"><a href="multiplication3.php" class="btn btn-dark" style="border-radius: 15px;">Rejouer</a></div>
    </div>
</div>

</body>
</html>
