<?php
class cookie
{
	public function set($var0, $var1, $var2, $var3="./")
	{
		return setcookie($var0, $var1, time()+$var2, $var3);
	}
	
	public function get($var0, $var1=null)
	{
		if (isset($_COOKIE[$var0]))
		{
			$return=$_COOKIE[$var0];
		}
		else
		{
			if ($var1==null)
			{
				$return=-1;
			}
			else
			{
				$return=$var1;
			}
		}
		return $return;
	}
	
}
?>