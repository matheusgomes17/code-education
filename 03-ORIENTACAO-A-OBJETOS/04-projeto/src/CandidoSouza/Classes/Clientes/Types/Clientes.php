<?php
/**
 * User: candidosouza
 * Date: 13/08/14
 * Time: 08:15
 * 04 - Projeto Persistência de dados | Estudos Potal Code Education - Módulo 03 Php Orientado a Objetos
 * @author Candido Souza
 * Arquivo: Clientes.php
 * Linguagem: php
 */

namespace CandidoSouza\Classes\Clientes\Types;
use CandidoSouza\Classes\Clientes\Abstracts\EndCobrClienteAbstract;
use CandidoSouza\Classes\Clientes\Interfaces\ClientesInterfaces;

/**
 * Class Clientes
 * @package CandidoSouza\Clientes\Types
 */
class Clientes extends EndCobrClienteAbstract implements ClientesInterfaces
{
    protected $nomeRS;
    protected $cnpjCpf;
    protected $email;
    protected $telefone;
    protected $rua;
    protected $numero;
    protected $complemento;
    protected $bairro;
    protected $cep;
    protected $municipio;
    protected $uf;
    protected $tipo;
    protected $grauImportance;

    function __construct( $nomeRS, $email,  $tipo, $cnpjCpf,  $telefone, $rua, $numero, $bairro, $cep, $complemento,  $grauImportance, $municipio, $uf)
    {
        $this->bairro = $bairro;
        $this->cep = $cep;
        $this->cnpjCpf = $cnpjCpf;
        $this->complemento = $complemento;
        $this->email = $email;
        $this->grauImportance = $grauImportance;
        $this->municipio = $municipio;
        $this->nomeRS = $nomeRS;
        $this->numero = $numero;
        $this->rua = $rua;
        $this->telefone = $telefone;
        $this->tipo = $tipo;
        $this->uf = $uf;
    }

    /**
     * @param $nomeRS
     * @param $cnpjCpf
     * @param $email
     * @param $telefone
     */


    /**
     * @param mixed $nomeRS
     */
    public function setNomeRS($nomeRS)
    {
        $this->nomeRS = $nomeRS;
    }

    /**
     * @return mixed
     */
    public function getNomeRS()
    {
        return $this->nomeRS;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cnpjCpf
     */
    public function setCnpjCpf($cnpjCpf)
    {
        $this->cnpjCpf = $cnpjCpf;
    }

    /**
     * @return mixed
     */
    public function getCnpjCpf()
    {
        return $this->cnpjCpf;
    }

    /**
     * @param mixed $complemento
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    /**
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $grauImportance
     */
    public function setGrauImportance($grauImportance)
    {
        $this->grauImportance = $grauImportance;
    }

    /**
     * @return mixed
     */
    public function getGrauImportance()
    {
        return $this->grauImportance;
    }

    /**
     * @param mixed $municipio
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    }

    /**
     * @return mixed
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $rua
     */
    public function setRua($rua)
    {
        $this->rua = $rua;
    }

    /**
     * @return mixed
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $uf
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }
}