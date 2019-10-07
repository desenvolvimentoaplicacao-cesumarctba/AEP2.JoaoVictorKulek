<?php

    require_once "Pessoa.php";
  
 $p2 = new Pessoa("joão victor",10042001,69,1.74, 11797008866);
 
 $p1->validaCPF(11797009955);
 $p1->calculaImc();
 $p1->calculaIdade();