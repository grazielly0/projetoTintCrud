<?php
    namespace PHP\Modelo\Telas;
    require_once ('..\Cliente.php');
    use PHP\Modelo\Cliente;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <form method="POST"> 
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Cpf</label>
  <input type="text" class="form-control" id="tCpf" name = "tCpf" placeholder="9999999999">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nome</label>
  <input type="text" class="form-control" id="tnome" name = "tNome" placeholder="Insira seu Nome">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Telefone</label>
  <input type="text" class="form-control" id="ttelefone" name = "tTelefone" placeholder="(99)9939-9999">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Endereço</label>
  <input type="text" class="form-control" id="tEndereco" name = "tEndereco" placeholder="Insira seu Endereço ">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Total de Compras </label>
  <input type="text" class="form-control" id="tTotal" name = "tTotal" placeholder="Insira o valor da Compra ">
</div>

<button type="submit">Cadastrar
        <?php
           if(isset( $cpf = $_POST['tCpf'])){;
            $nome = $_POST['tNome'];
            $telefone = $_POST['tTelefone'];
            $endereco = $_POST['tEndereco'];
            $total = $_POST['tTotal'];
            //instanciar 
            $cliente1 = new Cliente($cpf,
                                    $nome,
                                    $telefone,
                                    $endereco,
                                    $total);
           }

        ?>
</button>

</form> 

<?php
 echo $cliente1->imprimir();
?>

</body>
</html>
















    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">CPF</label>
  <input type="text" class="form-control" id="tCpf" placeholder="9999999999">
</div>
