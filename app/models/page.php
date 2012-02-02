<?php

class Page extends AppModel {
	var $name = 'Page';   
	var $created;
	var $modified; 
	var $_schema = array(
	'name' => array(
		'type' => 'string', 
		'length' => 30
		),
	'email' => array(
		'type' => 'string', 
		'length' => 30
		),  
	'phone' => array(
		'type' => 'string', 
		'length' => 30
		),
	'quantity' => array(
		'type' => 'string', 
		'length' => 30
		),		
	'date' => array(
		'type' => 'string', 
		'length' => 30
		),
	'time' => array(
		'type' => 'string', 
		'length' => 30
		),		
	'address' => array(
		'type' => 'text', 
		'length' => 30
		), 
	'feedback' => array(
		'type' => 'text', 
		'length' => 30
		) 
		);
}

?>
