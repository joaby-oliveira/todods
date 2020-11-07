<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/styles/profile-manager.css">
    <link rel="stylesheet" href="public/styles/footer.css">
    <link rel="stylesheet" href="public/styles/global.css">
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>   
    <title>Perfil</title>
</head>
<body>
    <main class="container">
        <div class="flexbox-container-1">
            <div class="btn-back">
                <a href="tables.php"><span class="iconify" data-inline="false" data-icon="ion:chevron-back-outline"></span></a>
            </div>
        </div>
        <div class="flexbox-container-2">
            <div id="header1">
                <h2>@Gcrr11</h2>
                <div id="follow">
                    <p>Seguir</p>
                    <img src="public/icons/icon-follow.svg">
                </div>
            </div>
            <div id="profile-picture">
                    <img src="https://avatars0.githubusercontent.com/u/50830580?s=400&u=93d2ce6215f9a6df2959203c69c7e52bdb6124b5&v=4" alt="Foto de perfil">
                    <p>Online</p>
            </div>
            <div id="header2">
                <div id="desc1">
                    <p>Just a Task Manager :)</p>
                </div>
                <div id="desc2">
                    <div id="data">
                        <header>
                            <strong id="name">Gabriel Cesar Ragonha Rodrigues</strong>
                            <strong id="team">Da equipe:</strong>
                        </header>
                        <footer>
                            <p id="followers">5.000 Seguidores</p>
                            <p id="team-value">Frans & Sis</p>
                        </footer>
                    </div>
                </div>
            </div>

            <div class="flexbox-container-3">
                <div id="school-homework">
                    <img src="public/images/default.svg">
                    <h2>Tarefas da escola</h2>
                    <p>Algumas tarefas que tenho na ETEC Antonio Devisate :)</p>
                    <div id="favorites">
                        <img src="public/icons/icon-heart.svg" alt="">
                        <p>10 Favoritos</p>
                    </div>
                    <div id="tasks">
                        <form>
                            <div id="search-table">
                                <input name="search-table" type="text" placeholder="Pesquisar tabelas">
                                <img src="public/icons/icon-magnifier.svg">
                            </div>
                            <div id="filter">
                                <select name="filter">
                                    <option value="1">Nome</option>
                                    <option value="2">Data</option>
                                </select>
                                <div id="tables">
                                    <div id="row-1">
                                        <img src="public/images/default.svg">
                                        <img src="public/images/default.svg">
                                        <img src="public/images/default.svg">
                                    </div>
                                    <div id="row-2">
                                        <img src="public/images/default.svg">
                                        <img src="public/images/default.svg">
                                        <img src="public/images/default.svg">
                                    </div>
                                    <div id="row-3">
                                        <img src="public/images/default.svg">
                                        <img src="public/images/default.svg">
                                        <img src="public/images/default.svg">
                                    </div>
                                </div>
                                <img src="public/icons/icon-dots-option.svg">
                                <div id="action">
                                    <div class="single-action">
                                        <img src="https://avatars0.githubusercontent.com/u/50830580?s=400&u=93d2ce6215f9a6df2959203c69c7e52bdb6124b5&v=4">
                                        <p><strong>Gcrr10</strong> adicionou <strong>Tarefa de Química - Zoada </strong> na tabela <strong>Tarefas da escola.</strong></p>
                                        <p class="date">15 de agosto às 00:14  </p>
                                    </div>
                                    <div class="single-action">
                                        <img src="https://avatars0.githubusercontent.com/u/50830580?s=400&u=93d2ce6215f9a6df2959203c69c7e52bdb6124b5&v=4">
                                        <p><strong>Gcrr10</strong> adicionou <strong>Tarefa de Matemática - Cubo</strong> na tabela <strong>Tarefas da escola.</strong></p>
                                        <p class="date">15 de agosto às 00:14 </p>
                                    </div>
                                    <div class="single-action">
                                        <img src="https://avatars0.githubusercontent.com/u/50830580?s=400&u=93d2ce6215f9a6df2959203c69c7e52bdb6124b5&v=4">
                                        <p><strong>Gcrr10</strong> adicionou uma nova tabela <strong> Tarefas da escola </strong>no banco de dados.</p>
                                        <p class="date">15 de agosto às 00:10  </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once 'public/components/Footer/footer.php' ?>
    </main>
</body>
</html>