<?php
class faucetClass{
    private $idFaucet;
    private $nomeFaucet;
    private $imagemFaucet;
    private $linkFaucet;
    private $descricaoFaucet;

    public function __construct(){
        
    } 
	/**
	 * 
	 * @return mixed
	 */
	function getIdFaucet() {
		return $this->idFaucet;
	}
	
	/**
	 * 
	 * @param mixed $idFaucet 
	 * @return faucetClass
	 */
	function setIdFaucet($idFaucet): self {
		$this->idFaucet = $idFaucet;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getNomeFaucet() {
		return $this->nomeFaucet;
	}
	
	/**
	 * 
	 * @param mixed $nomeFaucet 
	 * @return faucetClass
	 */
	function setNomeFaucet($nomeFaucet): self {
		$this->nomeFaucet = $nomeFaucet;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getImagemFaucet() {
		return $this->imagemFaucet;
	}
	
	/**
	 * 
	 * @param mixed $imagemFaucet 
	 * @return faucetClass
	 */
	function setImagemFaucet($imagemFaucet): self {
		$this->imagemFaucet = $imagemFaucet;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getLinkFaucet() {
		return $this->linkFaucet;
	}
	
	/**
	 * 
	 * @param mixed $linkFaucet 
	 * @return faucetClass
	 */
	function setLinkFaucet($linkFaucet): self {
		$this->linkFaucet = $linkFaucet;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getDescricaoFaucet() {
		return $this->descricaoFaucet;
	}
	
	/**
	 * 
	 * @param mixed $descricaoFaucet 
	 * @return faucetClass
	 */
	function setDescricaoFaucet($descricaoFaucet): self {
		$this->descricaoFaucet = $descricaoFaucet;
		return $this;
	}
}


?>