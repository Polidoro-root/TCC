<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ESQUECEU A SENHA</title>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/fonte_ubuntu.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
  <link rel="stylesheet" href="css/esqueceuSenha.css">
  <link rel="stylesheet" href="css/btn_input.css">
	<link rel="stylesheet" href="css/cor_fundo.css">
	<link rel="stylesheet" href="css/cor_letra.css">
</head>
<body>
  
	<div class="container-fluid">
      <div class="text-center">
          <img src="img/maleta.png" alt="some text" width=200 height=200>
        </div>
      
        <div class="container">
            <form class="form-signin">
                <h1 class="texto text-center h3 my-4 font-weight-normal">Recuperar Senha</h1>
                
                <div class="mx-auto my-3 col-xs-9 col-sm-9 col-md-9 col-lg-4 col-xl-4">
                  <label for="inputEmail">E-mail</label>
                  <input type="email" id="inputEmail" class="form-control col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" placeholder="Email" required autofocus>    
                </div>
                    
                <div class="text-center my-1">
                    <button type="button" class="btn col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">Enviar Confirmação de E-mail</button>
                  </div>
                <div class="text-center mt-5">
                  <input class="form-control mx-auto col-xs-9 col-sm-9 col-md-9 col-lg-4 col-xl-4 text-center" type="text" maxlength="6">
                </div>
                <div class="text-center mt-3 mb-5">
                    <button type="button" class="btn col-xs-3 col-sm-3 col-md-2 col-lg-2 col-xl-2">Confirmar</button>
                  </div>
                  <div class="mx-auto my-3 col-xs-9 col-sm-9 col-md-9 col-lg-4 col-xl-4">
                    <label for="inputSenha">Nova Senha</label>
                    <input type="password" id="inputSenha" class="form-control col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" placeholder="Nova Senha" required>
                  </div>
                  <div class="mx-auto mt-3 mb-5 col-xs-9 col-sm-9 col-md-9 col-lg-4 col-xl-4">
                    <label for="inputConfirmarSenha">Confirmar Senha</label>
                    <input type="password" id="inputConfirmarSenha" class="form-control col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" placeholder="Confirmar Nova Senha" required>
                  </div>
                  
                <button class="btn btn-lg btn-block mx-auto col-xs-9 col-sm-9 col-md-9 col-lg-4 col-xl-4  " type="submit">Alterar Senha</button>
                <p class="texto mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
              </form>
        </div>
  </div>

</body>
</html>