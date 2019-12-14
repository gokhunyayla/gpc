<?php
class datetimes extends datetime
{
	
	public $today;
	public $tomorrow;
	
	public function __construct()
	{
		$this->today=date("Y-m-d H:i:s");
	}
	
	public function difference($var0, $var1)
	{
		$datetime1 		= date_create($var0);
		$datetime2 		= date_create($var1);
		$interval 		= date_diff($datetime1, $datetime2);
		
		$day			= $interval->format("%r%a");
		$hour			= $interval->format("%r%h");
		$minute			= $interval->format("%r%i");
		$second			= $interval->format("%r%s");
		
		if ($hour>0)
		{
			$dayconstant= intval($day)+1;
		}
		else
		{
			$dayconstant= intval($day);
		}
		
		return array("day"=>$day, "hour"=>$hour, "minute"=>$minute, "second"=>$second, "dayconstant"=>$dayconstant);
	}
	
	public function insert()
	{
		return array("insert-date"=>array("day"=>date("d"), "month"=>$this->month(date("m")), "year"=>date("Y"), "hour"=>date("H"), "minute"=>date("i"), "second"=>date("s")));
	}
	
	public function update($var0)
	{
		$var0["update-date"]=array("day"=>date("d"), "month"=>$this->month(date("m")), "year"=>date("Y"), "hour"=>date("H"), "minute"=>date("i"), "second"=>date("s"));
		return $var0;
	}
		
	public function day($var0)
	{
		$days=array("Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi", "Pazar");
		return $days[$var0-1];
	}
	
	public function day_short($var0)
	{
		$days=array("Pts", "Sal", "Çrş", "Prş", "Cum", "Cts", "Paz");
		return $days[$var0-1];
	}
	
	public function month($var0)
	{
		$months=array("Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık");
		return $months[$var0-1];
	}
	
	public function month_number($var0)
	{
		$months=array("Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık");
		return array_search($var0, $months) + 1;
	}
	
	public function month_short($var0)
	{
		$months=array("Oca", "Şub", "Mar", "Nis", "May", "Haz", "Tem", "Ağu", "Eyl", "Eki", "Kas", "Ara");
		return $months[$var0-1];
	}
	
	public function cdt($var0, $var1)
	{
		$var2=explode(" ", $var0); $var3=explode("-", $var2[0]); $var4=explode(":", $var2[1]);
		return array($var1."-date"=>array($var3[2], $this->month($var3[1]), $var3[0]), $var1."-time"=>array($var4[0], $var4[1]));
	}
	
	public function c2d($var0)
	{
		return $var0[2]."-".$this->month_number($var0[1])."-".$var0[0];
	}
	
	//yeni
	public function e($var0)
	{
		$exploded=explode(" ", $var0);
		$return["date"]=explode("-", $exploded[0]);
		$return["time"]=explode(":", $exploded[1]);
		return $return;
	}
		
}
?>