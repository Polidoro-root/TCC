<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
</head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
 <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fonte_ubuntu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/UsuarioEmpresa.css">
    <link rel="stylesheet" href="css/navbar.css">   
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/btn_input.css">
  	<link rel="stylesheet" href="css/cor_fundo.css">
  	<link rel="stylesheet" href="css/cor_letra.css">
    </head>    
<body>
	
	</style>
  <?php include 'navbar/navbar.php'; ?>

  <div class="container-fluid">
    <h1 class="text-center h3 my-4 font-weight-normal">Pesquise por Empresa, Vaga ou Cidade</h1>
    
    <?php include 'indexUsuario/pesquisa.php'; ?>
    
    <h1 class="text-center h3 my-4 font-weight-normal">Favoritos</h1>
    
    <?php include 'indexUsuario/favoritos.php'; ?>

  </div>
</body>
</html>