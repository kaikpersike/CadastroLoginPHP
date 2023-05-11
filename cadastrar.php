<?php
// include
include("conecta.php");

// data
if(isset($_POST['email'])){

    $name = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $pass = $_POST['pass'];
    $token = $_POST['token']; 

// comparing to
    $view = "select * from tb_user where ds_email = '".$_SESSION['email']."'";
    if($res = $mysqli->query($view)){
        if($res->num_rows>0){
            echo "Email já existente";
        }else{
            $signup = "insert into tb_user value(null, '".$name."', '".$_SESSION['email']."', '".$pass."', '".$token."', false)";
            if($mysqli->query($signup)){
                ?>
                <p><input id="sendToken" value="<?php echo $token; ?>"></p>
                <p><input id="sendEmail" value="<?php echo $_SESSION['email']; ?>"></p>
                <?php
                echo "Um código foi enviado para " . $_SESSION['email'] . ", confirme clicando aqui: "; ?>
                <input id="enterKey" class="w-100 btn btn-lg btn-primary" type="submit" name="criptografar">
                
                <p><?php echo $_SESSION['email']; ?> não é o seu email? Clique em</p> <a href="#">Alterar email</a>
                <?php
            }
        }
    }


}

?>