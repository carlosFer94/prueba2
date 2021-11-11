<?php
    class Conexion{
        private $servidor;
        private $usuario;
        private $password;
        private $database;
        
        public function Conexion(){
            $this->servidor = "localhost";
            $this->usuario = "root";
            $this->password = "localhost";
            $this->database = "eje1Tecno";
        }
        
        public function setServidor($valor){
            $this->servidor = $valor;
        }
        
        public function getServidor(){
            return $this->servidor;
        }
        
        public function setUsuario($valor){
            $this->usuario = $valor;
        }
        
        public function getUsuario(){
            return $this->usuario;
        }
        
        public function setPassword($valor){
            $this->password = $valor;
        }
        
        public function getPassword(){
            return $this->password;
        }
        
        public function setDatabase($valor){
            $this->database = $valor;
        }
        
        public function getDatabase(){
            return $this->database;
        }
        
        public function conectar(){
            $bd = mysqli_connect($this->servidor,$this->usuario,$this->password,$this->database);
            if($bd)
                return $bd;
            else
                echo "ERROR AL CONECTAR LA BASE DE DATOS";
        }
        
        public function desconectar($cnx){
            mysqli_close($cnx);
        }
        
        public function ejecutar($sql){
            $bd = $this->conectar();
            $registros = mysqli_query($bd,$sql);
            $this->desconectar($bd);
            return $registros;
        }
        

    }

?>