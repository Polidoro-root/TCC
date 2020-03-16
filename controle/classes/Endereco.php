<?
require_once 'Contato.php';

abstract class Endereco extends Contato
{
  private $cep;
  private $logradouro;
  private $numero;
  private $bairro;
  private $cidade;
  private $estado;

  public function getCep()
  {
    return $this->cep;
  }

  public function getLogradouro()
  {
    return $this->logradouro;
  }

  public function getNumero()
  {
    return $this->numero;
  }

  public function getBairro()
  {
    return $this->bairro;
  }

  public function getCidade()
    {
      return $this->cidade;
    }

  public function getEstado()
  {
    return $this->estado;
  }

  public function setCep($cep)
  {
    $this->cep = $cep;
  }

  public function setLogradouro($logradouro)
  {
    $this->logradouro = $logradouro;
  }

  public function setNumero($numero)
  {
    $this->numero = $numero;
  }

  public function setBairro($bairro)
  {
    $this->bairro = $bairro;
  }

  public function setCidade($cidade)
  {
    $this->cidade = $cidade;
  }

  public function setEstado($estado)
  {
    $this->estado = $estado;
  }

}
?>