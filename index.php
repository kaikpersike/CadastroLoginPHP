<?php include("conecta.php");?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <title>Main Page</title>
</head>

<!-- Formulario com Bootstrap simples -->
<body id="return" class="text-center">

    
<main class="form-signin w-100 m-auto">
    <h1 style="color: #ffffff;" class="h3 mb-3 fw-normal">Sign Up</h1>

    <div class="form-floating">
    <input id="name" class="form-control" type="text" name="username" placeholder="Name">
    <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating">
    <input id="email" class="form-control" type="email" name="useremail" placeholder="name@example.com">
    <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
    <input id="pass" class="form-control" type="password" name="pass" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <p><input id="token" value="<?php echo bin2hex(random_bytes(3));?>"></p>

    <input id="send" class="w-100 btn btn-lg btn-primary" type="submit" name="entre">
    <p style="color: #ffffff;" class="mt-5 mb-3">&copy; 2017–2022</p>

</main>


    
</body>
</html>