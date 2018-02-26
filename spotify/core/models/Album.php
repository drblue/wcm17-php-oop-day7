<?php

class Album {
	protected $id;
	protected $name;
	protected $releaseYear;
	protected $artist_id;

	function getId() {
		return $this->id;
	}

	function getName() {
		return $this->name;
	}

	function getReleaseYear() {
		return $this->releaseYear;
	}

	function getArtistId() {
		return $this->artist_id;
	}
}
