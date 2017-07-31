<?php
	class Calculadora {
		public $numero1;
		public $numero2;
		public $totais = array();

		public function __construct() {
		}

		public function setNumero1($numero) {
			if(is_numeric($numero)){
				$this->numero1 = $numero;
			} else {
				echo "Entrada numero1 não é um valor numérico.<br>";
			}
		}

		public function setNumero2($numero) {
			if(is_numeric($numero)){
				$this->numero2 = $numero;
			} else {
				echo "Entrada numero2 não é um valor numérico.<br>";
			}
		}

		public function soma() {
			$soma = $this->numero1 + $this->numero2;
			array_push($this->totais, $soma);
			return $soma;
		}

		public function imprimeTotais() {
			echo 'VAR_DUMP: ';
			echo var_dump($this->totais);
			echo '<br>';
			echo 'VAR_DUMP REVERSO: ';
			echo var_dump(array_reverse($this->totais));
		}

		public function maior() {
			if($this->numero1 > $this->numero2) {
				echo 'Numero1 é maior que Numero2.<br>';
			} elseif ($this->numero2 > $this->numero1) {
				echo 'Numero2 é maior que Numero1.<br>';
			} else {
				echo 'Numero1 e Numero2 possuem o mesmo valor.<br>';
			}
		}

		public function imprimeIntervalo() {
			if($this->numero1 > $this->numero2) {
				echo "Intervalo entre {$this->numero2} e {$this->numero1}: ";
				for($i = $this->numero2; $i < $this->numero1; $i++) {
					echo $i . " / ";
				}
				echo "<br>";
			} else {
				echo "Intervalo entre {$this->numero1} e {$this->numero2}: ";
				for($i = $this->numero1; $i < $this->numero2; $i++) {
					echo $i . " / ";
				}
				echo "<br>";
			}
		}
	}

	// Teste da Classe Calculcadora - Atribua 'true' a $executarTeste para exercutar.

	$executarTeste = false;

	if($executarTeste) {
		$calc = new Calculadora();

		echo 'Atribuindo 10 a Numero1 <br>';
		$calc->setNumero1(10);

		echo 'Atribuindo 15 a Numero2 <br>';
		$calc->setNumero2(15);

		echo $calc->soma() . '<br>';

		echo $calc->maior() . '<br>';

		echo $calc->imprimeTotais() . '<br>';

		$calc->imprimeIntervalo();

		echo 'Atribuindo -8 a Numero1 <br>';
		$calc->setNumero1(-8);

		echo 'Atribuindo 15 a Numero2 <br>';
		$calc->setNumero2(15);

		echo $calc->soma() . '<br>';

		echo $calc->maior() . '<br>';

		echo $calc->imprimeTotais() . '<br>';

		$calc->imprimeIntervalo();

		echo 'Atribuindo 20 a Numero1 <br>';
		$calc->setNumero1(20);

		echo 'Atribuindo -2 a Numero2 <br>';
		$calc->setNumero2(-2);

		echo $calc->soma() . '<br>';

		echo $calc->maior() . '<br>';

		echo $calc->imprimeTotais() . '<br>';

		$calc->imprimeIntervalo();
	}








