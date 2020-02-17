<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Atelier 4 multiplication</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style4/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>

<div class="container jumbotron mt-5">
    <div class="card card-secondary">
        <div class="card-heiding"><h3 style="text-align: center; background-color:#510a41; color: white">Resultat Étape 4</h3></div>
          <div class="card-body">
          <?php
            //declaration et affectation des variables 
            $score = 0;
            $scoretop = 0;
            $reponse = $_POST['reponse'];
            $resultat = $_POST['resultat'];
            $question = $_POST['question'];

            foreach ($_POST['reponse'] as $partie => $reponse ) {
                $scoretop++;
           ?>
                <h2>Question <?php echo $scoretop ?>:</h2> 
                    <p><?php  echo $question[$partie]?></p>
                    <p>votre réponse est: <?php echo $reponse?> </p>
           
                <?php if ($resultat[$partie] == $reponse) {
                        echo '<h2 class="animated infinite pulse delay-1s" style="color:#510a41; font-size:25px;">Bravo vous avez trouve !</h2>';
                        $score++;
           
                 }
                 else {
                    echo '<p class="animated infinite pulse delay-1s" style="color:red; font-size:25px;">Vous avez fausse !</p>';
                    echo '<p style="color:#510a41; font-size:25px;">La bonne réponse est: '.$resultat[$partie].'</p><hr>'; 
                  }    
            }?> 
             <h1 style="color:#510a41; ">Score final : <?php echo $score ?> / <?php echo $scoretop ?></h1>
         </div>
       </div>
         <div  class="d-flex justify-content-end"><a href="multiplication4.php" class="btn btn-dark" style="border-radius: 15px;">Rejouer</a></div>
    </div>
</body>
</html>
