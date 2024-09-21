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
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produtos - Sabor 2024</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <div class="form-container">
    <h2>Escolha os Produtos</h2>
    <ul>
      <?php foreach ($produtos as $index => $produto): ?>
        <li>
          <a href="detalhe_produto.php?produto=<?php echo $index; ?>">
            <h3><?php echo $produto['nome']; ?></h3>
            <p><?php echo $produto['descricao']; ?></p>
            <p>Preço: R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

</body>

</html>