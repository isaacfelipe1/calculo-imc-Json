<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>  
<h1>IMC JSON</h1>
<!--- Criei um Formulário para pegar as informções de Altura e Peso e nas propriedade do formulário
coloquei action que envia para imc.php, onde será tratado todas as informações necessárias!--->
<div class="caixa-maior">
      <form action="imc.php" method="get">
        <label for="altura">Altura:</label>
        <input type="text" id="altura" name="altura" required placeholder="Metros">
        <br>
        <label for="peso">Peso:</label>
        <input type="text" id="peso" name="peso" required placeholder="KG">
        <br>
        <button type="submit">Calcular</button>
    </form>
</div>
  
</body>
</html>