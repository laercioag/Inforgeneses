<?php

	include("calculadora.php");

	if($_SERVER["REQUEST_METHOD"] == "POST") {

		$numero1 = $_POST["numero1"];
		$numero2 = $_POST["numero2"];

		if(empty($numero1)) {
			echo "O campo numero1 está vazio.<br>";
		}

		if(empty($numero2)) {
			echo "O campo numero2 está vazio.<br>";
		}

		$calculadora = new Calculadora();

		$calculadora->setNumero1($numero1);
		$calculadora->setNumero2($numero2);
		echo "Soma = " . $calculadora->soma() . "<br>";
		echo $calculadora->imprimeTotais() . "<br>";
		echo $calculadora->maior();
		echo $calculadora->imprimeIntervalo();

	}