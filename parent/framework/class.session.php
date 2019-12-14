<?php
class session
{
	public function set($var0, $var1)
	{
		return $_SESSION[$var0]=$var1;
	}
	
	public function get($var0)
	{
		if (isset($_SESSION[$var0]))
		{
			$return=$_SESSION[$var0];
		}
		else
		{
			$return=-1;
		}
		return $return;
	}
}
?>