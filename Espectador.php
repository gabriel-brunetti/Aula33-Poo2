<?php
    // Criando a classe
    class Espectador {
        // Declarando os atributos da classe
        protected $nome;
        // Declarando os métodos da classe
            // no PHP 7 é possível "travar" qual tipo de dados queremos em uma variável tal como string
        public function __construct(string $nome) {
            $this->nome = $nome;
        }

        public function visualizar(){
            echo  $this->nome. ' está te vendo...';
        }
    }