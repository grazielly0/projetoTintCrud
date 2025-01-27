<?php
 namespace PHP\Modelo;
 require_once('Cliente.php');
 require_once('Funcionario.php');
 use PHP\Modelo\Cliente;
 use PHP\Modelo\Funcionario;
 
$cliente1 = new Cliente("12345678910",
                        "Grazy",
                        "1199999-0990",
                        "rua dubai, 65",
                         1500);


$funcionario1 = new Funcionario("23456789910",
                                "Xuxu",
                                "122134-0456",
                                "rua manda, 78",
                                6000);

//Visuaalizar os dados
echo $cliente1->imprimir();
echo $funcionario1->imprimir(); 


?>
