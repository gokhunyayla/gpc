<?php
class replace
{
	public $template;
	public $language;
	public $path;
	public $brand;
	public $copyright;
    public $text=array("{{HOME-URL}}", "{{LOGO}}", "{{TITLE}}", "{{CONTENT}}", "{{COPYRIGHT}}");
	
	public function template($var0)
	{
		$var0=str_replace("{{template}}", $this->template, $var0);
		$var0=str_replace("{{language}}", $this->language, $var0);
		return $var0;
	}
	
	public function email_template($var0)
	{
	    $return=str_replace($this->text, $var0, $this->get_template());
		
		return $return;
	}
	
	public function get_template()
	{
	    return file_get_contents($this->path["email"]."/standart.html");	
	}
	
	function watermarkImage ($var0) 
	{ 
		list($width, $height) = getimagesize($var0);
		$image_p = imagecreatetruecolor($width, $height);
		$image = imagecreatefromjpeg($var0);
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width, $height); 
		
		$black = imagecolorallocatealpha($image_p, 50, 50, 50, 70);
		$renk = imagecolorallocatealpha($image_p, 255, 255, 255, 70);
				
		$font = $this->template_path.'assets/vendors/custom/yaylabros/font/yukari/yukari.ttf';
		$font_size = 16;
		
		imagettftext($image_p, $font_size, 0, 36, 76, $black, $font, $this->brand);
		imagettftext($image_p, $font_size, 0, 35, 75, $renk, $font, $this->brand);
				
		if ($var0<>'') 
		{
		  imagejpeg ($image_p, $var0, 100); 
		} 
		else 
		{
			header('Content-Type: image/jpeg');
			imagejpeg($image_p, null, 100);   
		}
		
		imagedestroy($image); 
		imagedestroy($image_p); 
	} 
}
?>