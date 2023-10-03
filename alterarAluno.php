<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $arqAluno = fopen("alunos.txt", "r") or die ("erro ao abrir");
        $arqOut = fopen("arqTemp.txt", "a+") or die("erro ao criar arquivo temporario");
        $novoNome = $_POST["nome"];
        $novaMatricula = $_POST["matricula"];
        $novoEmail = $_POST["email"];
        $novoPeriodo = $S_POST["periodo"];

        $x=0;

        $linhas[] = fgets($arqAluno);
		$colunaDados = explode(";", $linhas[$x]);
		$nome = $colunaDados[0];
		$email = $colunaDados[2];
        $periodo = $colunaDados[3];
        $matricula = $colunaDados[1];

        $scriptLinha = "{$nome};{$matricula};{$email};{$periodo};";
        fwrite($arqOut, $scriptLinha);

        $x++;

          while(!feof($arqAluno)) {
            $linhas[] = fgets($arqAluno);
			$colunaDados = explode(";", $linhas[$x]);
			$nome = $colunaDados[0];
            $matricula = $colunaDados[1];
			$email = $colunaDados[2];
            $periodo = $colunaDados[3];

            if($novaMatricula == $matricula){
                $nome = $novoNome;
                $email = $novoEmail;
                $periodo = $novoPeriodo;

                $scriptLinha = "\n{$nome};{$matricula};{$email};{$periodo};";
                fwrite($arqOut, $scriptLinha);

            }
            else{
                $scriptLinha = "\n{$nome};{$matricula};{$email};{$periodo};";
                fwrite($arqOut, $scriptLinha);
            }
            $x++;
          }
          copy("arqTemp.txt","alunos.txt");

          fclose($arqOut);
          fclose($arqAluno);
          unlink('arqTemp.txt');
          $resposta = "ok";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Aluno</title>
</head>
<body>
    <h1>CRUD - Aluno</h1>
    <?php

        if($resposta == "ok") {
            echo "Alteração feita com sucesso!";
        } else {
            echo "Algo deu errado. Tente novamente!";
        }
    ?>
</body>
</html>