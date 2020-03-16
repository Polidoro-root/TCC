<?php
require_once 'Endereco.php';

final class Vaga
{
  private $empresa;
  private $vaga;
  private $salario;
  private $requisitos;
  private $horarioEntrada;
  private $horarioSaida;
  private $almocoIda;
  private $almocoVolta;
  private $diasTrabalho;
  private $beneficios;
  private $status;

  /**
   * Get the value of empresa
   */
  public function getEmpresa()
  {
    return $this->empresa;
  }

  /**
   * Set the value of empresa
   *
   * @return  self
   */
  public function setEmpresa($empresa)
  {
    $this->empresa = $empresa;


  }

  /**
   * Get the value of vaga
   */
  public function getVaga()
  {
    return $this->vaga;
  }

  /**
   * Set the value of vaga
   *
   * @return  self
   */
  public function setVaga($vaga)
  {
    $this->vaga = $vaga;


  }

  /**
   * Get the value of salario
   */
  public function getSalario()
  {
    return $this->salario;
  }

  /**
   * Set the value of salario
   *
   * @return  self
   */
  public function setSalario($salario)
  {
    $this->salario = $salario;


  }

  /**
   * Get the value of requisitos
   */
  public function getRequisitos()
  {
    return $this->requisitos;
  }

  /**
   * Set the value of requisitos
   *
   * @return  self
   */
  public function setRequisitos($requisitos)
  {
    $this->requisitos = $requisitos;


  }

  /**
   * Get the value of horarioEntrada
   */
  public function getHorarioEntrada()
  {
    return $this->horarioEntrada;
  }

  /**
   * Set the value of horarioEntrada
   *
   * @return  self
   */
  public function setHorarioEntrada($horarioEntrada)
  {
    $this->horarioEntrada = $horarioEntrada;


  }

  /**
   * Get the value of horarioSaida
   */
  public function getHorarioSaida()
  {
    return $this->horarioSaida;
  }

  /**
   * Set the value of horarioSaida
   *
   * @return  self
   */
  public function setHorarioSaida($horarioSaida)
  {
    $this->horarioSaida = $horarioSaida;


  }

  /**
   * Get the value of almocoIda
   */
  public function getAlmocoIda()
  {
    return $this->almocoIda;
  }

  /**
   * Set the value of almocoIda
   *
   * @return  self
   */
  public function setAlmocoIda($almocoIda)
  {
    $this->almocoIda = $almocoIda;


  }

  /**
   * Get the value of almocoVolta
   */
  public function getAlmocoVolta()
  {
    return $this->almocoVolta;
  }

  /**
   * Set the value of almocoVolta
   *
   * @return  self
   */
  public function setAlmocoVolta($almocoVolta)
  {
    $this->almocoVolta = $almocoVolta;


  }

  /**
   * Get the value of diasTrabalho
   */
  public function getDiasTrabalho()
  {
    return $this->diasTrabalho;
  }

  /**
   * Set the value of diasTrabalho
   *
   * @return  self
   */
  public function setDiasTrabalho($diasTrabalho)
  {
    $this->diasTrabalho = $diasTrabalho;


  }

  /**
   * Get the value of beneficios
   */
  public function getBeneficios()
  {
    return $this->beneficios;
  }

  /**
   * Set the value of beneficios
   *
   * @return  self
   */
  public function setBeneficios($beneficios)
  {
    $this->beneficios = $beneficios;


  }

  /**
   * Get the value of status
   */
  public function getStatus()
  {
    return $this->status;
  }

  /**
   * Set the value of status
   *
   * @return  self
   */
  public function setStatus($status)
  {
    $this->status = $status;


  }
}
?>