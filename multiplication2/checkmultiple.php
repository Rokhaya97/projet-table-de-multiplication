<!DOCTYPE html>
<html>
<head>
	<title>multiplication 2</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../style/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>
      <div class="container mt-5" style="background-color:#e690d3;">
               <div class="row mt-2 d-flex justify-content-center">
                  <div class="col-2"><a href="../principale.php" class="btn btn-dark animated infinite tada delay-1s">Acceuil</a></div>
                   <div class="col-2"><a href="../multiplication1/multiplication.php" class="btn btn-dark animated infinite tada delay-2s">Etape1</a></div>
                   <div class="col-2"><a href="../multiplication3/multiplication3.php" class="btn btn-dark animated infinite tada delay-3s">Etape3</a></div>
                   <div class="col-2"><a href="../multiplication4/multiplication4.php" class="btn btn-dark animated infinite tada delay-4s">Etape4</a></div>
               </div>
            </div>
    <div class="container jumbotron mt-2">
    	<div class="card panel-secondary"><h2 style="background-color:#510a41; text-align: center; color: white; ">ETAPE2: Choisir votre table de multiplication</h2>
    		<div class="card-heiding"></div>
    		<div class="card-body">
    		    <form action="" method="POST">

    		       <div class="row">
    		       	  <div class="col-6"> 
                           <?php 
                           include "model/mesfonctions.php";
                               check("table 1","t1","table1","1");
                               check("table 2","t2","table2","2");
                               check("table 3","t3","table3","3");
                               check("table 4","t4","table4","4");
                               check("table 5","t5","table5","5");
                            ?>
                      </div> 
                      <div class="col-6">
                      	   <?php 
                               check("table 6","t6","table6","6");
                               check("table 7","t7","table7","7");
                               check("table 8","t8","table8","8");
                               check("table 9","t9","table9","9");
                               check("table 10","t10","table10","10");
                            ?>           
                      </div>
                   </div>
                   <input style="border-radius: 15px; background-color: black; color: white;" type="submit" name="valider" value="choisir la page">
                 </form>
                 <hr>
                 <div class="mt-2"> 
                  <?php 

                  for ($i=1; $i <=10; $i++) { 
                    if (isset($_POST['table'.$i])) {
         			          echo "<p style='font-size:20px;'>"."la table multiplication de:".$i."<p>";
         			                  calcul($i);
                             	}  	
                    
                       }          	
                   ?>
                    </div>

    		</div>
    	</div>
        <div class="d-flex justify-content-end"><a href="checkmultiple.php"><input style="border-radius: 15px; background-color: black; color: white;" type="submit" name="valider" value="Reprendre"></a></div>
    </div>
</body>
</html>