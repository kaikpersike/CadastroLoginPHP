<?php include("conecta.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main Page</title>
</head>
<body>

<!-- Comparando dados -->
 <div class="panel">
 <input id="key" type="text" name="key">
 <input id="compare" type="submit">

 <?php echo $_SESSION["email"];?>
 <p>O código não apareceu?</p> 

 <input id="newKey" type="hidden" name="change" value="<?php echo bin2hex(random_bytes(3));?>">
 <input id="reSend" type="submit" value="Enviar">

 </div>
</body>
</html>