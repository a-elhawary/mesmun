<?php
require_once("Model.php");

class Event extends Model{
	public function __construct(){
		parent::__construct("events", array("name", "description"));
	}
}
?>
