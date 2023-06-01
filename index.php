<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        
        <input type="number" name="idade">
        <button type="submit" name="Verificar">Converta</button>
    </form>

    <?php

$idade;

if(isset($_POST["Verificar"])){
    $idade = $_POST["idade"];
}

if ($idade >=16){

    echo "Você tem direito a voto";
}

else {
    echo "Você não tem direito ao voto";
}

?>
</body>
</html>