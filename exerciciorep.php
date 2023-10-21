<?php
    class Conta{

        public $Cliente;
        public $Agencia;
        public $Conta;
        public $Saldo;
        public $Status;

        //Método construtor (Propriedade)
        function_construnt($Titular,$Agencia,$Conta,$Saldo,$Status){
            $this->Cliente = $Titular;
            $this->Agencia = $Agencia;
            $this->Conta = $Conta;
            $this->Saldo = $Saldo;
            $this->Cancelada = $Status;
        }

        //Método Destrutor
        function _destruct(){
            echo"<br/><small>O Objeto foi destruido.</small>";
        }

        //Método Sacar() Diminui o saldo em quantidade
        function Sacar($quantia){
            if($quantia){
                $this->Saldo -= $quantia;
            }
        }

        //Método Depositar() Depositar uma quantia, acrecendo o saldo
        function Depositar($quantia){
            if( $qauntia > 0){
                $this->Saldo += $quantia;
            }
        }

        //Método ObterSaldo() Retorna o saldo da conta
        function ObterSaldo(){
            retur $this->Saldo;
        }
    }
   ?>