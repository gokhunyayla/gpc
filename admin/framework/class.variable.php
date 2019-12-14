<?php
class variable
{
	public function latin_replace($var0)
	{
		$return=str_replace("    ", "-", $var0);
		$return=str_replace("   ", "-", $return);
		$return=str_replace("  ", "-", $return);
		$return=str_replace(" ", "-", $return);
		$return=str_replace(".", "-", $return);
		$return=str_replace("ş", "s", $return);
		$return=str_replace("ö", "o", $return);
		$return=str_replace("ı", "i", $return);
		$return=str_replace("ç", "c", $return);
		$return=str_replace("ğ", "g", $return);
		$return=str_replace("ü", "u", $return);
		$return=str_replace("Ş", "s", $return);
		$return=str_replace("Ö", "o", $return);
		$return=str_replace("İ", "i", $return);
		$return=str_replace("Ç", "c", $return);
		$return=str_replace("Ğ", "g", $return);
		$return=str_replace("<", "-", $return);
		$return=str_replace(">", "-", $return);
		$return=str_replace("!", "-", $return);
		$return=str_replace("?", "-", $return);
		$return=str_replace(":", "-", $return);
		$return=str_replace(";", "-", $return);
		$return=str_replace("&", "-", $return);
		$return=str_replace("+", "-", $return);
		$return=str_replace("'", "-", $return);
		$return=str_replace("\"", "-", $return);
		$return=str_replace("\/", "-", $return);
		$return=str_replace("*", "-", $return);
		$return=str_replace("%", "-", $return);
		$return=str_replace("(", "-", $return);
		$return=str_replace(")", "-", $return);
		$return=str_replace("=", "-", $return);

		return $return;
	}
}
?>