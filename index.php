<?php require "inicio.php"; ?>

<h1>
    Meu Formulario
</h1>
<?php
if (isset($_POST['busca'])){  // GET or POST
    echo '<h2> Olá, ' . $_POST['busca'] . '. bem vindo!</h2>';
}
?>
<form method="POST" action="/resultado.php">
    <label for="campo_de_nome">Digite sua busca</label>
    <input name="busca" id="campo_de_nome" type="text" />
    <button type="submit">Enviar</button>
</form>

<?php require "fim.php" ?>