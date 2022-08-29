<?php 

	$operador = 1;
	$num1 = 10;
	$num2 = 20;
	$result;
	$operacao;

	function somaValor ($num1, $num2){
		return ($num1 + $num2);
	}

	switch ($operador) {
		case 1: $result = somaValor ($num1,$num2);
				$operacao = "Soma";
		break;
			
	}

	echo "O resultado da ".$operacao. " é ".$result;

 ?>