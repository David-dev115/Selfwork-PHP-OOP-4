<?php


// Selfwork PHP OOP 4
// Dato il seguente codice di partenza:
// class Car {
//   private $num_telaio;
// }

// class Fiat extends Car {
//   protected $license;
//   protected $name;
// }
// Completa la classe Fiat con le strutture mancanti e, utilizzando il livello di severita' che ritieni piu' opportuno, estendi i metodi per stampare a terminale la seguente frase: “La mia macchina e' Opel, con targa ND 123 OJ e nmero di Telaio 1234“.




// Da corregere:
// Ci sei quasi ma c'è solo un piccolo problema. Il codice forse ti funziona poichè stai utilizzando Php che concede molto cose, con altri linguaggi di programmazione avresti grossi problemi. Ogni classe deve avere Attributi, Costruttore e Metodi. La tua classe Car non ha un costruttore ed inizializza malissimo l'attributo di classe, la classe Opel deve si estendere Car ma richiamare proprio il costruttore del padre passando il parametro di cui ha bisogno per inizializzare il suo attributo. Rivediti meglio i concetti, ma ci sei quasi.



class Car {
  private $num_telaio;

  public function __construct($_num_telaio){

    $this->num_telaio = $_num_telaio;

  }

  private function getTelaio(){
    return $this->num_telaio;
  }

  public function printTelaio(){
    return $this->getTelaio();
  }

}

class Opel extends Car {
  protected $license;
  protected $name;


  public function __construct($_num_telaio , $_license , $_name) {

    parent::__construct($_num_telaio);
    $this->license = $_license;
    $this->name = $_name;

  }


  public function printMessage() {

    echo "La mia macchina e' $this->name, con targa $this->license e nmero di Telaio " . $this->printTelaio() . ".\n";
  }

}


$car = new Opel ('1234' , 'ND 123 OJ' , 'Opel' );

$car->printMessage();

//eseguo correzione post revisione