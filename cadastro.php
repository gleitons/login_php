<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Cadastrar Veiculos</title>
</head>
<body>
    <?php 
    include "./lib/header.php";
    headerM();
    ?>
    <main>
    <form action="./lib/valida.php" method="POST" class="cadastroVeiculo">
        <p>
            <label for="">Modelo: </label>
            <input type="text" name="modelo" id="box_modelo">
        </p>
        <p>
            <label for="">Marca: </label>
            <input type="text" name="marca" id="box_marca">
        </p>
        <p>
            <label for="">Ano: </label>
            <input type="number" name="ano" id="box_ano">
        </p>
        <p>
            <label for="">Preço: </label>
            <input type="number" name="preco" id="box_preco">
        </p>
       
            <p>
                <input type="submit" value="Cadastrar">
                <input type="button" onclick="bt_Cancelar()" value="Cancelar">
                
            </p>
        
    </form>
    
    </main>
    <footer>

    </footer>
    <script src="./assets/js/js.js"></script>
</body>
</html>