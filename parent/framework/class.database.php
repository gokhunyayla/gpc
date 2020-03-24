<?php
class database extends PDO
{
	
	private $connection;
	private $dsn;
	
	public $server;
    public $username;
    public $password;
    public $name;
	
	public $language;	
	public $prefix;

	public $member;
	
	public function __construct()
	{
	
	}
			
	private function open()
	{
		try 
		{ 
			$this->connection = new PDO("mysql:host=".$this->server."; dbname=".$this->name, $this->username, $this->password);
			$this->connection->query("set names utf8");
			$this->connection->query("set character set utf8");
            $this->connection->query("set collation_connection = 'utf8_turkish_ci");
		}
        catch (PDOException $e)
		{
			die('Veritabanı bağlantısı başarısız oldu: '.$e->getMessage()); 
		}
	}
	
	public function close()
	{
		$this->connection = null;
	}
	
	
	public function ofv($var0, $var1=NULL)
	{
		$this->open();
		
		$return=$this->connection->query("select * from ".$this->prefix."option where ".$this->prefix."variable='$var0'");

		if ($return->rowCount()>0)
		{
			$return=$return->fetchAll(PDO::FETCH_ASSOC);
			
			if ($var1==NULL)
			{
				$return=$this->fix($return, 0, $this->language);
			}
			else
			{
				$return=$this->fix($return, 0, $var1);
			}
		}
		else
		{
			$return=-1;
		}
	
		$this->close();
		
		return $return;
	}
	
	public function afl($var0)
	{
		$this->open();
		
		$return=$this->connection->query("select * from ".$this->prefix."link where ".$this->prefix."link_".$this->language."='$var0'");

		if ($return->rowCount()>0)
		{
			$return=$return->fetchAll(PDO::FETCH_ASSOC);
			$return=$this->fix($return);
		}
		else
		{
			$return=-1;
		}
	
		$this->close();
		
		return $return;
	}
	
	public function afc($var0, $var1="asc", $var2=NULL)
	{
		$this->open();
		
		if ($var2==NULL)
		{
			$return=$this->connection->query("select * from ".$this->prefix."link where ".$this->prefix."category=$var0 order by ".$this->prefix."id $var1");
		}
		else
		{
			$return=$this->connection->query("select * from ".$this->prefix."link where ".$this->prefix."category=$var0 order by ".$this->prefix."id $var1 limit $var2");
		}
		
		if ($return->rowCount()>0)
		{
			$return=$return->fetchAll(PDO::FETCH_ASSOC);
			$return=$this->fix($return);
		}
		else
		{
			$return=-1;
		}
	
		$this->close();
		
		return $return;
	}
	
	public function afv($var0)
	{
		$this->open();
	
		$return=$this->connection->query("select * from ".$this->prefix."link where ".$this->prefix."variable='".$var0."'");
		
		if ($return->rowCount()>0)
		{
			$return=$return->fetchAll(PDO::FETCH_ASSOC);
			$return=$this->fix($return); $return=$return[0]["link"];
		}
		else
		{
			$return=-1;
		}
	
		$this->close();
		
		return $return;
	}
	
	public function afx($var0, $var1="asc")
	{
		$this->open();
		
		$return=$this->connection->query("select * from ".$this->prefix."link where ".$this->prefix."content_".$this->language." like '%".$var0."%' order by ".$this->prefix."id $var1");

		if ($return->rowCount()>0)
		{
			$return=$return->fetchAll(PDO::FETCH_ASSOC);
			$return=$this->fix($return);
		}
		else
		{
			$return=-1;
		}
	
		$this->close();
		
		return $return;
	}
	
	public function afi($var0)
	{
		$this->open();
		
		$return=$this->connection->query("select * from ".$this->prefix."link where ".$this->prefix."id=".$var0);

		if ($return->rowCount()>0)
		{
			$return=$return->fetchAll(PDO::FETCH_ASSOC);
			$return=$this->fix($return);
		}
		else
		{
			$return=-1;
		}
	
		$this->close();
		
		return $return;
	}
	
	public function afq($var0)
	{
		$this->open();
		
		$return=$this->connection->query("select * from ".$this->prefix."link where ".$var0);

		if ($return->rowCount()>0)
		{
			$return=$return->fetchAll(PDO::FETCH_ASSOC);
			$return=$this->fix($return);
		}
		else
		{
			$return=-1;
		}
	
		$this->close();
		
		return $return;
	}
	
	public function lc($var0, $var1)
	{
		$this->open();
		
		$return=$this->connection->query("select * from ".$this->prefix."user where ".$this->prefix."email='".$var0."' and ".$this->prefix."password='".$var1."'");
		
		if ($return->rowCount()>0)
		{
			$return=$return->fetchAll(PDO::FETCH_ASSOC);
			$return=$this->fix($return); $return=$return[0];
		}
		else
		{
			$return=-1;
		}
	
		$this->close();
		
		return $return;
	}
	
	public function sfd($var0)
	{
		$this->open();
	
		$return=$this->connection->query("select * from ".$this->prefix."site where ".$this->prefix."domain='".$var0."'");
		
		if ($return->rowCount()>0)
		{
			$return=$return->fetchAll(PDO::FETCH_ASSOC);
			$return=$this->fix($return); $return=$return[0];
		}
		else
		{
			$return=-1;
		}
	
		$this->close();
		
		return $return;
	}

	public function sfi($var0)
	{
		$this->open();
	
		$return=$this->connection->query("select * from ".$this->prefix."site where ".$this->prefix."id=".$var0."");
		
		if ($return->rowCount()>0)
		{
			$return=$return->fetchAll(PDO::FETCH_ASSOC);
			$return=$this->fix($return); $return=$return[0];
		}
		else
		{
			$return=-1;
		}
	
		$this->close();
		
		return $return;
	}

	public function sl()
	{
		$this->open();
	
		$return=$this->connection->query("select * from ".$this->prefix."site where ".$this->prefix."status<>'removed'");
		
		if ($return->rowCount()>0)
		{
			$return=$return->fetchAll(PDO::FETCH_ASSOC);
			$return=$this->fix($return);
		}
		else
		{
			$return=-1;
		}
	
		$this->close();
		
		return $return;
	}

	public function si($var0)
	{
		$this->open();
		$return=$this->connection->prepare("insert into ".$this->prefix."site set $var0")->execute();
		$this->close();
		return $return;
	}

	public function su($var0)
	{
		$this->open();
		$return=$this->connection->prepare("update ".$this->prefix."site set $var0")->execute();
		$this->close();
		return $return;
	}
	
	public function sd($var0)
	{
		$this->open();
		$return=$this->connection->prepare("delete from ".$this->prefix."site where $var0")->execute();
		$this->close();
		return $return;
	}

	public function cs($var0=NULL)
	{
		$this->open();
		
		if ($var0==NULL)
		{
			$return=$this->connection->query("select * from ".$this->prefix."contact");
		}
		else
		{
			$return=$this->connection->query("select * from ".$this->prefix."contact where $var0");
		}
				
		if ($return->rowCount()>0)
		{
			$return=$return->fetchAll(PDO::FETCH_ASSOC);
			$return=$this->fix($return);
		}
		else
		{
			$return=-1;
		}
	
		$this->close();
		
		return $return;
	}
	
	public function cfd($var0, $var1)
	{
		$this->open();
		
		$return=$this->connection->query("select * from ".$this->prefix."contact ".$this->prefix."insert_date between '$var0' and '$var1'");
				
		if ($return->rowCount()>0)
		{
			$return=$return->fetchAll(PDO::FETCH_ASSOC);
			$return=$this->fix($return);
		}
		else
		{
			$return=-1;
		}
	
		$this->close();
		
		return $return;
	}
	
	public function ou($var0)
	{
		$this->open();
		$return=$this->connection->prepare("update ".$this->prefix."option set $var0")->execute();
		$this->close();
		return $return;
	}
	
	public function ci($var0)
	{
		$this->open();
		$return=$this->connection->prepare("insert into ".$this->prefix."contact set $var0")->execute();
		$return=$this->connection->lastInsertId();
		$this->close();
		return $return;
	}
	
	public function cu($var0)
	{
		$this->open();
		$return=$this->connection->prepare("update ".$this->prefix."contact set $var0")->execute();
		$this->close();
		return $return;
	}
	
	public function cd($var0)
	{
		$this->open();
		$return=$this->connection->prepare("delete from ".$this->prefix."contact where $var0")->execute();
		$this->close();
		return $return;
	}
	
	public function ls($var0=NULL)
	{
		$this->open();
		
		if ($var0==NULL)
		{
			$return=$this->connection->query("select * from ".$this->prefix."link");
		}
		else
		{
			$return=$this->connection->query("select * from ".$this->prefix."link where $var0");
		}
				
		if ($return->rowCount()>0)
		{
			$return=$return->fetchAll(PDO::FETCH_ASSOC);
			$return=$this->fix($return);
		}
		else
		{
			$return=-1;
		}
	
		$this->close();
		
		return $return;
	}
	
	public function lq($var0=NULL)
	{
		$this->open();
		
		$return=$this->connection->query("select * from ".$this->prefix."link $var0");
				
		if ($return->rowCount()>0)
		{
			$return=$return->fetchAll(PDO::FETCH_ASSOC);
			$return=$this->fix($return);
		}
		else
		{
			$return=-1;
		}
	
		$this->close();
		
		return $return;
	}
	
	public function li($var0)
	{
		$this->open();
		$return=$this->connection->prepare("insert into ".$this->prefix."link set $var0")->execute();
		$return=$this->connection->lastInsertId();
		$this->close();
		return $return;
	}
	
	public function lu($var0)
	{
		$this->open();
		$return=$this->connection->prepare("update ".$this->prefix."link set $var0")->execute();
		$this->close();
		return $return;
	}
	
	public function ld($var0)
	{
		$this->open();
		$return=$this->connection->prepare("delete from ".$this->prefix."link where $var0")->execute();
		$this->close();
		return $return;
	}
	
	public function us($var0=NULL)
	{
		$this->open();
		
		if ($var0==NULL)
		{
			$return=$this->connection->query("select * from ".$this->prefix."user");
		}
		else
		{
			$return=$this->connection->query("select * from ".$this->prefix."user where $var0");
		}
				
		if ($return->rowCount()>0)
		{
			$return=$return->fetchAll(PDO::FETCH_ASSOC);
			$return=$this->fix($return);
		}
		else
		{
			$return=-1;
		}
	
		$this->close();
		
		return $return;
	}
	
	public function ui($var0)
	{
		$this->open();
		$return=$this->connection->prepare("insert into ".$this->prefix."user set $var0")->execute();
		$return=$this->connection->lastInsertId();
		$this->close();
		return $return;
	}
	
	public function uu($var0)
	{
		$this->open();
		$return=$this->connection->prepare("update ".$this->prefix."user set $var0")->execute();
		$this->close();
		return $return;
	}
	
	public function ud($var0)
	{
		$this->open();
		$return=$this->connection->prepare("delete from ".$this->prefix."user where $var0")->execute();
		$this->close();
		return $return;
	}
	
	public function ac($var0, $var1, $var2, $var3, $var4)
	{
		$this->open();
		$return=$this->connection->prepare("alter table $var0 change $var1 $var2 $var3 $var4")->execute();
		$this->close();
		return $return;
	}
	
	public function aa($var0, $var1, $var2, $var3)
	{
		$this->open();
		$return=$this->connection->prepare("alter table $var0 add ($var1 $var2 $var3)")->execute();
		$this->close();
		return $return;
	}
	
	public function ad($var0, $var1)
	{
		$this->open();
		$return=$this->connection->prepare("alter table $var0 drop column $var1")->execute();
		$this->close();
		return $return;
	}
	
	public function tc($var0, $var1, $var2)
	{
		$this->open();
		$return=$this->connection->prepare("update $var0 set $var2=$var1")->execute();
		$this->close();
		return $return;
	}
	
	public function fix($var0, $var1=-1, $var2=NULL)
	{
		$return=array();
		if ($var1==-1)
		{
			foreach ($var0 as $key0=>$value0)
			{
				if ($var2==NULL)
				{
					foreach ($value0 as $key1=>$value1)
					{
						$key1f=ltrim($key1, $this->prefix); if (substr($key1f, -strlen("_".$this->language))=="_".$this->language){ $key1f=substr($key1f, 0, strlen($key1f)-strlen("_".$this->language)); }
						if (is_array(json_decode($value1, true)))
						{
							$return[$key0][ltrim($key1f, $this->prefix)]=json_decode($value1, true);
						}
						else
						{
							$return[$key0][ltrim($key1f, $this->prefix)]=$value1;
						}
					}
				}
				else
				{
					$return[$key0][$var2]=json_decode($value0[$this->prefix.$var2], true);
				}
			}
		}
		else
		{
			if ($var2==NULL)
            {
                foreach ($var0 as $key1=>$value1)
                {
                    if (is_array(json_decode($value1, true)))
                    {
                        $return[ltrim($key1, $this->prefix)]=json_decode($value1, true);
                    }
                    else
                    {
                        $return[ltrim($key1, $this->prefix)]=$value1;
                    }
                }
            }
            else
            {
                $return=json_decode($var0[$var1][$this->prefix.$var2], true);
            }
		}
		return $return;
	}
}
?>