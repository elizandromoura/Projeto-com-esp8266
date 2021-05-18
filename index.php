<?php 

    
    $dns = 'mysql:host=localhost;dbname=maker';
    $usuario = "root";
    $senha = '';
    try {
    $conexao = new PDO($dns, $usuario, $senha);

    $query = 'select * from weather order by wea_id desc limit 1';
    $stmt = $conexao->query($query);
    $lista = $stmt->fetch(PDO::FETCH_OBJ);

    echo '<pre>';
    print_r($lista);
    echo '</pre>';
    echo '<hr>';
    print_r($lista->wea_temp);
    echo '<hr>';
    $numero = number_format($lista->wea_temp);
    print_r($numero);


} catch(PDOException $e) {
    echo '<pre>';
    print_r($e);
    echo '</pre>';
}
  
?>



<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylee.css">
    
    
   

</head>
<body>


    <div class= 'container'>
    <img class='termometro' src="imagens/termometro.png" alt="">
   
    <div class="conteiner1">
        
        <div id="cont2">
            <div class="graustop">35°</div>
            <div class="graus">30°</div>
            <div class="graus">25°</div>
            <div class="graus">20°</div>
            <div class="graus">15°</div>
            <div class="graus">10°</div>
            <div class="graus">5°</div>
            <div class="graus">0°</div>
            <div class="grausbot">-5°</div>
        </div>
        <div class="cont1"></div>
    </div>
    </div>

<script> 
var mudaaltura = 0;
var temperatura = parseInt("<?php echo $numero ?>");
//temperatura = 23
//alert(temperatura);

switch (temperatura){
    case temperatura <= -5:
        mudaaltura = 88.5
        break
    case -4:
        mudaaltura = 87
        break
    case -3:
        mudaaltura = 85
        break
    case -2:
        mudaaltura = 83
        break
    case -1:
        mudaaltura = 81
        break

    case 0:
        mudaaltura = 80.5
        break

    case 1:
        mudaaltura = 78
        break
    case 2:
        mudaaltura = 76
        break
    case 3:
        mudaaltura = 74
        break
    case 4:
        mudaaltura = 72
        break


    case 5:
        mudaaltura = 69
        break

    case 6:
        mudaaltura = 67
        break
    case 7:
        mudaaltura = 65
        break
    case 8:
        mudaaltura = 62
        break
    case 9:
        mudaaltura = 59
        break

    case 10:
        mudaaltura = 57
        break
    case 11:
        mudaaltura = 55
        break
    case 12:
        mudaaltura = 53
        break
    case 13:
        mudaaltura = 49
        break
    case 14:
        mudaaltura = 47
        break
    case 15:
        mudaaltura = 45
        break
    case 16:
        mudaaltura = 43
        break
    case 17:
        mudaaltura = 40
        break
    case 18:
        mudaaltura = 37
        break
    case 19:
        mudaaltura = 35
        break

    case 20:
        mudaaltura = 33
        break
    case 21:
        mudaaltura = 31
        break
    case 22:
        mudaaltura = 28
        break
    case 23:
        mudaaltura = 25
        break
    case 24:
        mudaaltura = 23
        break


    case 25:
        mudaaltura = 21
        break
    case 26:
        mudaaltura = 19
        break
    case 27:
        mudaaltura = 16
        break
    case 28:
        mudaaltura = 13
        break
    case 29:
        mudaaltura = 11
        break

    case 30:
        mudaaltura = 9
        break
    case 31:
        mudaaltura = 8
        break
    case 32:
        mudaaltura = 6
        break
    case 33:
        mudaaltura = 4
        break
    case 34:
        mudaaltura = 3
        break

    case 35:
        mudaaltura = 2
        break
    case temperatura => 36:
        mudaaltura = 0
        break
   
}
document.getElementById('cont2').style.height = mudaaltura + '%';
</script>

</body>
</html>