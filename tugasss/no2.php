<?php
class Nomor2{

public $name, $idmesin, $typemotor;

public function __construct($name,$idmesin, $typemotor)
{
$this->name = $name;
$this->idmesin = $idmesin;
$this->typemotor = $typemotor;
}
}

$obj1 = new Nomor2("Vario", "1245", "automatic");
$obj2 = new Nomor2("CB 250", "3421", "sport");

echo "Nama: " . $obj1->name . '<br>';
echo "ID Mesin: " . $obj1->idmesin . '<br>' ;
echo "Type Motor:" . $obj1->typemotor . '<hr>';

echo "Nama: " . $obj2->name . '<br>';
echo "ID Mesin: " . $obj2->idmesin . '<br>' ;
echo "Type Motor:" . $obj2->typemotor;