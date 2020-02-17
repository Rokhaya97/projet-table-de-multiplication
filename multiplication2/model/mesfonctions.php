<?php 
    function check($nom,$id,$name,$valeur){
    	 echo " <div class='custom-control custom-switch'>
                          <input type='checkbox' class='custom-control-input' name='$name' id='$id' value='$valeur'>
                          <label class='custom-control-label' for='$id'>$nom</label>
                        </div> ";
         }

         function calcul($val){
         	for ($i=0; $i <10 ; $i++) { 
         		echo $val."*".$i."=".$val*$i."<br>";
         	}
         }

 ?>