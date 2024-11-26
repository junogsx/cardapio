<?php

// Recebendo os dados do formulário
$quantidade1 = $_POST['quantidade1'];
$quantidade2 = $_POST['quantidade2'];
$quantidade3 = $_POST['quantidade3'];
$quantidade4 = $_POST['quantidade4'];
$quantidade5 = $_POST['quantidade5'];
$quantidade6 = $_POST['quantidade6'];
$quantidade7 = $_POST['quantidade7'];
$quantidade8 = $_POST['quantidade8'];
$quantidade9 = $_POST['quantidade9'];
$quantidade10 = $_POST['quantidade10'];
$quantidade11 = $_POST['quantidade11'];
$quantidade12 = $_POST['quantidade12'];
$observacao = $_POST['observacoes'];
$valorTotal = 0.00;

// Lanches
if (isset($_POST['opcao1'])) {
    $valorTotal += 8.90 * $quantidade1; // X-Burguer
}
if (isset($_POST['opcao2'])) {
    $valorTotal += 8.90 * $quantidade2; // X-Salada
}
if (isset($_POST['opcao3'])) {
    $valorTotal += 8.90 * $quantidade3; // X-Bacon
}

// Bebidas
if (isset($_POST['opcao4'])) {
    $valorTotal += 9.00 * $quantidade4; // Coca-Cola 2L
}
if (isset($_POST['opcao5'])) {
    $valorTotal += 9.00 * $quantidade5; // Fanta 2L
}
if (isset($_POST['opcao6'])) {
    $valorTotal += 9.00 * $quantidade6; // Guaraná 2L
}

// Porções
if (isset($_POST['opcao7'])) {
    $valorTotal += 20.00 * $quantidade7; // Iscas de Peixe
}
if (isset($_POST['opcao8'])) {
    $valorTotal += 12.00 * $quantidade8; // Batata Frita
}
if (isset($_POST['opcao9'])) {
    $valorTotal += 25.00 * $quantidade9; // Picanha
}

// Doces
if (isset($_POST['opcao10'])) {
    $valorTotal += 9.00 * $quantidade10; // Brigadeiro
}
if (isset($_POST['opcao11'])) {
    $valorTotal += 9.00 * $quantidade11; // Beijinho
}
if (isset($_POST['opcao12'])) {
    $valorTotal += 6.00 * $quantidade12; // Trufas
}

echo "Pedido realizado com sucesso! <br>";
echo "Sua conta ficou em R$ " . number_format($valorTotal, 2, ',', '.') . "<br>";
echo "<br><strong>Observações:</strong><br>" . htmlspecialchars($observacao);
echo "<br><br><a href='pagamento.php?total=$valorTotal'>Pagar</a>";
?>