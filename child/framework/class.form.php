<?php
class form
{
	
	function get($var0, $var1=NULL)
	{
		if (isset($_GET[$var0]))
		{
			$return=$_GET[$var0];	
		}
		else
		{
			if ($var1==NULL)
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
	
	
	function post($var0, $var1=NULL)
	{
		if (isset($_POST[$var0]))
		{
			$return=$_POST[$var1];	
		}
		else
		{
			if ($var1==NULL)
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