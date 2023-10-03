<?php
    $nome= "";
    $matricula= "";
    $email= "";
    $periodo= "";
    $arqAluno = fopen("alunos.txt", "r") or die("Erro ao abrir arquivo");
    $arqDisc = fopen("alunosNovo.txt", "w") or die("Erro ao abrir arquivo");
    $x = 0;
    $linha[] = fgets($arqAluno);

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $procurar = $_POST["procurar"];

        while(!feof($arqAluno){

        $linha[] = fgets($arqAluno);
        $colunaDados = explode(";", $linha[$x]);
        $matricula = $colunaDados[1];

        if()

        $nome = $colunaDados[0];

        $email = $colunaDados[2];
        $periodo = $colunaDados[3];

        $texto = $nome ";" .
        $matricula  ";" . $email ";" $periodo ";";
          fwrite($arqAluno, $texto);
          fclose($arqAluno);
  ?>