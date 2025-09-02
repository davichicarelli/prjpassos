<?php
//ENTRADAS//
$resultadoContagem = "";
$valorInicial = $_GET["valorinicial"];
$valorFinal = $_GET["valorfinal"];
$passos = $_GET["passos"];

//PROCESSAMENTO//
for ($contador = $valorInicial; $contador <= $valorFinal; $contador += $passos) {
    
    
    if ($contador == $valorInicial) {
        $resultadoContagem .= "<li> $valorInicial - INÍCIO </li>";
    } elseif ($contador + $passos > $valorFinal) {
        $resultadoContagem .= "<li> $valorFinal - FIM </li>";
    } else {
        $resultadoContagem .= "<li> $contador </li>";
    }


}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa Contagem</title>
</head>
<body>
    <h1>Contagem</h1>
    <ul>
<?php 
//SAÍDA//
echo $resultadoContagem; 
?>
    </ul>
</body>
</html>