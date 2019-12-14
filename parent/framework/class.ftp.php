<?php
class ftp
{
	public $server;
	public $port;
	public $username;
	public $password;
	public $folder;
	
	public $connection;
	public $login;
	public $chdir;
	
	public function __construct()
	{
	
	}
			
	private function open()
	{
		try 
		{ 
			if ($this->port==22)
			{
				$this->connection=ftp_ssl_connect($this->server);
			}
			else
			{
				$this->connection=ftp_connect($this->server);
			}
		}
        catch (PDOException $e)
		{
			die('FTP bağlantısı başarısız oldu: '.$e->getMessage()); 
		}
	}
	
	public function login()
	{
		$this->login=ftp_login($this->connection, $this->username, $this->password);
	}
	
	public function change_directory($var0)
	{
		ftp_chdir($this->connection, $this->folder."/".$var0);	
	}
	
	public function passive()
	{
		ftp_pasv($this->connection, true);	
	}
			
	public function insert($var0, $var1)
	{
		$this->open();
		$this->login();
		$this->change_directory($var0);
		$this->passive();
				
		$result=ftp_put($this->connection, $var1, "media/".$var0."/".$var1, FTP_BINARY);
		
		$this->close();
		
		return $result;
	}
	
	public function delete($var0, $var1)
	{
		$this->open();
		
		$this->login();
		$this->change_directory($var0);
		$this->passive();
		
		if (ftp_size($this->connection, $var1)!=-1)
		{
			$result=ftp_delete($this->connection, $var1);
		}
		else
		{
			$result="-1";
		}
		
		$this->close();
		
		return $result;
	}	
	
	public function close()
	{
		$this->connection=null;
	}
}
?>