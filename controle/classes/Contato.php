<?php
require_once 'Pessoa.php';

abstract class Contato extends Pessoa
{
  private $email;
  private $telefone;
  private $discord;

  public function getEmail()
  {
    return $this->email;
  }

  public function getTelefone()
  {
    return $this->telefone;
  }

  public function getDiscord()
  {
    return $this->discord;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function setTelefone($telefone)
  {
    $this->telefone = $telefone;
  }

  public function setDiscord($discord)
  {
    $this->discord = $discord;
  }
}
?>