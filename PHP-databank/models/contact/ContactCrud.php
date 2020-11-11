<?php

/**
*
* Classe que configura o crud do contato
*
* @author 
*
*/
class ContactCrud {

	private $pdoCrud;
	private $table = 'contact';

	public function __construct() {

		$this->pdoCrud = new PDOCrud;

	}

	public function saveContact($id=null, $cliente, $contato, $modelo, $valor, $obs) {

		$pdo = array(
			':cliente' => $cliente,
			':contato' => $contato,
			':modelo' => $modelo,
			':valor' => $valor,
			':obs' => $obs,
		);

		$columns = 'cliente, contato, modelo, valor, obs';
		$values = ':cliente, :contato, :modelo, :valor, :obs';

		return $this->pdoCrud->insert($this->table, $columns, $values, $pdo);
	}
}