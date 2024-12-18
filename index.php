<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/c/c0/Clapperboard_Icon.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos/style.css">
    <title>GuiFilmes</title>
</head>
<body>
    <?php require_once 'includes/projeto1.php' ?>
    <h1>GuiFilmes</h1>
    <hr>
    <table>
        <?php 
        $busca = $p1->query('select * from filmes order by nome');
        if (!$busca){
            echo 'erro';
        } else {
            if ($busca->num_rows == 0){
                echo 'erro';
            } else {
                while ($reg=$busca->fetch_object()){
                    echo "<tr><td><a href='pagina2.php?i=$reg->idfilme' style='text-align: center;'><img src='$reg->imagem' width='150'></a></td><td>$reg->nome</td></tr>";
                }
            }
        }
        ?>
    </table>
</body>
</html>