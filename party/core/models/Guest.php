<?php

class Guest {
	protected $id;
	protected $firstname;
	protected $lastname;
	protected $email;

	function getId() {
		return $this->id;
	}

	function getFirstName() {
		return $this->firstname;
	}
	function setFirstName($firstname) {
		$this->firstname = $firstname;
	}

	function getLastName() {
		return $this->lastname;
	}
	function setLastName($lastname) {
		$this->lastname = $lastname;
	}

	function getName() {
		return "{$this->firstname} {$this->lastname}";
	}

	function getEmail() {
		if (empty($this->email)) {
			return "No email";
		}
		return $this->email;
	}
	function setEmail($email) {
		$this->email = $email;
	}
}
