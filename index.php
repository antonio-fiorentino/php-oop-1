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

class Film {

    public $titolo;

    public $durata;

    public $originalLanguage;

    public $anno;

    public $regista;

    public function __construct($titolo, $durata, $originalLanguage, $anno, $regista) {
        $this->titolo = $titolo;
        $this->durata = $durata;
        $this->originalLanguage = $originalLanguage;
        $this->anno = $anno;
        $this->regista = $regista;
    }

}

class Libro {

    public $titolo;

    public $pagine;

    public $formato;

    public $isbn;

    public $titoloOriginale;

    public $autore;

    public function __construct($titolo,$pagine, $formato, $isbn, $titoloOriginale, $autore) {
        $this->titolo = $titolo;
        $this->pagine = $pagine;
        $this->formato = $formato;
        $this->isbn = $isbn;
        $this->titoloOriginale = $titoloOriginale;
        $this->autore = $autore;
    }

}


$thriller = new Album('Thriller','9', 'Epic Records', '1982', 'Michael Jackson');
$backInBlack = new Album('Back in Black', '10', 'Atlantic Records', '1980', 'AC/DC');
$darkSide = new Album('The Dark Side of The Moon', '9', 'Capitol Records', '1973', 'Pink Floyd');


$titanic = new Film('Titanic', '195 minuti', 'En', '1997', 'James Cameron');
$pulpFiction = new Film('Pulp Fiction', '195 minuti', 'En', '1998', 'James Cameron');
$ilPadrino = new Film('Pulp Fiction', '195 minuti', 'En', '1998', 'James Cameron');



$guerraEPace = new Libro('Guerra e Pace','1.225', 'copertina rigida', '9788804682592', 'War and Peace', 'Lev Tolstoj');
$odissea = new Libro('Odissea', '414', 'copertina rigida', '9788817020718', 'Ὀδύσσεια', 'Omero');
$laCoscienzaDiZeno = new Libro('La coscienza di Zeno', '403', 'copertina rigida', '9780375413308', 'La coscienza di Zeno', 'Italo Svevo');



var_dump($thriller);
echo "</br>";
var_dump($backInBlack);
echo "</br>";
var_dump($darkSide);

echo "</br></br></br>";

var_dump($titanic);
echo "</br>";
var_dump($pulpFiction);
echo "</br>";
var_dump($ilPadrino);

echo "</br></br></br>";

var_dump($guerraEPace);
echo "</br>";
var_dump($odissea);
echo "</br>";
var_dump($laCoscienzaDiZeno);
