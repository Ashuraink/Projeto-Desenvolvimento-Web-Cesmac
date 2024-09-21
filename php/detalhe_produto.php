<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Array com os produtos
$produtos = [
  [
    "nome" => "Snack Saudável",
    "descricao" => "Snack feito com frutas desidratadas",
    "preco" => 15.90
  ],
  [
    "nome" => "Refeição Congelada Fitness",
    "descricao" => "Refeição balanceada, rica em proteínas",
    "preco" => 25.99
  ],
  [
    "nome" => "Suco Natural Detox",
    "descricao" => "Suco natural à base de frutas e vegetais",
    "preco" => 8.75
  ],
];

// Verifica se o produto foi selecionado
if (isset($_GET['produto']) && is_numeric($_GET['produto'])) {
  $produto_index = intval($_GET['produto']);

  if (array_key_exists($produto_index, $produtos)) {
    $produto = $produtos[$produto_index];
  } else {
    die("Produto não encontrado.");
  }
} else {
  die("Produto não especificado.");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalhes do Produto - Sabor 2024</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <div class="form-container">
    <h2><?php echo $produto['nome']; ?></h2>
    <p><?php echo $produto['descricao']; ?></p>
    <p>Preço: R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
    <a href="produtos.php">Voltar para a lista de produtos</a>
  </div>

</body>

</html>