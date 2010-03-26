<?php

	class Pizza {
		public $sabor;
		public $tamanho;
		public $preco;
		
		function __construct($sabor= 'queijo', $tamanho= 'media', $preco= 10) {
			$this->sabor= $sabor;
			$this->tamanho= $tamanho;
			$this->preco= $preco;
		}

	}

?>