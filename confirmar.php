<?php

include("conecta.php");

if(isset($_POST['key'])){
    $key = $_POST['key'];

    $view = "select * from tb_user where ds_token = '$key'";

    if($res = $mysqli->query($view)){
        if($res->num_rows==0){
            echo "Chave inexistente";
        }else{
            echo "altaração do status e redirecionamento";
            $update = "update tb_user set ds_status = true where ds_token = '$key'";
            if($res = $mysqli->query($update)){
                echo "Você será redirecionado para a página home";
            }
        }
    }

}

?>