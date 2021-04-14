<?php

class telefon
{
	public $marka="Samsung";
	public $model= "A7";
	private $pil="100";

	public function oyuuAc()
	{
		echo "Oyun açıldı...<br>"
		$this->pil = $this->pil-10;
	}
	public function piliGoster()
	{
		echo $this->pil."<br>";
	}
}

$telefon1 = new telefon;
$telefon1->piliGoster();
$telefon1->oyuuAc();
$telefon1->piliGoster();
?>