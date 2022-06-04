<?php 

    interface MeiosdeTranporteInterface {
       
        public function acelerar();
        public function frear();
    }

    class Carro implements MeiosdeTranporteInterface {
        
        public function andar() {
            echo 'Andar';
        }

        public function acelerar() {
            echo 'Acelerar';
        }

        public function frear() {
            echo 'Frear';
        }
    }
    

    class Aviao {
       
        public function voar() {
            echo 'Voar';
        }

        public function acelerar() {
            echo 'Acelerar';
        }

        public function frear() {
            echo 'Frear';
        }
    }

    class Barco {
       
        public function boiar() {
            echo 'Boiar';
        }
    }

    $mercedes = new Carro();
    $boeing77 = new Aviao();


    