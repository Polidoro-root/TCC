<pre>
<?php
include '../modelo/conexao/conexao.php';
require_once 'classes/Usuario.php';

if($_POST)
{
  $usuario = new Usuario(
    $_POST["nome"],
    $_POST["telefone"],
    $_POST["dtNascimento"],
    $_POST["email"],
    md5($_POST["senha"]),
    $_POST["discord"],
    $_POST["sexo"],
    $_POST["cep"],
    $_POST["logradouro"],
    $_POST["numero"],
    $_POST["bairro"],
    $_POST["cidade"],
    $_POST["estado"],
    $_POST["nivelGraduacao"],
    $_POST["graduacao"],
    $_POST["areaInteresse"],
    $_POST["experienciaArea"],
    $_POST["ultimoEmprego"],
    $_POST["sobreVoce"]
  );
  print_r($usuario);
}
?>
</pre>