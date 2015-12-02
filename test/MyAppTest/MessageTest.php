<?php

namespace MyAppTest;

use MyApp\Message;
use PHPUnit_Framework_TestCase;

class MessageTest extends PHPUnit_Framework_TestCase 
{

	public function testGreet()
	{
		$mess = new Message();
		$time = $mess->greet(date('Y-m-d H:i:s'));

		$this->assertEquals($time,'Morning');
	}

}