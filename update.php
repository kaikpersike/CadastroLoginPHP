<?php

include("conecta.php");

if(isset($_SESSION['email'])){
    $newKey = $_POST['newKey'];

    $update = "update tb_user set ds_token = '".$newKey."'";

    if($lista = $mysqli->query($update)){
        ?>
        <p><input id="sendToken" value="<?php echo $newKey; ?>"></p>
        <p><input id="sendEmail" value="<?php echo $_SESSION['email']; ?>"></p>
        <?php
            echo "Um código foi enviado para " . $_SESSION['email'] . ", confirme clicando aqui: "; ?> <input id="enterKey" class="w-100 btn btn-lg btn-primary" type="submit" name="criptografar"> <?php
    
    }else{
        echo $mysqli->error;
    }

}

?>