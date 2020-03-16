    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title></title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fonte_ubuntu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/navbar.css">   
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/btn_input.css">
  	<link rel="stylesheet" href="css/cor_fundo.css">
  	<link rel="stylesheet" href="css/cor_letra.css">
    </head>    
    <body>
    <!-- Custom styles for this template -->
    <?php include 'navbar/navbar.php'; ?>
    

<div class="container-fluid">
  <div class="pricing-header px-6 py-6 pt-md-6 pb-md-6 mx-auto text-center ">
    <h1 class="display-4">Vagas</h1>
    
  </div>
  
  <?php include 'vagasEmpresa/vagasEmpresa.php';?>

</div>       
</body>
</html>