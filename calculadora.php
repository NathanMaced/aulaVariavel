<?php 

	$operador = 1;
	$num1 = 10;
	$num2 = 20;
	$result = 0.0;
	$operacao = "";

	function somaValor ($num1, $num2){
		return ($num1 + $num2);
	}

	switch ($operador) {
		case 1: $result = somaValor ($num1,$num2);
				$operacao = "Soma";
		break;

		case 2: echo "Subtraindo";
		break;

		case 3: echo "Multiplicando";
		break;

		case 4: echo "Dividindo";
		break;

		default: echo "Saindo";
		break; 
			
	}

	echo "O resultado da ".$operacao. " é ".$result;

 ?>