<?php

$total = $_GET['total'];
//echo "O valor total do pedido é: R$ $total";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGAMENTO</title>
    <link rel="stylesheet" href="pagamento.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
        </div>
        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
        <script>
            new window.VLibras.Widget('https://vlibras.gov.br/app');
        </script>
        <h1>Pagamento</h1>


        <div class="info">
            <p>O valor total do pedido é: <strong>R$ <?= number_format($total, 2, ',', '.') ?></strong></p>
        </div>


        <form method="POST" action="">

            <div class="payment-options">
                <label>Forma de pagamento</label><br>


                <label>
                    <input type="checkbox" name="opcao[]" value="cartao-credito"> Cartão de Crédito
                </label>
                <label for="numero-cartao-debito">Nome do titular</label>
                <input type="text" name="nome-titular" id="nome-titular" placeholder="Nome do titular" /><br>

                <label for="numero-cartao">Número do Cartão de Crédito</label>
                <input type="number" name="numero-cartao" id="numero-cartao"
                    placeholder="Número do cartão de crédito" /><br>

                <label for="validade">Validade (MM/AA)</label>
                <input type="text" name="validade" id="validade" placeholder="MM/AA" maxlength="10" /><br>

                <label for="cvv">CVV</label>
                <input type="number" name="cvv" id="cvv" placeholder="Código de segurança" maxlength="3" /><br><br>


                <label>
                    <input type="checkbox" name="opcao[]" value="cartao-debito"> Cartão de Débito
                </label>
                <label for="numero-cartao-debito">Nome do titular</label>
                <input type="text" name="nome-titular" id="nome-titular" placeholder="Nome do titular" /><br>

                <label for="numero-cartao-debito">Número do Cartão de Débito</label>
                <input type="number" name="numero-cartao-debito" id="numero-cartao-debito"
                    placeholder="Número do cartão de débito" /><br>

                <label for="validade-debito">Validade (MM/AA)</label>
                <input type="text" name="validade-debito" id="validade-debito" placeholder="MM/AA" maxlength="10" /><br>

                <label for="cvv-debito">CVV</label>
                <input type="text" name="cvv-debito" id="cvv-debito" placeholder="Código de segurança"
                    maxlength="3" /><br><br>

                <label>
                    <input type="checkbox" name="opcao[]" value="dinheiro"> Dinheiro
                </label>
                <label for="troco">Troco para:</label>
                <input type="number" name="troco" id="troco" placeholder="Valor do troco" /><br>
                <label>
                    <input type="checkbox" name="nao-quer-troco"> Não quero troco
                </label><br>
            </div>

            <button class="submit-btn"><a href="concluido.html">Pagar</a></button>
        </form>
    </div>
</body>

</html>