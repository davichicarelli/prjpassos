<?php
//ENTRADAS//
$resultadoContagem = "";
$valorInicial = filter_input(INPUT_GET,"valorinicial", FILTER_VALIDATE_INT);
$valorFinal = filter_input(INPUT_GET,"valorfinal", FILTER_VALIDATE_INT);
$passos = filter_input(INPUT_GET,"passos", FILTER_VALIDATE_INT);

//PROCESSAMENTO//
if ($valorInicial==false|| $valorFinal==false || $passos==false) {
    $resultadoContagem = "ERRO! Valores Inválidos.";
} else if ($valorInicial < $valorFinal && $passos < $valorFinal) {
    for ($contador = $valorInicial; $contador <= $valorFinal; $contador += $passos) {
    
    
     if ($contador == $valorInicial) {
        $resultadoContagem .= "<li> $valorInicial - INÍCIO </li>";
     } else if ($contador + $passos > $valorFinal) {
        $resultadoContagem .= "<li> $valorFinal - FIM </li>";
     } else {
        $resultadoContagem .= "<li> $contador </li>";
     }

  }
  } else {
$resultadoContagem = "ERRO! Valores Inválidos.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa Contagem</title>
    <link rel="stylesheet" href="./../css/estilo.css">
</head>
<body>
    <h1>Contagem</h1>
    <ul>
<?php 
//SAÍDA//
echo $resultadoContagem;
?>
    </ul>
    <a href="../index.html">Voltar</a>
</body>
</html>