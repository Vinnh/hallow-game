<?php 
class Partida {
    private $id;
    private $nome;
    private $acertos;
    private $erros;
	private $tentativas;
    private $data_hora;

    /* --- GETTERS AND SETTERS ---*/
	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getAcertos() {
		return $this->acertos;
	}

	public function setAcertos($acertos) {
		$this->acertos = $acertos;
	}

	public function getErros() {
		return $this->erros;
	}

	public function setErros($erros) {
		$this->erros = $erros;
	}

	public function getTentativas() {
		return $this->tentativas;
	}

	public function setTentativas($tentativas) {
		$this->tentativas = $tentativas;
	}

	public function getData_hora() {
		return $this->data_hora;
	}

	public function setData_hora($data_hora) {
		$this->data_hora = $data_hora;
	}
}
?>