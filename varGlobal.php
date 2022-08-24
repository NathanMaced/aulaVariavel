<?php 

	$ano = 2020;

	//implememtação de uma função

	function exibir(){
		GLOBAL $ano; //definição de variavel global
		$ano++;
		return $ano;
	}

	echo "<br/> Ano: ".$ano;
	echo "<br/> Ano: ".exibir();
	echo "<br/> Ano: ".exibir();
	echo "<br/> Ano: ".$ano;

 ?>