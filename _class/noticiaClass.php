<?php

class noticiaClass{
  private $tituloNoticia;
  private $corpoNoticia;
  private $imagemNoticia;

  
	/**
	 * @return mixed
	 */
	function getImagemNoticia() {
		return $this->imagemNoticia;
	}
	
	/**
	 * @param mixed $imagemNoticia 
	 * @return noticiaClass
	 */
	function setImagemNoticia($imagemNoticia): self {
		$this->imagemNoticia = $imagemNoticia;
		return $this;
	}
	/**
	 * @return mixed
	 */
	function getTituloNoticia() {
		return $this->tituloNoticia;
	}
	
	/**
	 * @param mixed $tituloNoticia 
	 * @return noticiaClass
	 */
	function setTituloNoticia($tituloNoticia): self {
		$this->tituloNoticia = $tituloNoticia;
		return $this;
	}
	/**
	 * @return mixed
	 */
	function getCorpoNoticia() {
		return $this->corpoNoticia;
	}
	
	/**
	 * @param mixed $corpoNoticia 
	 * @return noticiaClass
	 */
	function setCorpoNoticia($corpoNoticia): self {
		$this->corpoNoticia = $corpoNoticia;
		return $this;
	}
}