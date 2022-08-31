<?php 

	$nomes = array('João','José','Paulo','Pedro');

	foreach ($nomes as $item) {
		echo "<br/>".$item;
	}

 ?>

<br/><br/><br/><br/>

 <?php 


 	for ($x=1; $x <100; $x++){
 		if ($x == 10)
 			goto desvio;

 		echo "<br/>".$x;
 	}
 	desvio:
 	echo "<br/> Pronto, aqui está o desvio."

  ?>