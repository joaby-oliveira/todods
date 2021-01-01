<?php
include "public/components/Header/header.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/styles/tables.css">
    <link rel="stylesheet" href="public/styles/footer.css">
    <link rel="stylesheet" href="public/styles/global.css">
    <link rel="stylesheet" href="public/components/Header/header.css">
    <script defer src="public/scripts/tablesPreview.js"></script>
    <title>Tabelas</title>
</head>

<body>
    <div class="tablePreview-container hide">
        <div class="closeContainer">
            <img src="public/icons/icon-close.svg" alt="Fechar">
        </div>
        <header>
            <h1>Tarefas da escola</h1>
        </header>
        <div class="rows-container">
            <div class="row row-title">
                <h2>Matéria</h2>
                <h2>Descrição</h2>
                <h2>Link</h2>
            </div>
            <div class="row">
                <div class="subject">
                    <p>Educação fisica</p>
                </div>
                <div class="description">
                    <p>Seja feliz e faça suas atividades 😁😁</p>
                </div>
                <div class="link">
                    <a href="">
                        <span>Abrir</span>
                        <img src="public/icons/icon-airplane.svg" alt="Abrir"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="subject">
                    <p>Educação fisica</p>
                </div>
                <div class="description">
                    <p>Não pode ser sedentario né meu 😉</p>
                </div>
                <div class="link">
                    <a href="">
                        <span>Abrir</span>
                        <img src="public/icons/icon-airplane.svg" alt="Abrir"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="subject">
                    <p>Educação fisica</p>
                </div>
                <div class="description">
                    <p>Seja feliz e faça suas atividades 😁😁</p>
                </div>
                <div class="link">
                    <a href="">
                        <span>Abrir</span>
                        <img src="public/icons/icon-airplane.svg" alt="Abrir"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="subject">
                    <p>Educação fisica</p>
                </div>
                <div class="description">
                    <p>Seja feliz e faça suas atividades 😁😁</p>
                </div>
                <div class="link">
                    <a href="">
                        <span>Abrir</span>
                        <img src="public/icons/icon-airplane.svg" alt="Abrir"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="tableAdd-container hide">
        <div class="closeContainer">
            <img src="public/icons/icon-close.svg" alt="Fechar">
        </div>
        <header>
            <h1>Tarefas da escola</h1>
        </header>
        <hr>
        <div class="input-block">
            <label for="Name">Nome</label>
            <input type="text" class="input" id="name" name="name" placeholder="Como irá se chamar sua tabela?">
        </div>
        <div class="input-block">
            <label for="">Imagem</label>
            <input type="file" class="input" id="image" name="image" placeholder="Como irá se chamar sua tabela?">
            <label for="image" class="input-file">Escolher uma foto <img src="public/icons/icon-plus-circle.svg" alt=""></label>
        </div>
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
                <!-- <img src="https://images.unsplash.com/photo-1602525963389-fde1e08ca487?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="Imagem de fundo"> -->
            </article>
            <article class="table-item">
                <a href="#">
                    <div class="titleOptions-block">
                        <i><img src="public/icons/icon-dots.svg" alt="Ver mais"></i>
                        <h3>Tarefas da escola 1</h3>
                    </div>
                </a>
                <!-- <img src="https://images.unsplash.com/photo-1602525963389-fde1e08ca487?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="Imagem de fundo"> -->
            </article>
            <article class="table-item">
                <a href="#">
                    <div class="titleOptions-block">
                        <i><img src="public/icons/icon-dots.svg" alt="Ver mais"></i>
                        <h3>Tarefas da escola 1</h3>
                    </div>
                </a>
                <!-- <img src="https://images.unsplash.com/photo-1602525963389-fde1e08ca487?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="Imagem de fundo"> -->
            </article>
            <article class="table-item">
                <a href="#">
                    <div class="titleOptions-block">
                        <i><img src="public/icons/icon-dots.svg" alt="Ver mais"></i>
                        <h3>Tarefas da escola 1</h3>
                    </div>
                </a>
                <!-- <img src="https://images.unsplash.com/photo-1602525963389-fde1e08ca487?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="Imagem de fundo"> -->
            </article>
            <article class="table-item">
                <a href="#">
                    <div class="titleOptions-block">
                        <i><img src="public/icons/icon-dots.svg" alt="Ver mais"></i>
                        <h3>Tarefas da escola 1</h3>
                    </div>
                </a>
                <!-- <img src="https://images.unsplash.com/photo-1602525963389-fde1e08ca487?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="Imagem de fundo"> -->
            </article>

            <article class="table-add">
                <a href="#">
                    <i><img src="public/icons/icon-plus.svg" alt="Ícone de adicionar tabela "></i>
                </a>
            </article>

        </section>
    </main>
    <?php include_once 'public/components/Footer/footer.php' ?>
</body>

</html>