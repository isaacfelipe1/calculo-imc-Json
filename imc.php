<?php
// Verificando se foram enviados os parâmetros de altura e peso via GET
if (isset($_GET['altura']) && isset($_GET['peso'])) {
    // Obtém os valores de altura e peso da requisição
    $altura = floatval($_GET['altura']);
    $peso = floatval($_GET['peso']);
    // Calculando o índice de massa corporal (IMC)
    $imc = $peso / ($altura * $altura);
    // Definindo a categoria com base no IMC
    if ($imc < 17) {
        $categoria = 'Muito abaixo do peso';
    } elseif ($imc <= 18.49) {
        $categoria = 'Abaixo do Peso';
    } elseif ($imc <= 24.99) {
        $categoria = 'Peso Normal';
    } elseif ($imc<=29.99){
        $categoria = 'Acima do Peso';

    }elseif ($imc<=34.99){
        $categoria = 'Obesidade 1';

    }elseif ($imc<=39.99){
        $categoria = 'Obesidade 2';
    }
    else {
        $categoria = 'Obesidade 3';
    }
    // Montando o array com os resultados
    $resultado = [
        'imc' => $imc,
        'classificacao' => $categoria
    ];
    // Convertendo o array em formato JSON
    $json = json_encode($resultado);

    // Definindo o cabeçalho da resposta como JSON
    header('Content-Type: application/json');

    // Enviando o JSON como resposta
    echo $json;
} else {
    // Caso os parâmetros não sejam fornecidos corretamente: retorna uma mensangem
    echo 'Parâmetros altura e peso são obrigatórios e devem ser números válidos.';
}
?>
