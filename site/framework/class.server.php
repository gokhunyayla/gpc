<?php
class server
{
	
	public $permalink;
	public $login;
	public $nf;
	public $lc;
	
	public function ip()
	{
		if (isset($_SERVER["REMOTE_ADDR"]) && $_SERVER["REMOTE_ADDR"]!="" && $_SERVER["REMOTE_ADDR"]!="::1")
		{
			$return=$_SERVER["REMOTE_ADDR"];	
		}
		else
		{
			$return="127.0.0.1";
		}
		
		return $return;
	}
	
	public function link()
	{		
		if ($this->permalink==-1)
		{
			$return="./";
		}
		else
		{
			$return=$this->permalink;
		}
				
		return $return;
	}
	
	public function protocol()
	{
		if (isset($_SERVER["REQUEST_SCHEME"]))
		{
			$return=$_SERVER["REQUEST_SCHEME"];	
		}
		else
		{
			$return="";
		}
		
		return $return;
	}
	
	public function root()
	{
		if (isset($_SERVER["PHP_SELF"]))
		{
			$return=explode("index.php", $_SERVER["PHP_SELF"]);
			$return=$this->protocol()."://".$this->domain().$return[0];
		}
		else
		{
			$return=-1;
		}
		return $return;
	}
	
	public function domain()
	{
		if (isset($_SERVER["HTTP_HOST"]))
		{
			$return=$_SERVER["HTTP_HOST"];
		}
		else
		{
			$return="";
		}
		
		return $return;
	}
	
	public function uri()
	{
		if (isset($_SERVER["REQUEST_URI"]))
		{
			$return=$_SERVER["REQUEST_URI"];
		}
		else
		{
			$return="";
		}
		
		return $return;
	}
	
	public function folder()
	{
		$return=explode($this->permalink, $this->uri());
		return $return[0];
	}
	
	public function path()
	{
		return $this->protocol()."://".$this->domain().$this->folder();
	}
	
	public function referer()
	{
		if (isset($_SERVER["HTTP_REFERER"]))
		{
			$return=$_SERVER["HTTP_REFERER"];
		}
		else
		{
			$return="";
		}
		
		return $return;
	}
	
	public function device()
	{
		if (isset($_SERVER["HTTP_USER_AGENT"]))
		{
			
			$u_agent = $_SERVER['HTTP_USER_AGENT'];
			$bname = 'Unknown';
			$platform = 'Unknown';
			$version= "";
		
			if (preg_match('/linux/i', $u_agent)) {
				$platform = 'linux';
			}
			elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
				$platform = 'mac';
			}
			elseif (preg_match('/windows|win32/i', $u_agent)) {
				$platform = 'windows';
			}
		   
			if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
			{
				$bname = 'Internet Explorer';
				$ub = "MSIE";
			}
			elseif(preg_match('/Firefox/i',$u_agent))
			{
				$bname = 'Mozilla Firefox';
				$ub = "Firefox";
			}
			elseif(preg_match('/Chrome/i',$u_agent))
			{
				$bname = 'Google Chrome';
				$ub = "Chrome";
			}
			elseif(preg_match('/Safari/i',$u_agent))
			{
				$bname = 'Apple Safari';
				$ub = "Safari";
			}
			elseif(preg_match('/Opera/i',$u_agent))
			{
				$bname = 'Opera';
				$ub = "Opera";
			}
			elseif(preg_match('/Netscape/i',$u_agent))
			{
				$bname = 'Netscape';
				$ub = "Netscape";
			}
		   
			$known = array('Version', $ub, 'other');
			$pattern = '#(?<browser>' . join('|', $known) .
			')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
			if (!preg_match_all($pattern, $u_agent, $matches)) {}
		   
			$i = count($matches['browser']);
			if ($i != 1) 
			{
				if (strripos($u_agent,"Version") < strripos($u_agent,$ub))
				{
					$version= $matches['version'][0];
				}
				else 
				{
					$version= $matches['version'][1];
				}
			}
			else 
			{
				$version= $matches['version'][0];
			}
		   
			if ($version==null || $version=="") {$version="?";}
		   
		    $return = array("userAgent"=>$u_agent, "name"=>$bname, "version"=>$version, "platform"=>$platform, "pattern"=>$pattern);
		   
			return $return["platform"];
			
		}
		else
		{
			$return=-1;
		}
	}
	
	public function browser()
	{
		if (isset($_SERVER["HTTP_USER_AGENT"]))
		{
			
			$u_agent = $_SERVER['HTTP_USER_AGENT'];
			$bname = 'Unknown';
			$platform = 'Unknown';
			$version= "";
		
			if (preg_match('/linux/i', $u_agent)) {
				$platform = 'linux';
			}
			elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
				$platform = 'mac';
			}
			elseif (preg_match('/windows|win32/i', $u_agent)) {
				$platform = 'windows';
			}
		   
			if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
			{
				$bname = 'Internet Explorer';
				$ub = "MSIE";
			}
			elseif(preg_match('/Firefox/i',$u_agent))
			{
				$bname = 'Mozilla Firefox';
				$ub = "Firefox";
			}
			elseif(preg_match('/Chrome/i',$u_agent))
			{
				$bname = 'Google Chrome';
				$ub = "Chrome";
			}
			elseif(preg_match('/Safari/i',$u_agent))
			{
				$bname = 'Apple Safari';
				$ub = "Safari";
			}
			elseif(preg_match('/Opera/i',$u_agent))
			{
				$bname = 'Opera';
				$ub = "Opera";
			}
			elseif(preg_match('/Netscape/i',$u_agent))
			{
				$bname = 'Netscape';
				$ub = "Netscape";
			}
		   
			$known = array('Version', $ub, 'other');
			$pattern = '#(?<browser>' . join('|', $known) .
			')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
			if (!preg_match_all($pattern, $u_agent, $matches)) {}
		   
			$i = count($matches['browser']);
			if ($i != 1) 
			{
				if (strripos($u_agent,"Version") < strripos($u_agent,$ub))
				{
					$version= $matches['version'][0];
				}
				else 
				{
					$version= $matches['version'][1];
				}
			}
			else 
			{
				$version= $matches['version'][0];
			}
		   
			if ($version==null || $version=="") {$version="?";}
		   
		    $return = array("userAgent"=>$u_agent, "name"=>$bname, "version"=>$version, "platform"=>$platform, "pattern"=>$pattern);
		   
			return $return["name"];
			
		}
		else
		{
			$return=-1;
		}
	}
	
	public function language()
	{
		if (isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]))
		{
			if (strpos($_SERVER["HTTP_ACCEPT_LANGUAGE"], ";"))
			{
				$return=explode(";", $_SERVER["HTTP_ACCEPT_LANGUAGE"]);
				
				if (strpos($return[0], ","))
				{
					$return=explode(",", $return[0]);
					
					if (strpos($return[0], "-"))
					{
						$return=explode("-", $_SERVER["HTTP_ACCEPT_LANGUAGE"]);
						$return=$return[0];
						
					}
					else
					{
						$return=-1;
					}
					
				}
				else
				{
					$return=-1;
				}
				
			}
			else
			{
				if (strpos($_SERVER["HTTP_ACCEPT_LANGUAGE"], "-"))
				{
					$return=explode("-", $_SERVER["HTTP_ACCEPT_LANGUAGE"]);
					$return=$return[0];
					
				}
				else
				{
					$return=-1;
				}
			}
		}
		else
		{
			$return=-1;
		}
		
		return $return;
	}
	
	
	public function uec($var0, $var1)
	{
		if ($var0==-1)
		{
			
			if ($var1["command"][0]=="user")
			{
				if ($var1["command"][1]=="login")
				{
					
				}
				elseif ($var1["command"][1]=="login-check")
				{
					
				}
				else
				{
					header("Location: ".$this->login);
				}
			}
			elseif ($var1["command"][0]=="language")
			{
				if ($var1["command"][1]=="change")
				{
					
				}
				else
				{
					header("Location: ".$this->login);
				}
			}
			else
			{
				header("Location: ".$this->login);
			}
			
			
			//if ($var1["command"][0]!="user" && ($var1["command"][1]!="login" && $var1["command"][1]!="login-check"))
			{
				//header("Location: ".$this->login);			
			}
		}
	}
	
	
	public function lec($var0)
	{
		if ($var0==-1)
		{
			header("HTTP/1.1 301 Moved Permanently"); 
			header("Location: ".$this->nf);
		}
		else
		{
			$this->status($var0["command"][0]);
		}	
	}
		
	public function status($var0)
	{
		if ($var0==404)
		{
			http_response_code(404);
		}
		else
		{
			http_response_code(200);
		}
	}
	
	public function response_code($var0) 
	{
		$curl = curl_init($var0);
		curl_setopt($curl, CURLOPT_NOBODY, true);
		$result=curl_exec($curl);
		
		if ($result!==false) 
		{
		  $result=curl_getinfo($curl, CURLINFO_HTTP_CODE);  
		}
		else
		{
		  $result=404;
		}
		
		return $result;
	}
	
}
?>