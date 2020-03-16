<?php
require_once 'Endereco.php';
require_once 'IPessoa.php';

class Empresa extends Endereco implements IPessoa
{
  private $cnpj;

  public function favoritar()
  {

  }

  public function desfavoritar()
  {

  }

  public function entrarEmContato()
  {

  }

  public function mostrarInteresse()
  {

  }

  public function fazerLogin()
  {

  }

  public function sairSessao()
  {

  }


  public function getCnpj()
  {
    return $this->cnpj;
  }

  public function setCnpj($cnpj)
  {
    $this->cnpj = $cnpj;
  }

}
?>