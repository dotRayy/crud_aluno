<!DOCTYPE html>
<html>
<head>
    <title>CRUD - Aluno</title>
    <style>
    form{
        border:dotted;
        padding: 5px;
        background-color: #faf0ca;
    }
    </style>
</head>
<body>
    <h1>CRUD - Aluno</h1>
    <hr>
    <h2>Adicionar</h2>
    <form action="adicionarAluno.php" method="POST">

            <label for="nome">Nome
            <input type="text" id="nome" name="nome">
            <br><br>
            <label for="matricula">Matrícula
            <input type="number" id="matricula" name="matricula">
            <br><br>
            <label for="email">E-mail
            <input type="email" id="email" name="email">
            <br><br>
            <label for="periodo">Período
            <select id="periodo" name="periodo">
                <option value="1">1° período</option>
                <option value="2">2° período</option>
                <option value="3">3° periodo</option>
                <option value="4">4° periodo</option>
                <option value="5">5° periodo</option>
            </select>
            <br><br>
            <input type="submit" value="Incluir Aluno">
            <br>

    </form>
            <a href="adicionarAluno.php">
                Incluir Aluno
            </a>
            <a href="alterar.php">
                Alterar Aluno
            </a>
            <a href="listar.php">
                Listar Aluno
            </a>
            <a href="buscarAluno.html">
                Buscar Aluno
            </a>
            <a href="excluir.php">
                Excluir Aluno
           </a>

</body>
</html>