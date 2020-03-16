<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CADASTRO DE EMPRESA</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fonte_ubuntu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
    <link rel="stylesheet" href="css/cadastroUsuario.css">
    <link rel="stylesheet" href="css/btn_input.css">
  	<link rel="stylesheet" href="css/cor_fundo.css">
  	<link rel="stylesheet" href="css/cor_letra.css">
</head>
<body>
    <div class="container-fluid">
        <h1 class="text-center h3 my-4 font-weight-normal">Cadastro de Empresa</h1>
        <div class="container">
            <form class="form-signin"> 
                <?php include 'empresa/empresa.php';?>
                <hr>
                <?php include 'endereco/endereco.php';?>   
            <hr>
            <button class="texto btn btn-lg btn-block mx-auto col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-4" type="submit">Cadastrar</button>        
            <p class="mt-3 mb-3 text-muted text-center">&copy; 2017-2019</p>
        </form>
    </div>    
    </div>
</body>
</html>