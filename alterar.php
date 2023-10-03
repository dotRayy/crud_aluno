<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

$nome = "";
$email = "";
$periodo = "";
$matricula = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $destino = $_GET['linha'];

    $arqAluno = fopen("alunos.txt", "r") or die ("Erro ao abrir o arquivo");

    // Lê todas as linhas até chegar à linha desejada
    $linhaAtual = 0;
    while (!feof($arqAluno)) {
        $linha = fgets($arqAluno);

        // Verifica se a linha atual é a que queremos
        if ($linhaAtual == $destino) {
            $colunaDados = explode(";", $linha);
            $nome = $colunaDados[0];
            $matricula = $colunaDados[1];
            $email = $colunaDados[2];
            $periodo = $colunaDados[3];
            break;
        }
        $linhaAtual++;
    }

    fclose($arqAluno);
}

?>

    <form action="alterarAluno.php" method="POST">

            <label for="nome">Nome
            <input type="text" id="nome" name="nome" value = "<?php echo $nome; ?>">

            <label for="matricula">Matrícula</label>
            <input type="number" id="matricula" name="matricula" value="<?php echo $matricula; ?>" 
            <?php if ($_SERVER['REQUEST_METHOD'] == 'GET'){ 
                echo "readonly";
            } ?>>


            <label for="email">E-mail
            <input type="email" id="email" name="email" value = "<?php echo $email; ?>">

            <label for="periodo">Período
            <select id="periodo" name="periodo">
                <option value="1" <?php if ($periodo == 1) echo "selected"; ?>>1° período</option>
                <option value="2" <?php if ($periodo == 2) echo "selected"; ?>>2° período</option>
                <option value="3" <?php if ($periodo == 3) echo "selected"; ?>>3° período</option>
                <option value="4" <?php if ($periodo == 4) echo "selected"; ?>>4° período</option>
                <option value="5" <?php if ($periodo == 5) echo "selected"; ?>>5° período</option>
            </select>


            <input type="submit" value="Alterar aluno">

    </form>

</body>
</html>