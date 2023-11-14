<?php
class Atributos {
    private $altura;
        private $cor;
        private $pelos;
        private $pata;
        private $cauda;
        private $focinho;
        private $cabeca;
        private $orelhas;
        private $olhos;
        
        function __construct($altura, $cor, $pelos, $pata, $cauda, $focinho, $cabeca, $orelhas, $olhos) {
            $this->altura = $altura;
            $this->cor = $cor;
            $this->pelos = $pelos;
            $this->pata = $pata;
            $this->cauda = $cauda;
            $this->focinho = $focinho;
            $this->cabeca = $cabeca;
            $this->orelhas = $orelhas;
            $this->olhos = $olhos;
        }
        
        function GetAltura() {
            return $this->altura;
        }

        function GetCor() {
            return $this->cor;
        }

        function GetPelos() {
            return $this->pelos;
        }

        function GetPata() {
            return $this->pata;
        }

        function GetCauda() {
            return $this->cauda;
        }

        function GetFocinho() {
            return $this->focinho;
        }

        function GetCabeca() {
            return $this->cabeca;
        }

        function GetOrelhas() {
            return $this->orelhas;
        }

        function GetOlhos() {
            return $this->olhos;
        }

        function SetAltura($altura) {
            $this->altura = $altura;
        }

        function SetCor($cor) {
            $this->cor = $cor;
        }

        function SetPelos($pelos) {
            $this->pelos = $pelos;
        }

        function SetPata($pata) {
            $this->pata = $pata;
        }

        function SetCauda($cauda) {
            $this->cauda = $cauda;
        }

        function SetFocinho($focinho) {
            $this->focinho = $focinho;
        }

        function SetCabeca($cabeca) {
            $this->cabeca = $cabeca;
        }

        function SetOrelhas($orelhas) {
            $this->orelhas = $orelhas;
        }

        function SetOlhos($olhos) {
            $this->olhos = $olhos;
        }


}
