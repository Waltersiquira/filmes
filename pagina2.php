<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/c/c0/Clapperboard_Icon.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos/style.css">
    <title>GuiFilmes</title>
</head>
<body class='corpo'>
    <?php require_once 'includes/projeto1.php' ?>
    <?php 
    $id = $_GET['i'] ?? 1;
    $busca = $p1->query("select * from filmes where idfilme = '$id'");
    if (!$busca){
        echo 'erro';
    } else {
        if ($busca->num_rows == 0){
            echo 'erro';
        } else {
            while ($reg=$busca->fetch_object()){
                echo "<img src='$reg->imagem' width='240'> <br> $reg->nome <hr> $reg->descrição <hr> nota: $reg->nota/10.0 <br> gênero: $reg->gênero <br> produtora: $reg->produtora <br>";
            }
        }
    }
        ?>
    </table>
</body>
</html>