<?php
    // incluindo a classe Espectador
    require('Espectador.php');
    // agora ja´existe a classe Espectador dentro do arquivo
    // Criando uma classe com herança/extensão
    class Inscrito extends Espectador {
        // definindo os atributos da classe INSCRITO
        private $email;
        private $senha;
        
        // definindo os metodos da classe INSCRITO
        public function __construct(string $nome,$email,$senha){
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
        }
        
        public function comentar(string $texto){
            echo $this->nome . ' falou: '.$texto;
        }
        // Mudar o valor do e-mail; de um campo/alterar o valor de um campo do objeto atual
        public function setEmail(string $email){
            $this->email = $email;
        }
        // Retorna o valor do email do objeto atual!
        public function getEmail(){
            return $this->email;
        }
    }

    $insc = new Inscrito('José','jose.g@email.com','1234');
    $insc->visualizar();
    echo '<br>';
    $insc->comentar('Oi galera do canal, tudo bem ?');
?>