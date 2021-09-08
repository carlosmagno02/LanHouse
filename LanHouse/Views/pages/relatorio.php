<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lan house | relatorios</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_STATIC?>css/relatorio.css">
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
    <div class='relatorios'>
        <div class="box-relatorio">
            <h2>Relatório de Defeitos</h2>
            <div class="tabela">
                <table>
                    <thead>
                        <th>Data</th>
                        <th>Equipamento</th>
                        <th>Defeito</th>
                        <th>Descrição</th>
                    </thead>
                    <tbody>
                        <?php foreach (\LanHouse\Models\DefeitosModel::listarRelatorios() as $key => $value) {?>
                        <tr>
                            <td><?php echo date('d/m/Y', strtotime($value['data']))?></td>
                            <td><?php echo $value['equipamento']?></td>
                            <td><?php echo $value['defeito']?></td>
                            <td><?php echo $value['descricao']?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
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