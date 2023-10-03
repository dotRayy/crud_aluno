<!DOCTYPE html>
<html>
<head>
    <style>
        table, tr, th, td {
            border: solid black 1px;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Alunos incluídos na lista</h1>
    <table>
       <tr>
        <th>Nome</th>
        <th>Matrícula</th>
        <th>E-mail</th>
        <th>Período</th>
       </tr>
<?php

    $arqAluno = fopen("alunos.txt", "r") or die("Erro ao abrir arquivo");

    $x = 1;
    $linha[] = fgets($arqAluno);

    while(!feof($arqAluno)){

        $linha[] = fgets($arqAluno);
        $colunaDados = explode(";", $linha[$x]);
        $nome = $colunaDados[0];
        $matricula = $colunaDados[1];
        $email = $colunaDados[2];
        $periodo = $colunaDados[3];

        echo "<tr>";
        echo "<td>". $nome . "</td>";
        echo "<td>". $matricula . "</td>";
        echo "<td>". $email . "</td>";
        echo "<td>". $periodo . "</td>";
        echo "<td><a href='alterar.php?linha=$x'>Alterar</a></td>";
        echo "<tr>";
        $x++;
    }
    fclose($arqAluno);
?>
</table>
</body>

</html>