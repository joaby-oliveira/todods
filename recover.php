<?php
include 'public/components/Recover/recover.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="public/styles/login.css">
    <link rel="stylesheet" href="public/styles/global.css">
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main class="container">

        <div class="flexbox-container-1">
            <div class="btn-back">
                <span class="iconify" data-inline="false" data-icon="ion:chevron-back-outline"></span>
            </div>
            <div class="main-title">
                <h1>Fique organizado com o TodoDS</h1>
            </div>
        </div>

        <div class="flexbox-container-2">
            <div class="logo-icon">
                <img src="public/images/logo.svg" alt="logo">
            </div>
            <?php

                $recoverElement = createRecover(
                    '1° Etapa',
                    '<div class="email-block">
                        <label for="">Email</label>
                        <input type="email" placeholder="Ex: email@email.com">
                    </div>',
                    'Enviaremos um código ao seu email para a redefinição de sua senha.',
                    2
                );
                
                if(isset($_GET['step'])) {
                    if($_GET['step'] == 2) {
                        $recoverElement = createRecover(
                            '2° Etapa',
                            '<div class="code-block">
                                <label for="">Código</label>
                                <input type="text" placeholder="Digite o código">
                            </div>',
                            'Insira o código enviado em seu email para criar uma nova senha.',
                            3
                        );
                    }else if($_GET['step'] == 3) {
                        $recoverElement = createRecover(
                            '3° Etapa',
                            '<div class="password-block">
                                <label for="">Nova senha</label>
                                <input type="text" placeholder="********">
                            </div>
                            <div class="password-block">
                                <label for="">Confirmar senha</label>
                                <input type="text" placeholder="********">
                            </div>
                            '
                        );
                    }
                }
                echo $recoverElement;
            ?>

            
        </div>

    </main>
</body>
</html>