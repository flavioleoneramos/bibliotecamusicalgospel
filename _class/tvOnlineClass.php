<?php

class tvOnlineClass{

    private $idTv;
    private $nomeTv;
    private $imagemTv;
    private $linkTv;

    public function __construct(){
		
    }

    
	/**
	 * 
	 * @return mixed
	 */
	function getLinkTv() {
		return $this->linkTv;
	}
	
	
	function setLinkTv($linkTv): self {
		$this->linkTv = $linkTv;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getNomeTv() {
		return $this->nomeTv;
	}
	
	
	function setNomeTv($nomeTv): self {
		$this->nomeTv = $nomeTv;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getImagemTv() {
		return $this->imagemTv;
	}
	
	function setImagemTv($imagemTv): self {
		$this->imagemTv = $imagemTv;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getIdTv() {
		return $this->idTv;
	}
	
	function setIdTv($idTv): self {
		$this->idTv = $idTv;
		return $this;
	}
}