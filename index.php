<?php

class Movie {
    public $title;
    public $year;
    public $category;

    public function getCategory($tipoCategoria){
        if ($tipoCategoria == 'guerra') {
            $this->category = 'vietato ai minori';
        }
        else {
            $this->category = 'permesso ai minori';
        }
    }

    public function getName($name){
        $this->title = $name;
    }

    public function printValue(){
        echo "i valori dell' istanza sono:".'<br>'.$this->title.'<br>'.$this->year.'<br>'.$this->category.'<br>';
    }

    function __construct($year){
        $this->year = $year;
    }
}

$topGun = new Movie(1985);
$topGun-> getCategory('drammatico');
$topGun-> getName('topGun');
$topGun-> printValue();

$rambo = new Movie(1984);
$rambo-> getCategory('guerra');
$rambo-> getName('rambo');
$rambo-> printValue();

$titanic = new Movie(1986);
$titanic-> getCategory('drammatico');
$titanic-> getName('titanic');
$titanic-> printValue();


?>
