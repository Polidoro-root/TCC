<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>PERFIL DO USUARIO</title>
   <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/fonte_ubuntu.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
   <link rel="stylesheet" href="css/perfilUsuario.css">
   <link rel="stylesheet" href="css/navbar.css">
   <link rel="stylesheet" href="css/btn_input.css">
  	<link rel="stylesheet" href="css/cor_fundo.css">
  	<link rel="stylesheet" href="css/cor_letra.css">
</head>
<body>
<?php include 'navbar/navbar.php'; ?>

   <div class="container-fluid">
      <div class="img mx-auto">
         <img src="img/icone_usuario.png" alt="Usuário">
      </div>
      <div class="container">
            <?php include 'perfilUsuario/perfilUsuario.php'; ?>
      </div>
   </div>
   
</body>
</html>