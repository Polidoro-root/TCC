<?php
abstract class Pessoa
{
  private $nome;
  private $senha;
  private $online;
  private $favoritado;

  public function getNome()
  {
    return $this->nome;
  }

  public function getSenha()
  {
    return $this->senha;
  }

  public function getOnline()
  {
    return $this->online;
  }

  public function getFavoritado()
  {
    return $this->favoritado;
  }

  public function setNome($nome)
  {
    $this->nome = $nome;
  }

  public function setSenha($senha)
  {
    $this->senha = $senha;
  }

  public function setOnline($online)
  {
    $this->online = $online;
  }

  public function setFavoritado($favoritado)
  {
    $this->favoritado = $favoritado;
  }

}
?>