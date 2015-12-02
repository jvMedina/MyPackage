<?php

namespace MyApp;

class Message 
{
	public function greet($time = date('Y-m-d H:i:s'))
	{
		$time = date('H',strtotime($time));

		if($time > 12)
		{
			return "Good Afternoon";
		} else if($time >= 18) {
			return "Good Evening";
		} else {
			return "Good Morning";
		}

	}
}