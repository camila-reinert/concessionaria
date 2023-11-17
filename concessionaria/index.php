<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pátio de veículos</title>
</head>
<body>
   <?php
        require_once("php/conexao.php");
        if(isset($_GET["id"])==true){
            echo "<script>coloreArea(".$_GET['id']."); </script>";
        }
    ?>

    <maim id="patio">
        <div id="area1" class="areas"
        onclick="exibirArea('1')">ÁREA 1</div>
        <div id="area1" class="areas"
        onclick="exibirArea('2')">ÁREA 2</div>
        <div id="area1" class="areas"
        onclick="exibirArea('3')">ÁREA 3</div>
    </main>
</body>
</html>