<?php

/*
*
* Controller do formulário de contato
*
* @author Code Universe
*
*/
class ContactController extends Controller {

	//função para cadastro de formulário
	public function submitContact() {
			$id = null;
			$cliente = $_POST['cliente'];
			$contato = $_POST['contato'];
			$modelo = $_POST['modelo'];
			$valor = $_POST['valor'];
			$obs = $_POST['obs'];

			$saveContact = new ContactCrud;
			$saveContact = $saveContact->saveContact($id, $cliente, $contato, $modelo, $valor, $obs);

			echo json_encode(array(
				'result' => $saveContact,
			));

	}
}
