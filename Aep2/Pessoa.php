<?php

    class  Pessoa{
        public $nome;
        public $data_nascimento;
        public $peso;
        public $altura;
        public $cpf;

        public  function getPessoa()
        {
            print_r($this);
        }
        public function _construct($nome, $data_nascimento, $peso, $altura, $cpf)
        {
            $this->nome = $nome;
			$this->dataNascimento = $data;
			$this->peso = $peso;
			$this->altura = $altura;
			$this->cpf = $cpf;
        }
        public function calculaImc()
         {
			$calc = (($this->altura * $this->altura)/$this->peso);
			if ($calc < 18.5) {
				echo "Valor do IMC: " . $calc;
				echo "<p>Abaixo do peso</p>";
			}
			if (($calc >= 18.5) && ($calc <= 24.9)) {
				echo "Valor do IMC: " . $calc;
				echo "<p>Peso normal</p>";
			}
			if (($calc >= 25) && ($calc <= 29.9)) {
				echo "Valor do IMC: " . $calc;
				echo "<p>Sobre peso</p>";
			}
			if (($calc >= 30) && ($calc <= 34.9)) {
				echo "Valor do IMC: " . $calc;
				echo "<p>Obesidade de 1 grau</p>";
			}
			if (($calc >= 35) && ($calc <= 39.9)) {
				echo "Valor do IMC: " . $calc;
				echo "<p>Obesidade de 2 grau</p>";
			}
			if ($calc > 40) {
				echo "Valor do IMC: " . $calc;
				echo "<p>Obesidade de 3 grau</p>";
			}
		}
        public function calcularIdade()
         {
			$dat = $this->dataNascimento;
			list($ano, $mes, $dia) = explode('/', $dat);
			$hoje = mktime(0, 0, 0, date('m'), date('d'), date('y'));
			$nascimento = mktime(0, 0, 0, $mes, $dia, $ano);
			$idade = floor((((($hoje - $nascimento)/60)/60)/24)/365.25);
			echo "Idade: " . $idade;
		}
        public function validaCPF($cpf = null) 
        {
            if(empty($cpf)) {
                echo "cpf invalido";
            }
            
            if (strlen($cpf) != 11) {
                echo "CPF invalido";
            }
      
            else if ($cpf == '00000000000' || 
                $cpf == '11111111111' || 
                $cpf == '22222222222' || 
                $cpf == '33333333333' || 
                $cpf == '44444444444' || 
                $cpf == '55555555555' || 
                $cpf == '66666666666' || 
                $cpf == '77777777777' || 
                $cpf == '88888888888' || 
                $cpf == '99999999999') {
                echo "CPF invalido";
             } else {   
                
                for ($t = 9; $t < 11; $t++) {
                    
                    for ($d = 0, $c = 0; $c < $t; $c++) {
                        $d += $cpf{$c} * (($t + 1) - $c);
                    }
                    $d = ((10 * $d) % 11) % 10;
                    if ($cpf{$c} != $d) {
                        echo "CPF invalido" ;
                    }
                }
                echo "cpf valido";
                
            }
        }
    }