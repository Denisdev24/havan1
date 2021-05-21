<?php
$valor =isset($_POST['valor'])? $_POST ['valor']:"";
$caso = isset($_POST['caso'])?$_POST ['caso']:"";

switch ($caso){
    case 1 :
        $result = $valor / 5.28;
        echo $result . " Dolares";
        break;
    case 2 :
        $result = $valor*5.28;
        echo $result . " Reais";
        break;
    case 3:
        $result = $valor *1.226;
        echo $result . " Dolares";
        break;
    case 4 :
        $result = $valor / 1.226;
        echo $result . " Euros";
        break;
    case 5 :
        $result =$valor / 0.154;
        echo $result . " Reais";
        break;
    case 6 :
        $result = $valor * 0.154;
        echo $result . " Euros";
  break;
  default:
  echo"Deu errado";
    }
    ?>