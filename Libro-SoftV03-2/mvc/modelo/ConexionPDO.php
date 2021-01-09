<?php

    class ConexionPDO{

        protected $conexionBD;
        const USER = 'root';
        const PASSWORD = '';
        const DNS = 'mysql:host=localhost;dbname=librosoftv02test';

        //Constructor
        public function __construct(){
            try{
                $this->conexionBD = new PDO(self::DNS, self::USER, self::PASSWORD);
                $this->conexionBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conexionBD->exec("SET CHARACTER SET utf8");
                return $this->conexionBD;
            }catch(PDOException $e){
                echo "ERROR: " . $e->getMessage();
                exit;
            }
        }

    }    


?>