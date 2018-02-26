<?php

class Track {
	protected $id;
	protected $name;
	protected $trackLength;
	protected $album_id;

	function getId() {
		return $this->id;
	}

	function getName() {
		return $this->name;
	}

	// @todo: improve to return minutes:seconds instead of just seconds
	function getTrackLength() {
		return $this->trackLength;
	}

	function getAlbumId() {
		return $this->album_id;
	}
}
