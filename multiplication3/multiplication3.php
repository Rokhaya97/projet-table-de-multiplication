    <!DOCTYPE html>
    <html lang="fr">
    <head>
       <title>Atelier 3 multiplication</title>
    <meta charset="utf-8">
        <link rel="stylesheet" href="style3/bootstrap.min.css">
        <link rel="stylesheet" href="style3/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    </head>
    <body>
         <div class="container mt-5" style="background-color:#e690d3;">
               <div class="row mt-2 d-flex justify-content-center">
                  <div class="col-2"><a href="../principale.php" class="btn btn-dark animated infinite tada delay-1s">Acceuil</a></div>
                  <div class="col-2"><a href="../multiplication1/multiplication.php" class="btn btn-dark animated infinite tada delay-1s">Etape1</a></div>
                   <div class="col-2"><a href="../multiplication2/checkmultiple.php" class="btn btn-dark animated infinite tada delay-2s">Etape2</a></div>
                   <div class="col-2"><a href="../multiplication4/multiplication4.php" class="btn btn-dark animated infinite tada delay-3s">Etape4</a></div>
               </div>
            </div>
                 <div class="container jumbotron" style="background-color:#510a41;">
                     <div class="card card-info">
                         <div class="card-heiding"><h1 class="card-title" style="background-color: #510a41; text-align: center; color: white;">Etape 3: cochez pour voir les questions</h1></div>
                         <div class="card-body">
                            <form method="POST" action="multiplication3.php">
                             <div class="row mt-1">
                                 <div class="col-6">
                                     <?php
                                      for ($i=0; $i <=5 ; $i++) { 
                                       echo "<div class='custom-control custom-switch'>
                                                  <input type='checkbox' class='custom-control-input' name='check[]' id='$i' value='$i'>
                                                  <label class='custom-control-label' for='$i'>la table $i</label>
                                             </div>";
                                             echo "<br>";
                                     } ?>
                                 </div>
                                 <div class="col-6">
                                     <?php
                                      for ($i=6; $i <=10 ; $i++) { 
                                       echo "<div class='custom-control custom-switch'>
                                                  <input type='checkbox' class='custom-control-input' name='check[]' id='$i' value='$i'>
                                                  <label class='custom-control-label' for='$i'>la table $i</label>
                                             </div>";
                                             echo "<br>";
                                     } ?>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-12"></div>
                             </div>
                             <div class="row mt-2">
                                     <div class="col-6">
                                        <div class="button"><input type="submit" name="sub" value="voir la question" style="border-radius: 15px; color: white; background-color: black;"></div>
                                     </div>
                                     <div class="col-6">
                                         <div class="button"><input type="reset" value="Annuler" style="border-radius: 15px; color: white; background-color: black;"></div>
                                     </div>
                              </div>
                              </form>
                             </div>
                         </div>
                     </div>

                 </div>
            <div class="container jumbotron">
                <div class="card card-info">
                    <div class="card-heiding"></div>
                        <div class="card-body" style="background-color: #bb5da6;">
                           <form action="traitement.php" method="post">
            <?php
            if (!empty($_POST) && isset($_POST['check']))
                foreach ($_POST['check'] as $table) :
                    ?>
                    <h2>La table  <?php echo $table ?></h2>
                       <!-- recuperation du nombre aleatoire -->
                       <?php
                        $randnumb = rand(0,10);
                        $resultat = $table * $randnumb;
                        ?>
                        <p style="font-size: 25px;"><?php echo $table?> x <?php echo $randnumb?> = ?</p>
                        <input type="text" name="reponse[]">
                        <input type="hidden" name="resultat[]" value="<?= $resultat ?>">
                        <input type="hidden" name="question[]" value="<?php echo $table?> x <?php echo $randnumb?> ?">
                    <br>
                    <div>
                        <div class='mt-2'>
                            <input type='submit' id="validmultiple" value='Valider les réponses' style="border-radius: 15px; color: white; background-color: black;">
                        </div>
                    </div>
                 <?php endforeach ?>
                      </form>
                      </div>
                    </div>
                </div>
    </body>
    </html>