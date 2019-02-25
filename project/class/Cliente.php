<?php

require_once "Connection.php";

class Cliente{
	private $objConnection;
	private $getConnectionn;
	private $input1;
	private $input2;
	private $input3;

	public function __construct() {
		$this->objConnection = new Connection();
	}

	public function queryInsert($dados){
		$this->getConnectionn = $this->objConnection->getConnectionn();
		$sql = "INSERT INTO cliente (:input1, :input2, :input3) VALUES (input1, input2, input3)";
		$this->input1 = $dados['input1'];
		$this->input2 = $dados['input2'];
		$this->input3 = $dados['input3'];

		$stmt = $this->getConnectionn->prepare($sql);
		$stmt->bindParam(":input1", $input1);
		$stmt->bindParam(":input2", $input2);
		$stmt->bindParam(":input3", $input3);

		if ($stmt->execute()) {
			return "ok";
		} else {
			return "Erro";
		}
	}
}


?>