<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADICIONAR NOVO ENDEREÇO DE EMPRESA</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fonte_ubuntu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adicionarEnderecoEmpresa.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/btn_input.css">
    <link rel="stylesheet" href="css/cor_fundo.css">
    <link rel="stylesheet" href="css/cor_letra.css">
</head>

<body>
    <?php include 'navbar/navbar.php'; ?>
    <div class="container-fluid">
        <h1 class="text-center h3 my-4 font-weight-normal">Adicionar endereço da empresa</h1>
        <div class="container">
            <form class="form-signin">
                <?php include 'endereco/endereco.php'; ?>
                <button class="texto btn btn-lg btn-block mx-auto col-xs-12 col-sm-12 col-md-8 col-lg-4 col-xl-4 col-4"
                    type="submit">Cadastrar</button>
            </form>
        </div>
    </div>

</body>

</html>