<!DOCTYPE html>
<html>
<head>
	<title>table de multiplication</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../style/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>
        <div class="container mt-5" style="background-color:#510a41;">
               <div class="row mt-2">
                  <div class="col-2"><a href="../principale.php" class="btn btn-dark animated infinite tada delay-1s">Acceuil</a></div>
                   <div class="col-2"><a href="../multiplication2/checkmultiple.php" class="btn btn-dark animated infinite tada delay-2s">Etape2</a></div>
                   <div class="col-2"><a href="../multiplication3/multiplication3.php" class="btn btn-dark animated infinite tada delay-3s">Etape3</a></div>
                   <div class="col-2"><a href="../multiplication4/multiplication4.php" class="btn btn-dark animated infinite tada delay-4s">Etape4</a></div>
               </div>
            </div>
   <div class="container jumbotron mt-5" style="margin-top: 2%!important; background-color: #510a41;">
   	  <div class="card card-secondary">
   	  	<div class="card-heiding"><h2 style="text-align: center; background-color: #510a41; color: white;">choisir une des table</h2></div>
   	  	<div class="card-body">
   	  		<form action="" method="POST">
   	  		   <select class="custom-select custom-select-lg mb-3" style="width:auto;" name="mestables">
   	  			  <option value="default">Selectionner une table de multiplication</option>
   	  			  <option value="table1">table de multiplication 1</option>
   	  			  <option value="table2">table de multiplication 2</option>
   	  			  <option value="table3">table de multiplication 3</option>
   	  			  <option value="table4">table de multiplication 4</option>
   	  			  <option value="table5">table de multiplication 5</option>
   	  			  <option value="table6">table de multiplication 6</option>
   	  			  <option value="table7">table de multiplication 7</option>
   	  			  <option value="table8">table de multiplication 8</option>
   	  			  <option value="table9">table de multiplication 9</option>
              <option value="table10">table de multiplication 10</option>
   	  		   </select>
   	          <input type="submit" name="valider" value="Voir la table" style="background-color: black; color: white; border-radius: 10px;">
                <input type="reset" value="Annuler" style="background-color: black; color: white; border-radius: 15px;" class="d-flex">
   	  		</form>
   	  	</div>
   	  </div>
   </div>
   	  		<?php 
   	  		  // la fonction qui multiplie
   	  		  function multiple($val,$i){
   	  			for ($i=0; $i <=10 ; $i++) { 
   	  				$resultat=$val*$i;
   	  				echo "<p style='color:black; font-size:20px; text-align:center;'>".$val."*".$i."=".$resultat."</p>";
   	  			}
   	  		  }
               if (isset($_POST['valider'])){
               	if ($_POST['mestables']=='table1') {
               		$_POST['default']='table1';

                     echo "<div class='container well'>
                           <div class='card card-dark'>
                            <div class='card-heiding'></div>
                            <div class='card-body' style='background-color:#e265c6;'>";
               		          multiple(1,1);
                               echo "</div></div></div>";
               	  }	  	
               }

               if (isset($_POST['valider'])){
               	if ($_POST['mestables']=='table2') {
                     echo "<div class='container well'>
                           <div class='card card-dark'>
                            <div class='card-heiding'></div>
                            <div class='card-body'  style='background-color:#e265c6;'>";
               		          multiple(2,1);
                               echo "</div></div></div>";
               	  }	  	
               }

               if (isset($_POST['valider'])){
               	if ($_POST['mestables']=='table3') {
                     echo "<div class='container well'>
                           <div class='card card-dark'>
                            <div class='card-heiding'></div>
                            <div class='card-body'  style='background-color:#e265c6;'>";
               		       multiple(3,1);
                            echo "</div></div></div>";
               	  }	  	
               }

               if (isset($_POST['valider'])){
               	if ($_POST['mestables']=='table4') {
                     echo "<div class='container well'>
                           <div class='card card-dark'>
                            <div class='card-heiding'></div>
                            <div class='card-body'  style='background-color:#e265c6;'>";
               		        multiple(4,1);
                             echo "</div></div></div>";
               	  }	  	
               }
               if (isset($_POST['valider'])){
               	if ($_POST['mestables']=='table5') {
                     echo "<div class='container well'>
                           <div class='card card-dark'>
                            <div class='card-heiding'></div>
                            <div class='card-body'  style='background-color:#e265c6;'>";
               		       multiple(5,1);
                            echo "</div></div></div>";
               	  }	  	
               }

               if (isset($_POST['valider'])){
               	if ($_POST['mestables']=='table6') {
                     echo "<div class='container well'>
                           <div class='card card-dark'>
                            <div class='card-heiding'></div>
                            <div class='card-body'  style='background-color:#e265c6;'>";
               		       multiple(6,1);
                            echo "</div></div></div>";
               	  }	  	
               }
               if (isset($_POST['valider'])){
               	if ($_POST['mestables']=='table7') {
                     echo "<div class='container well'>
                           <div class='card card-dark'>
                            <div class='card-heiding'></div>
                            <div class='card-body'  style='background-color:#e265c6;'>";
               		       multiple(7,1);
                            echo "</div></div></div>";
               	  }	  	
               }
               if (isset($_POST['valider'])){
               	if ($_POST['mestables']=='table8') {
                     echo "<div class='container well'>
                           <div class='card card-dark'>
                            <div class='card-heiding'></div>
                            <div class='card-body'  style='background-color:#e265c6;'>";
               		       multiple(8,1);
                            echo "</div></div></div>";
               	  }	  	
               }
               if (isset($_POST['valider'])){
               	if ($_POST['mestables']=='table9') {
                     echo "<div class='container well'>
                           <div class='card card-dark'>
                            <div class='card-heiding'></div>
                            <div class='card-body'  style='background-color:#e265c6;'>";
               		       multiple(9,1);
                            echo "</div></div></div>";
               	  }	  	
               }
                if (isset($_POST['valider'])){
               	if ($_POST['mestables']=='table10') {
                     echo "<div class='container well'>
                           <div class='card card-dark'>
                            <div class='card-heiding'></div>
                            <div class='card-body'  style='background-color:#e265c6;'>";
               		       multiple(10,1);
                            echo "</div></div></div>";
               	  }	  	
               }
   	  		 ?>
</body>
</html>