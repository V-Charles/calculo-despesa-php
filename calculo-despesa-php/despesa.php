<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Despesas</title>
</head>
<body>
    <main>
        <h1>Calculo de Despesas</h1>

        <form action="" method="post">
            <label for="total_despesa">Valor total da despesa:</label>
            <input type="number" name="total_despesa" id="id_despesa" placeholder="R$ 0,00" min="1" required><br><br>

            <label for="parcela">Selecione o número de parcelas:</label>
            <input type="number" name="parcela" id="id-parcela" min="2" max="12" required><br><br>

            <input type="submit" value="Calcular"><br><br>
        </form>


        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $totalDespesa = $_POST["total_despesa"];
                $parcelas = $_POST["parcela"];
                $saldoAtualizado = $totalDespesa;

                for ($i = 1; $i <= $parcelas; $i++) {
                    $valor_parcela = $totalDespesa / $parcelas;
                    $saldoAtualizado = $saldoAtualizado - $valor_parcela;

                    echo "<hr>";
                    echo "Parcela $i de $parcelas - Valor: R$ $valor_parcela - Saldo após pagamento: R$ $saldoAtualizado <br>";
                }
            }
        ?>
    </main>
</body>
</html>
