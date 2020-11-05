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
    <script defer src="public/scripts/tablesPreview.js"></script>
    <title>Tabelas</title>
</head>
<body>
    <div class="tablePreview-container hide">

        <header>
            <h1>Tarefas</h1>
        </header>
        <div class="columns-block">
            <div class="subject-column">
                <h2>Matéria</h2>
                <p>Educação física</p>
                <p>Programação Web</p>
                <p>Matemática</p>
            </div>
            
            <div class="description-column">
                <h2>Descrição</h2>
                <p>Tarefa sobre ginástica olímpica das coisas...</p>
                <p>Tarefa sobre área, volume do cubo</p>
                <p>Fazer página com os códigos PHP</p>
            </div>

            <div class="link-column">
                <h2>Link</h2>
                <a href="">Abrir</a>
            </div>
        </div>
        <a href="">Ver tudo</a>
    </div>
    <main class="container">
        <?= createHeader("Aqui estão suas tarefas <img src='public/icons/icon-smile.svg'>"); ?>
        <section class="tables-container">
            
            <article class="table-item">
                <a href="#">
                    <div class="titleOptions-block">
                        <i><img src="public/icons/icon-dots.svg" alt="Ver mais"></i>
                        <h3>Tarefas da escola 1</h3>
                    </div>
                </a>
                <img src="https://images.unsplash.com/photo-1602525963389-fde1e08ca487?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="Imagem de fundo">
            </article>

            <article class="table-item">
                <a href="#">
                    <div class="titleOptions-block">
                        <i><img src="public/icons/icon-dots.svg" alt="Ver mais"></i>
                        <h3>Tarefas da escola 2</h3>
                    </div>
                </a>
                <img src="https://images.unsplash.com/photo-1602525963389-fde1e08ca487?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="Imagem de fundo">
            </article>
            
            <article class="table-item">
                <a href="#">
                    <div class="titleOptions-block">
                        <i><img src="public/icons/icon-dots.svg" alt="Ver mais"></i>
                        <h3>Tarefas da escola</h3>
                    </div>
                </a>
                <img src="https://images.unsplash.com/photo-1602525963389-fde1e08ca487?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="Imagem de fundo">
            </article>
            
            <article class="table-item">
                <a href="#">
                    <div class="titleOptions-block">
                        <i><img src="public/icons/icon-dots.svg" alt="Ver mais"></i>
                        <h3>Tarefas da escola</h3>
                    </div>
                </a>
                <img src="https://images.unsplash.com/photo-1602525963389-fde1e08ca487?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="Imagem de fundo">
            </article>

            <article class="table-item">
                <a href="#">
                    <div class="titleOptions-block">
                        <i><img src="public/icons/icon-dots.svg" alt="Ver mais"></i>
                        <h3>Tarefas da escola</h3>
                    </div>
                </a>
                <img src="https://images.unsplash.com/photo-1602525963389-fde1e08ca487?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="Imagem de fundo">
            </article>
            <article class="table-add table-item">
                <a href="#">
                    <i><img src="public/icons/icon-plus.svg" alt="Ícone de adicionar tabela "></i>
                </a>
            </article>

        </section>
    </main>
    <?php //include "footer.php";?>
</body>
</html>