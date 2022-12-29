<?php
require_once("Model.php");

class User extends Model{
	public function __construct(){
		parent::__construct("users",array("email","first_name","last_name","phone_number","role","password"));
	}
}
?>
