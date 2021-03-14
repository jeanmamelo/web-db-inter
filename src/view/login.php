<?php
require_once 'partials/head.php';
?>

<body>
    <div class="d-flex align-items-center login-logoBar">
        <a class="mx-auto" href="../index">
            <img src="../assets/img/logo.png" alt="">
        </a>
    </div>

    <!-- Content-->
    <div class="container login-middleContainer d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 d-flex">
                <form class="box" id="loginForm">
                    <h1>Login</h1>
                    <p class="text-muted"> Já possiu uma conta? Logue-se </p>
                    <label hidden for="username">Usuário</label>
                    <input type="text" name="username" id="username" placeholder="Usuário">
                    <label hidden for="password">Senha</label>
                    <input type="password" name="password" placeholder="Senha">
                    <p class="text-muted">Ainda não possui conta? <a class="forgot text-muted" href="#"> Cadastre-se </a></p>
                    <input type="submit" name="login" value="Login" href="#" form="loginForm">
                </form>
            </div>
        </div>
    </div>
</body>

</html>