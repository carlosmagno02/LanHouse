<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lan house | defeitos</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_STATIC ?>css/defeitos.css">
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
            <ul class='desktop'>
                <div>
                    <li><a href="<?php echo INCLUDE_PATH ?>defeitos">Defeitos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>relatorio">Relatórios</a></li>
                </div>
                <a class='sair' href="<?php echo INCLUDE_PATH ?>?logout">Sair</a>
            </ul>
            <ul class='mobile'>
                <i onclick="menu()" class='fa fa-bars'></i>
                <div id='menu' class="nav-mobile">
                    <div>
                        <li><a href="<?php echo INCLUDE_PATH ?>defeitos">Defeitos</a></li>
                        <li><a href="<?php echo INCLUDE_PATH ?>relatorio">Relatórios</a></li>
                    </div>
                    <a class='sair' href="<?php echo INCLUDE_PATH ?>?logout">Sair</a>
                </div>
            </ul>
        </nav>
    </header>
    <div class='box-defeito'>
        <div class='box-title'>
            <h2>Cadastrar Defeito</h2>
        </div>


        <form method='post'>
            <input name="data" type="date">
            <select name="equipamento">
                <?php foreach (\LanHouse\Models\DefeitosModel::listarEquipamentos() as $key => $value) { ?>
                    <option value="<?php echo $value['equipamento'] ?>"><?php echo $value['equipamento'] ?></option>
                <?php } ?>
            </select>
            <select name="defeito">
                <?php foreach (\LanHouse\Models\DefeitosModel::listarDefeitos() as $key => $value) { ?>
                    <option value="<?php echo $value['defeito'] ?>"><?php echo $value['defeito'] ?></option>
                <?php } ?>
            </select>
            <textarea name="descricao" placeholder="Descrição"></textarea>
            <input type="hidden" name="defeitos">
            <input type="submit" value='Cadastrar' name="acao">
        </form>
    </div>
    <script>
        function menu(){
            var menu = document.getElementById("menu");
            if(menu.style.display == "none"){
                menu.style.display = "block"
            }else{
                menu.style.display = "none"
            }
        }
    </script>
</body>

</html>