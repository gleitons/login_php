<?php
include './lib/listar.php';
$car = exportList();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Lstar Carros  Cadastrados</title>
</head>
<body>
    <?php 
    include './lib/header.php';
    headerM();
    ?>
    <main>
    <table>
        <tr>
            <th class="c1">Modelo</th>
            <th class="c2">Marca</th>
            <th class="c1">Ano</th>
            <th class="c2">Preço</th>
            <th class="c1">opções</th>
        </tr>
        
            <?php
            for($i = 0; $i < count($car);$i++){
                if($i % 2 != 0) {
                    echo '<tr class="c1">';
                } else {
                    echo '<tr>';
                }
               
                echo '<td>'. $car[$i]['modelo'] .'</td>';
                echo '<td>'. $car[$i]['marca'] .'</td>';
                echo '<td>'. $car[$i]['ano'] .'</td>';
                echo '<td>'. $car[$i]['preco'] .'</td>';
                echo '<td><button onclick="editar()">Editar</button></td>';
                echo '<td><button onclick="deletar()">Deletar</button></td>';
                echo '</tr>';
                
            };
            ?>
        
    </table>
    </main>
    <footer>

    </footer>
    <script src="./assets/js/js.js"></script>
</body>
</html>