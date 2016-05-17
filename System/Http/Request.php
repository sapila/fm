<?php 

//namespace Silver\Support;

/**
* Request
*/
class Request
{
	public static function all()
	{
		if (isset($_POST)) {
			return htmlentities($_POST);
		}
		else{
			return htmlentities($_GET);
		}
	}

	public static function input($name)
	{
		if (isset($_POST[$name])) {
			return htmlentities($_POST[$name]);
		}
		else{
			return htmlentities($_GET[$name]);
		}
	}
}