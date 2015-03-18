<?php defined('SYSPATH') or die('No direct script access.');

class Twilio_Sms_Provider implements Sms_Provider_Core {
	
	public function send($to = NULL, $from = NULL, $message = NULL)
	{
		if (isset($from) && isset($body) && isset($to) && !empty($body) && !empty($from)) {
			$status = sms::add($from, $body, $to);
			if ($status === TRUE) {
				echo "<Response><Sms>".$body."</Sms></Response>\n";
				return;
			}
		} else {
			return "Twilio not configured!";
		}
	}
	
}
