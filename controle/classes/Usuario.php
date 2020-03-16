<?php
require_once 'Endereco.php';
require_once 'IPessoa.php';

final class Usuario extends Endereco implements IPessoa
{
  private $dtNascimento;
  private $sexo;
  private $areaInteresse;
  private $experienciaArea;
  private $ultimoEmprego;
  private $sobreVoce;
  private $nivelGraduacao;
  private $graduacao;

  public function __construct($nome, $telefone, $email, $discord, $dtNascimento, $senha, $sexo,
  $cep, $logradouro, $numero, $bairro, $cidade, $estado, $nivelGraduacao, $graduacao,
  $areaInteresse, $experienciaArea, $ultimoEmprego, $sobreVoce)
  {
    $this->nome = $nome;
    $this->telefone = $telefone;
    $this->email = $email;
    $this->dtNascimento = $dtNascimento;
    $this->senha = $senha;
    $this->discord = $discord;
    $this->sexo = $sexo;
    $this->cep = $cep;
    $this->logradouro = $logradouro;
    $this->numero = $numero;
    $this->bairro = $bairro;
    $this->cidade = $cidade;
    $this->estado = $estado;
    $this->nivelGraduacao = $nivelGraduacao;
    $this->graduacao = $graduacao;
    $this->areaInteresse = $areaInteresse;
    $this->experienciaArea = $experienciaArea;
    $this->ultimoEmprego = $ultimoEmprego;
    $this->sobreVoce = $sobreVoce;
  }

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


  /**
   * Get the value of dtNascimento
   */
  public function getDtNascimento()
  {
    return $this->dtNascimento;
  }

  /**
   * Set the value of dtNascimento
   *
   *
   */
  public function setDtNascimento($dtNascimento)
  {
    $this->dtNascimento = $dtNascimento;
  }

  /**
   * Get the value of sexo
   */
  public function getSexo()
  {
    return $this->sexo;
  }

  /**
   * Set the value of sexo
   *
   *
   */
  public function setSexo($sexo)
  {
    $this->sexo = $sexo;
  }

  /**
   * Get the value of areaInteresse
   */
  public function getAreaInteresse()
  {
    return $this->areaInteresse;
  }

  /**
   * Set the value of areaInteresse
   *
   *
   */
  public function setAreaInteresse($areaInteresse)
  {
    $this->areaInteresse = $areaInteresse;
  }

  /**
   * Get the value of experienciaArea
   */
  public function getExperienciaArea()
  {
    return $this->experienciaArea;
  }

  /**
   * Set the value of experienciaArea
   *
   *
   */
  public function setExperienciaArea($experienciaArea)
  {
    $this->experienciaArea = $experienciaArea;
  }

  /**
   * Get the value of ultimoEmprego
   */
  public function getUltimoEmprego()
  {
    return $this->ultimoEmprego;
  }

  /**
   * Set the value of ultimoEmprego
   *
   *
   */
  public function setUltimoEmprego($ultimoEmprego)
  {
    $this->ultimoEmprego = $ultimoEmprego;
  }

  /**
   * Get the value of sobreVoce
   */
  public function getSobreVoce()
  {
    return $this->sobreVoce;
  }

  /**
   * Set the value of sobreVoce
   *
   *
   */
  public function setSobreVoce($sobreVoce)
  {
    $this->sobreVoce = $sobreVoce;
  }

  /**
   * Get the value of nivelGraduacao
   */
  public function getNivelGraduacao()
  {
    return $this->nivelGraduacao;
  }

  /**
   * Set the value of nivelGraduacao
   *
   *
   */
  public function setNivelGraduacao($nivelGraduacao)
  {
    $this->nivelGraduacao = $nivelGraduacao;
  }

  /**
   * Get the value of graduacao
   */
  public function getGraduacao()
  {
    return $this->graduacao;
  }

  /**
   * Set the value of graduacao
   *
   *
   */
  public function setGraduacao($graduacao)
  {
    $this->graduacao = $graduacao;
  }
}
?>