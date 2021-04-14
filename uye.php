<?php

class uye
{
	private $id;
	public $yetki = "Sayfayı gör";
	public $ad;
	public $cinsiyet;

    public function __construct($id,$ad,$cinsiyet)
    {
        $this->id = $id;
        $this->ad = $ad;
        $this->cinsiyet = $cinsiyet;
    }

    public function bilgileriGetir()
    {
    	echo "ID: {$this->id}<br>Ad:{$this->ad}<br>cinsiyet: {$this->cinsiyet}<br>";
    }

	public function sayfayi_gor()
	{
		echo "sayfa görüntüleniyor...";
	}
}

class moderator extends uye
{
     private $yetki = 5;
     public function __construct($id,$ad,$cinsiyet,$yetki)
     {
     	parent::__construct($id,$ad,$cinsiyet);
     	$this->yetki = $yetki;
     }

     public function yetkiyiGor()
     {
     	echo "Yetki Kodu: {$this->yetki}";
     }
}

class admin extends moderator
{
	private $ozellik;
	public function __construct($id,$ad,$cinsiyet,$yetki,$ozellik)
	{
		parent::__construct($id,$ad,$cinsiyet,$yetki);
		$this->ozellik = $ozellik;
	}

	public function ozelligiGor()
	{
		echo "Özellik: {$this->ozellik}";
	}
}
$nurten = new admin("12345","nurten", "kadın","3","admin");
//$nurten->bilgileriGetir();
$nurten->yetkiyiGor();
?>