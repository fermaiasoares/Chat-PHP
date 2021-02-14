<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar/Criar</title>
    <link rel="icon" type="image/png" href="public/img/img/favicon.png" />
    <link type="text/css" rel="stylesheet" href="public/style/auth/auth.css"> >
    <script src="public/js/jquery-3.5.1.min.js"></script>
    <!-- Other imports -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script src="public/js/sweetalert2.all.min.js"></script> -->
    <link rel="stylesheet" href="public/style/sweetalert2.min.css">
</head>

<body>
    <div id="loading">Loading&#8230;</div>
    <div class="bg"></div>

    <div class="auth login">
        <p class="title">Logar </p>
        <form method="POST" id="login">
            <input type="text" name="email" class="field"  placeholder="E-mail ou username" />
            <input type="password" name="password" class="field"  placeholder="Password" />
            <button>Entrar</button>
        </form>
        <p class="toogle change_auth_create" onclick="$('.register').fadeIn()">Não tenho conta</p>
    </div>

    <div class="auth register">
        <p class="title">Criar uma conta</p>
        <form method="POST" id="register">
            <input type="text" name="username" minlength="5" maxlength="15" class="field" required="required" placeholder="Username" />
            <input type="email" name="email" class="field" required="required" placeholder="E-mail" />
            <input type="password" name="password" minlength="8" class="field" required="required" placeholder="Password" />
            <input type="password" name="repPassword" minlength="8" class="field" required="required" placeholder="Repetir password" />
            <button id="criar-conta">Criar conta</button>
        </form>
        <p class="toogle" onclick="$('.register').fadeOut()">Já tenho uma conta</p>
    </div>
 <script src="public/js/auth/index.js"></script>
</body>
</html>
