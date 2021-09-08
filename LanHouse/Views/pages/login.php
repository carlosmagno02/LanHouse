<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lan house | Login</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_STATIC ?>css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <div class="img">
                <i class="fas fa-layer-group"></i>
                </div>
                <p>Lan House</p>
            </div>
        </nav>
    </header>
    <div class="login">
        <div class='login-title'>
            <p>Login</p>
        </div>
        <form method='post' class="login-form">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="senha" placeholder='Senha'>
            <input type="hidden" name="login">
            <input type="submit" value="Entrar" name="acao">
            <div class="clear"></div>
        </form>
    </div>
</body>

</html>