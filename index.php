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


class Car {
  private $num_telaio;
  protected function setCarTelaio($string) {
    return $this->num_telaio = $string;
  }

  protected function getCarTelaio(){
    return $this->num_telaio;
  }

}

class Opel extends Car {
  protected $license;
  protected $name;

    public function __construct($_license , $_name ) {
        $this->license = $_license;
        $this->name = $_name;
    }

    public function setMyCarTelaio($string) {
        return $this->setCarTelaio($string);
    }

    public function getMyCarTelaio(){
        return $this->getCarTelaio();
    }

    public function printMessage(){
        echo "la mia macchina è $this->name con targa $this->license e numero di telaio " . $this->getCarTelaio() . "\n";
    }

}

$auto = new Opel ( 'ND 123 OJ' , 'Opel'  );
$auto->setMyCarTelaio('1234');
$auto->printMessage();

// carico esercizio
