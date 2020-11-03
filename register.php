<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="public/styles/register.css">
    <link rel="stylesheet" href="public/styles/global.css">
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <main class="container">

        
        <div class="flexbox-container-1">
            <div class="btn-back">
            <a href="login.php"><span class="iconify" data-inline="false" data-icon="ion:chevron-back-outline"></span></a>
            </div>
            <div class="main-title">
                <h1>Comece se organizando <img src="public/icons/icon-kiss.svg"></h1>
            </div>
        </div>

        <div class="flexbox-container-2">
            
            <div class="logo-icon">
                <img src="public/images/logo.svg" alt="logo">
            </div>

            <div class="login-title">
                <h1>Cadastro</h1>
            </div>

            <div class="name-block">
                <label for="">Nome</label>
                <input type="text" placeholder="Ex: João Antônio">
            </div>

            <div class="user-block">
                <label for="">Usuários<small>(apelido)</small></label>
                <input type="text" placeholder="Digite como deseja ser chamado">
            </div>

            <div class="born-block">
                <label for="">Data de Nascimento</label>
                <input type="date" name="" id="">
            </div>

            <div class="sex-block">
                <label for="">Sexo</label>
                <select name="" id="">
                    <option value="false" disabled selected>Selecione seu sexo</option>
                    <option value="male">Masculino</option>
                    <option value="female">Feminino</option>
                </select>
            </div>

            <div class="email-block">
                <label for="">Email</label>
                <input type="email" placeholder="Ex: email@email.com">
            </div>

            <div class="password-block">
                <label for="">Senha</label>
                <input type="password" placeholder="No mínimo 8 caractéres">
            </div>

            <div class="confirmPass-block">
                <label for="">Confirmar senha</label>
                <input type="text" placeholder="Deve ser igual à senha anterior">
            </div>

            <div class="submit-block">
                <input type="submit" value="Cadastrar">
            </div>

        </div>

    </main>
</body>
</html>