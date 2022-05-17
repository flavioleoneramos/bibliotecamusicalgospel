<?php
class cursoClass{
    private $idCurso;
    private $nomeCurso;
    private $imagemCurso;
    private $linkCurso;
    private $linkComprar;
    private $imagemLinkCurso;
    private $imagemLinkComprar;
    private $descricaoCurso;

	public function __construct(){
		
	}

	
	/**
	 * 
	 * @return mixed
	 */
	function getIdCurso() {
		return $this->idCurso;
	}
	
	/**
	 * 
	 * @param mixed $idCurso 
	 * @return cursoClass
	 */
	function setIdCurso($idCurso): self {
		$this->idCurso = $idCurso;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getNomeCurso() {
		return $this->nomeCurso;
	}
	
	/**
	 * 
	 * @param mixed $nomeCurso 
	 * @return cursoClass
	 */
	function setNomeCurso($nomeCurso): self {
		$this->nomeCurso = $nomeCurso;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getImagemCurso() {
		return $this->imagemCurso;
	}
	
	/**
	 * 
	 * @param mixed $imagemCurso 
	 * @return cursoClass
	 */
	function setImagemCurso($imagemCurso): self {
		$this->imagemCurso = $imagemCurso;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getLinkCurso() {
		return $this->linkCurso;
	}
	
	/**
	 * 
	 * @param mixed $linkCurso 
	 * @return cursoClass
	 */
	function setLinkCurso($linkCurso): self {
		$this->linkCurso = $linkCurso;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getLinkComprar() {
		return $this->linkComprar;
	}
	
	/**
	 * 
	 * @param mixed $linkComprar 
	 * @return cursoClass
	 */
	function setLinkComprar($linkComprar): self {
		$this->linkComprar = $linkComprar;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getImagemLinkCurso() {
		return $this->imagemLinkCurso;
	}
	
	/**
	 * 
	 * @param mixed $imagemLinkCurso 
	 * @return cursoClass
	 */
	function setImagemLinkCurso($imagemLinkCurso): self {
		$this->imagemLinkCurso = $imagemLinkCurso;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getImagemLinkComprar() {
		return $this->imagemLinkComprar;
	}
	
	/**
	 * 
	 * @param mixed $imagemLinkComprar 
	 * @return cursoClass
	 */
	function setImagemLinkComprar($imagemLinkComprar): self {
		$this->imagemLinkComprar = $imagemLinkComprar;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getDescricaoCurso() {
		return $this->descricaoCurso;
	}
	
	/**
	 * 
	 * @param mixed $descricaoCurso 
	 * @return cursoClass
	 */
	function setDescricaoCurso($descricaoCurso): self {
		$this->descricaoCurso = $descricaoCurso;
		return $this;
	}
}
?>