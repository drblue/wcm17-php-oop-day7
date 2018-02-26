<?php

class Artist {
	protected $id;
	protected $name;
	protected $birthdate;

	function getId() {
		return $this->id;
	}

	function getName() {
		return $this->name;
	}

	function getBirthdate() {
		return $this->birthdate;
	}
}
