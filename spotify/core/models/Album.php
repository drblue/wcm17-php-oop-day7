<?php

class Album {
	protected $id;
	protected $name;
	protected $releaseyear;
	protected $artist_id;

	function getId() {
		return $this->id;
	}

	function getName() {
		return $this->name;
	}

	function getReleaseYear() {
		return $this->releaseyear;
	}

	function getArtistId() {
		return $this->artist_id;
	}
}
