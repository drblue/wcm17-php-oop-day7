<?php

class GuestsController {
	protected $dbh;

	function __construct($dbh) {
		$this->dbh = $dbh;
	}

	function getGuests() {
		$query = $this->dbh->prepare("SELECT * FROM guests");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_CLASS, 'Guest');
	}

	function getGuest($id) {
		$query = $this->dbh->prepare("SELECT * FROM guests WHERE id = :id");
		$query->execute(['id' => $id]);
		return $query->fetchObject('Guest');
	}
	
	function addGuest(Guest $guest) {
		$query = $this->dbh->prepare("INSERT INTO guests (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");
		$query->execute([
			'firstname' => $guest->getFirstname(),
			'lastname' => $guest->getLastName(),
			'email' => $guest->getEmail(),
		]);
	}
}
