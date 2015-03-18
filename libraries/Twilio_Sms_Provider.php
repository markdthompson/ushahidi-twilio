<?php defined('SYSPATH') or die('No direct script access.');

class Twilio_Sms_Provider implements Sms_Provider_Core {
	
	public function send($to = NULL, $from = NULL, $message = NULL)
	{
		if (isset($from) && isset($message) && isset($to) && !empty($message) && !empty($from)) {
			$status = sms::add($from, $message, $to);
			if ($status === TRUE) {
				echo "<Response><Sms>".$message."</Sms></Response>\n";
				return;
			}
		} else {
			return "Twilio not configured!";
		}
	}
	
}
