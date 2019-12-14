<?php
class file
{
	public $path;
	
	public function upload($var1=NULL, $var2=NULL)
	{
		if (isset($_FILES))
		{
			
			foreach ($_FILES as $key0=>$value0)
			{
				if (isset($value0["name"]))
				{
					foreach ($value0["name"] as $key1=>$value1)
					{
						foreach ($value1 as $key2=>$value2)
						{
							if (is_array($value2))
							{
								foreach ($value2 as $key3=>$value3)
								{
									if ($value3=="")
									{
										$result[$key1][$key2][$key3]="";
									}
									else
									{
										$extention=explode(".", $value3); $extention=".".$extention[count($extention)-1];

										if ($var1=="key")
										{
											$result[$key1][$key2][$key3]=$var2[$key1][$key2]["image"].$extention;
										}
										else
										{
											$result[$key1][$key2][$key3]=$key3.$extention;
										}
										
										move_uploaded_file($value0["tmp_name"][$key1][$key2][$key3], $this->path["media"]."/".$result[$key1][$key2][$key3]);
									}
								}
							}
							else
							{
								if ($value2=="")
								{
									$result[$key1][$key2]="";
								}
								else
								{
									$extention=explode(".", $value2); $extention=".".$extention[count($extention)-1];
									
									if ($var1=="key")
                                    {
                                        $result[$key1][$key2]=$var2.$extention;
                                    }
                                    else
                                    {
                                        $result[$key1][$key2]=$key2.$extention;
                                    }
									
									move_uploaded_file($value0["tmp_name"][$key1][$key2], $this->path["media"]."/".$result[$key1][$key2]);
								}	
							}
						}
					}
				}
				
			}
		}
		else
		{
			$result="";
		}
		
		return $result;
	}
	
	public function upload2($var1=NULL, $var2=NULL)
	{
		if (isset($_FILES["source"]))
		{
			
			foreach ($_FILES["source"] as $key0=>$value0)
			{

				if ($key0=="name")
				{
					
					foreach ($value0 as $key1=>$value1)
					{
						
						foreach ($value1 as $key2=>$value2)
						{
							if (isset($value2))
							{
								
								foreach ($value2 as $key3=>$value3)
								{
									if ($value3=="")
									{
										$result[$key1][$key2][$key3]="";
									}
									else
									{
										if (is_array($value3))
										{
											foreach ($value3 as $key4=>$value4)
											{
												$extention=explode(".", $value4); $extention=".".$extention[count($extention)-1];
												$result[$key1][$key2][$key3][$key4]=$var2[$key1][$key2][$key3][$key4].$extention;
												move_uploaded_file($_FILES["source"]["tmp_name"][$key1][$key2][$key3][$key4], $this->path["media"]."/".$result[$key1][$key2][$key3][$key4]);
											}
										}
										else
										{
											$extention=explode(".", $value3); $extention=".".$extention[count($extention)-1];

											if ($var1=="key")
											{
												if (isset($var2["content_".$key1]))
												{
													$result[$key1][$key2][$key3]=$var2["content_".$key1][$key2]["image"].$extention;
												}
												else
												{
													$result[$key1][$key2][$key3]=$var2[$key1][$key2]["image"].$extention;
												}
											}
											else
											{
												$result[$key1][$key2][$key3]=$key3.$extention;
											}

											move_uploaded_file($_FILES["source"][$key1][$key2][$key3], $this->path["media"]."/".$result[$key1][$key2][$key3]);
										}
									}
								}
							}
							else
							{
								if ($value2=="")
								{
									$result[$key1][$key2]="";
								}
								else
								{
									$extention=explode(".", $value2); $extention=".".$extention[count($extention)-1];
									
									if ($var1=="key")
                                    {
                                        $result[$key1][$key2]=$var2.$extention;
                                    }
                                    else
                                    {
                                        $result[$key1][$key2]=$key2.$extention;
                                    }
									
									move_uploaded_file($_FILES["source"][$key1][$key2], $this->path["media"]."/".$result[$key1][$key2]);
								}	
							}
						}
					}
				}
				
			}
		}
		else
		{
			$result="";
		}
		
		return $result;
	}
	
	public function dropzone($var0)
	{
		if (isset($_FILES["files"]["name"]) && $_FILES["files"]["name"][0]!="")
		{	

			foreach ($_FILES["files"]["name"] as $key0=>$value0)
			{
				$extention=explode(".", $value0); $extention=".".$extention[count($extention)-1];
				$result[$key0]=base64_encode(json_encode(array($key0, "date"=>date("Y-m-d"), "time"=>date("H:i:s")), JSON_UNESCAPED_UNICODE)).$extention;
								
				move_uploaded_file($_FILES["files"]["tmp_name"][$key0], $this->path["media"]."/".$var0."/".$result[$key0]);
			}
		}
		else
		{
			$result="";
		}
		
		return $result;
	}
	
	public function droplang()
	{		
		if (isset($_FILES["data"]["name"]))
		{
			foreach ($_FILES["data"]["name"] as $key0=>$value0)
			{
				if (is_array($value0["body"]["image"]))
				{
					foreach ($value0["body"]["image"] as $key1=>$value1)
					{
						if (isset($value1) && $value1!="")
						{
							$extention=explode(".", $value1); $extention=".".$extention[count($extention)-1];
							$result[$key0]["body"]["image"][$key1]=base64_encode(json_encode(array($key0, $key1, "date"=>date("Y-m-d"), "time"=>date("H:i:s")), JSON_UNESCAPED_UNICODE)).$extention;
							move_uploaded_file($_FILES["data"]["tmp_name"][$key0]["body"]["image"][$key1], $this->path["media"]."/".$key0."/".$result[$key0]["body"]["image"][$key1]);
						}
						else
						{
							$result[$key0]["body"]["image"][$key1]="none.jpg";	
						}
					}
				}
				else
				{
					$result="";	
				}
			}
		}
		else
		{
			$result="";	
		}
		
		return $result;
	}
	
	public function content($var0)
	{
		return file_get_contents($var0);	
	}
	
}
?>