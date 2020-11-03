<?php
include "public/components/Header/header.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/styles/tables.css">
    <link rel="stylesheet" href="public/styles/global.css">
    <link rel="stylesheet" href="public/components/Header/header.css">    
    <title>Tabelas</title>
</head>
<body>
    <main class="container">
        <?= createHeader("Aqui estão suas tarefas <img src='public/icons/icon-smile.svg'>"); ?>
        <section class="tables-container">

            <article class="table-item">
                <i>...</i>
                <h3>Tarefas da escola</h3>
            </article>

            <article class="table-add">
                <i><img src="public/icons/icon-plus.svg" alt="Ícone de adicionar tabela "></i>
            </article>

        </section>
    </main>
    <?php include "footer.php";?>
</body>
</html>