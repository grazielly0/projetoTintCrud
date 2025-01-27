<?php

namespace PHP\Modelo\DAO;
require_once('conexao.php');
use PHP\Modelo\DAO\conexao;

class consultar{
    function consultarClienteIndividuais(
        conexao $conexao, 
        int $cpf 
    )
    {
        try{
            $conn = $conexao->conectar();
          $sql =  "select * from cliente where codigo = "
          $result = mysqli_query($conn, $sql);

          while ($dados = mysqli_fetch_Array($result)){
            if($dados['codigo'] == $cpf){
                echo "<br><br>CPF:".$dados['cpf'].      
                    "<br><br>NOME:".$dados['nome'].
                    "<br><br>ENDERECO:".$dados['endereco'].
                    "<br><br>TELEFONE:".$dados['telefone'].
                    "<br><br>TOTAL:".$dados['total'];
                return;//finalizar o while
            }
            return "Código digitado inválido!";
          }

        }catch(Except $erro)
        {
            echo $erro; 
        }
        
        }//fdim do consultar individual 
}// fim da classe 