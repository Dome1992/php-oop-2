<?php 

//  echo "Hello World"
    // CLASSE
    class Prodotto {
        
        private $id;
        private $immagine;
        private $titolo;
        private $descrizione;
        private $prezzo;
        private $categoria;
        private $tipologia;

        public function __construct($id,$immagine,$titolo,$descrizione,$prezzo,$categoria,$tipologia) {

            $this -> setId($id);
            $this -> setImmagine($immagine);
            $this -> setTitolo($titolo);
            $this -> setDescrizione($descrizione);
            $this -> setPrezzo($prezzo);
            $this -> setCategoria($categoria);
            $this -> setTipologia($tipologia);
        }

        // METODO GETTER E SETTER
        public function getId() {

            return $this -> id;
        }
        public function setId($id) {

            $this -> id = $id;
        }

        public function getImmagine() {

            return $this -> immagine;
        }
        public function setImmagine($immagine) {

            $this -> immagine = $immagine;
        }

        public function getTitolo() {

            return $this -> titolo;
        }
        public function setTitolo($titolo) {

            $this -> titolo = $titolo;
        }

        public function getDescrizione() {

            return $this -> descrizione;
        }
        public function setDescrizione($descrizione) {

            $this -> descrizione = $descrizione;
        }

        public function getPrezzo() {

            return $this -> prezzo;
        }
        public function setPrezzo($prezzo) {

            $this -> prezzo = $prezzo;
        }

        public function getCategoria() {

            return $this -> categoria;
        }
        public function setCategoria($categoria) {

            $this -> categoria = $categoria;
        }

        public function getTipologia() {

            return $this -> tipologia;
        }
        public function setTipologia($tipologia) {

            $this -> tipologia = $tipologia;
        }
    }

    class Categoria {

        private $id;
        private $nome;
        private $icona;

        public function __construct($id,$nome,$icona) {

            $this -> setId($id);
            $this -> setNome($nome);
            $this -> setIcona($icona);
          
        }

        // METODI SETTER E GETTER
        public function getId() {

            return $this -> id;
        }
        public function setId() {

            $this -> id = $id;
        }

        public function getNome() {

            return $this -> nome;
        }
        public function setNome() {

            $this -> nome = $nome;
        }

        public function getIcona() {

            return $this -> icona;
        }
        public function setIcona() {

            $this -> icona = $icona;
        }

    }

    class Tipologia {

        private $id;
        private $nome;
        
        public function __construct($id,$nome) {

            $this -> setId($id);
            $this -> setNome($nome);
            
        }

        // METODI SETTER E GETTER
        public function getId() {

            return $this -> id;
        }
        public function setId() {

            $this -> id = $id;
        }

        public function getNome() {

            return $this->nome;
        
          }
        
          public function setNome($nome) {
        
            $this->nome = $nome;
        
        }
    }
?>