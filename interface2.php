<?php 

    interface MamiferoIntereface {
        public function respirar();
    }

    interface TerrestreInterface {
        public function andar();
    }

    interface AquaticoIntereface {
        public function nadar();
    }

    class Esquilo implements MamiferoInterface, TerrestreInterface {

        public function andar() {
            echo 'Andar';
        }

        public function respirar() {
            echo 'Respirar';
        }

        public function saltar() {
            echo 'Saltar';
        }
    }

    class Golfinho implements MamiferoInterface, AquaticoIntereface {

        public function nadar() {
            echo 'Nadar';
        }

        public function respirar() {
            echo 'Respirar';
        }

        public function saltar() {
            echo 'Saltar';
        }

        protected function esguichar() {
            echo 'Esguichar';
        }
    }
    