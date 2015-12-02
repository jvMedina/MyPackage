<?php

namespace MyApp;

class Message 
{
	public function greet($time = null)
	{
		$time = date('H',strtotime($time));

		if($time > 12)
		{
			return "Afternoon";
		} else if($time >= 18) {
			return "Evening";
		} else {
			return "Morning";
		}

	}
}