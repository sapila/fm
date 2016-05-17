<?php 

namespace App\Controller;

use Silver\Support\Validate as Validate;
use Silver\Support\Request as Request;



/**
* 
*/
class ClassName extends AnotherClass
{
	
public function test()
{
	Request::All();
	Validate::chekc([
		"username" 	=> "required|min:4|max:50|unique",
		"email" 	=> "unique",
		"username" 	=> "max:50|unique|required",
		"username" 	=> "required|max:50|unique"
	]);
	//DB::save();
	
}
}