<?php

class Product {
	/*
	*this property represents the base product uri i.e. http://api.saaspose.com/v1.0
	*you can set this property according to the current version you're using
	*/
	// Banckle Account URI
	public static $banckleAccountUri = 'https://apps.banckle.com/api/v2';
	
	// Banckle Chat URI
	public static $banckleChatUri = 'https://chat.banckle.com/v3';
	
	/*
	* Represents API Key for the app.
	*/
	public static $apiKey = '';
	
	public static $xResource = '';

}
?>