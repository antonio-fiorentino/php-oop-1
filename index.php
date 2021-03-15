<?php


class Album {

    public $titolo;

    public $canzoni;

    public $casaDiscografica;

    public $anno;

    public $autore;

    public function __construct($titolo, $canzoni, $casaDiscografica, $anno, $autore) {
        $this->titolo = $titolo;
        $this->canzoni = $canzoni;
        $this->casaDiscografica = $casaDiscografica;
        $this->anno = $anno;
        $this->autore = $autore;
    }

}


$thriller = new Album('Thriller','9', 'Epic Records', '1982', 'Michael Jackson');
$backInBlack = new Album('Back in Black', '10', 'Atlantic Records', '1980', 'AC/DC');
$darkSide = new Album('The Dark Side of The Moon', '9', 'Capitol Records', '1973', 'Pink Floyd');


var_dump($thriller);
echo "</br>";
var_dump($backInBlack);
echo "</br>";
var_dump($darkSide);
