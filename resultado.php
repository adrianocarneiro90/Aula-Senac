<h1>Resultado da busca</h1>

<p>Resultados...</p>

<?php
if (isset($_POST['busca'])){  // GET and POST
    echo '<h2> Olá, ' . $_POST['busca'] . '</h2>';
}
?>
