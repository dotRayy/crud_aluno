<!DOCTYPE html>
<html>
<head>
    <title>Adicionar</title>
</head>
<body>
<?php
            $nome = $_POST['nome'];
            $matricula = $_POST['matricula'];
            $email = $_POST['email'];
            $periodo = $_POST['periodo'];

            $texto = "\n" . $nome . ";" . $matricula .  ";" . $email . ";" . $periodo . ";";

            // Se o arquivo não existir...
            if(!file_exists("alunos.txt")) {
            // ... criar um arquivo com o cabeçalho
                $arqAluno = fopen("alunos.txt", "w");
                $cabecalho = "Nome; Matrícula; Email; Período;";
                fwrite($arqAluno, $cabecalho);
                fwrite($arqAluno, $texto);
            } else {
                $arqAluno = fopen("alunos.txt", "a");
              fwrite($arqAluno, $texto);
            }
        fclose($arqAluno);
        echo "Deu tudo certo";
?>
 <a href="index.php">
                Voltar para o menu
            </a>
</body>
</html>


