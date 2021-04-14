<?php

class meyve
{
	public $name="karpuz";
	public $color="Yeşil";

	public function __cunstruct($name,$color)
	{
		$this->name = $name;
		$this->color = $color;
	}
	public function meyveyiYaz()
	{
		echo "Adı: {$this->name} , Rengi: {$this->name}";
	}
}

class buyukMeyve extends meyve
{
  public $kilo
  // construct dışarıdan almak
  public function __construct($name,$color,$kilo)
  {
  	parent::__construct($name,$color);
  	$this->kilo = $kilo;
  }
  public function kiloYaz()
  {
  	echo "Kilosu: {$this->kilo}";
  }

}

$kavun = new meyve("kavun","sarı");
$karpuz = new buyukMeyve("karpuz","Yeşil","10");
$karpuz->meyveyiYaz();
$karpuz->kiloYaz();

?>