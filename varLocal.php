<?php 

	$ano = 2020; //Varaivel Local no script

	//implememto de uma função
	function exibir ($parametro){ //Variavel como paramentro
		$parametro = $parametro + 4;
		return $parametro;
	}

	echo "Estamos em ".$ano. " e daqui a 4 anos estaremos em ".exibir($ano);

 ?>