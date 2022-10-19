<?php
  class Mobil
  {
    public $roda = 4;
    public function jalan()
    {
      echo "Mobil Jalan";
    }

    protected $wheel = 5;
    public function walk()
    {
      echo $this->wheel;
    }
  }

  $mobilBaru = new Mobil();
  // dibawah ini seharusnya
  // akan menampilkan 
  // echo 'Mobil Jalan'
  echo "Ini adalah hasil memanggil method jalan() dari class Mobil : ";

  $mobilBaru->jalan();
  // dibawah ini seharusnya
  // akan menampilkan 
  // 4
  echo "<br>Ini adalah hasil memanggil Property roda dari class Mobil : ";
  
  echo $mobilBaru->roda;

  echo "<br>Ini adalah hasil memanggil method walk dari class Mobil : ";
  $mobilBaru->walk();

  // class baru
  class VisibilitasPrivate
  {
    private $suara = "Guk-Guk-Guk";
    public function Menggonggong()
    {
      echo $this->suara;
    }
  }

  // intansiasi class VisibilitasPrivate
  $visibilitasPrivate = new VisibilitasPrivate();
  echo "<br>Ini hasil dari method Menggonggong : ";
  $visibilitasPrivate->Menggonggong();

  // Visibilitas Protected
  class VisibilitasProtected 
  {
    protected $suara = "Suit-Wiiiwww";
  }

  class Buaya extends VisibilitasProtected
  {
    protected $darat;

    public function PanggilUkhti()
    {
      echo $this->suara;
    }
  }

  // intansiasi
  $buayaDarat = new Buaya;
  echo "<br>Ini hasil dari class VisibilitasProtected : ";
  echo $buayaDarat->PanggilUkhti();

  class KategoriNilai
  {
    protected $KategoriSangatBaik = "Sangat Baik";
    protected $KategoriBaik = "Baik";
    protected $KategoriCukup = "Cukup";
    protected $KategoriKurang = "Kurang";
    public $HasilKategori;

    public function __construct($nilai)
    {
      if ($nilai > 90)
      {
        $this->HasilKategori = $this->KategoriSangatBaik;
      } else if ($nilai > 80)
      {
        $this->HasilKategori = $this->KategoriBaik;
      } else if ($nilai > 70) {
        $this->HasilKategori = $this->KategoriCukup;
      } else {
        $this->HasilKategori = $this->KategoriKurang;
      }
    }
  }

  $hasilNilai = new KategoriNilai(70);
  echo "<br>Kategori Nilai Anda Adalah : " . $hasilNilai->HasilKategori;

?>