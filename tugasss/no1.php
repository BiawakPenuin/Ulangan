<?php

Class TugasMembuatClassObjek
{
    public $name;
    public $umur;
    public $jurusan;
    public $active;

    public function __construct($name, $umur, $jurusan, $active)
    {
        $this->name = $name;
        $this->umur = $umur;
        $this->jurusan = $jurusan;
        $this->active = $active;
    }
}

$obj1 = new TugasMembuatClassObjek(name: "Arief", umur: "16", jurusan: "Rekayasa Perangkat Lunak", active: "true");

echo "Nama: " . $obj1->name . "<br>";
echo "Umur: " . $obj1->umur . "<br>";
echo "active: " . $obj1->active . "<br>";
echo "Jurusan: " . $obj1->jurusan . "<hr>";




