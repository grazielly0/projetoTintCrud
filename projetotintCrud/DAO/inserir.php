<?php

namespace PHP\Modelo\DAO;
require_once('conexao.php');

use PHP\Modelo\DAO\inserir;
use PHP\Modelo\DAO\conexao; 

class inserir{

    function cadastarCliente(Conexao $conexao,
                                    string $cpf,
                                    string $nome,
                                    string $endereco,
                                    string $telefone,
                                    float $total
                                    ){
        
try{
    $conn = $conexao->conectar();//abrir o banco  
    $sql = "Insert into cliente (codigo, nome, telefone, endereco , total)
          values('$cpf','$nome','$telefone','$endereco','$total')";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
    //verificar resultado 
    if ($result){
        return "<br><br>Inserido com sucesso!";

    }

    return "<br><br>Não Inserido!";
}                           
                                        
catch(Except $erro)
{

return "<br><br>Algo deu errado".$erro;

}

    }//fim do método 

    function cadastrarFuncionario(Conexao $conexao,
                                        string $cpf,
                                        string $nome,
                                        string $endereco,
                                        string $telefone,
                                        float $salario ){

try{
$conn = $conexao->conectar();//abrir o banco  
$sql = "Insert into funcionario(codigo, nome, endereco, telefone , salario)
values('$cpf','$nome','$endereco','$telefone','$salario')";
$result = mysqli_query($conn,$sql);
mysqli_close($conn);
//verificar resultado 
if ($result){
return "<br><br>Inserido com sucesso!";

}

return "<br><br>Não Inserido!";
}                           
        
catch(Except $erro)
{

return "<br><br>Algo deu errado".$erro;

}

}//fim do método 


}//fim da classe 

?>