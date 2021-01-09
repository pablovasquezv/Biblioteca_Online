<?php

    require_once("ConexionPDO.php");

    class GeneroPDO extends ConexionPDO{

        public function GeneroPDO(){

            parent::__construct();

        }

        //FUNCIONES CRUD BASICAS
        //Funcion Agrega Genero CRUD 1/4
        public function agregaGenero($id_genero_mula=0, $nombre_genero=''){
            
            $statement = $this->conexionBD->prepare("INSERT INTO genero VALUES (?,?)"); 
            $statement->bindparam(1, $id_genero_mula, PDO::PARAM_INT);           
            $statement->bindparam(2, $nombre_genero, PDO::PARAM_STR);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        //Funcion Lista Generos CRUD 2/4
        public function obtieneGeneros(){

            $statement = $this->conexionBD->prepare("SELECT * FROM genero");
            $statement->execute();

            $generos = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $generos;

        }

        //Funcion Busca Genero Por Id_genero CRUD 2.1/4
        public function obtieneGeneroPorId($id_genero=0){

            $statement = $this->conexionBD->prepare("SELECT * FROM genero WHERE id_genero=?");
            $statement->bindparam(1, $id_genero, PDO::PARAM_INT);

            $statement->execute();

            $genero = $statement->fetch(PDO::FETCH_ASSOC);
            $statement = null;
            return $genero;

        }

        //Funcion Modifica Generos CRUD 3/4
        public function actualizaGenero($id_genero=0, $nombre_genero=''){

            $statement = $this->conexionBD->prepare("UPDATE genero SET nombre_genero=? WHERE id_genero=?");

            $statement->bindparam(1, $nombre_genero, PDO::PARAM_STR);
            $statement->bindparam(2, $id_genero, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        //Funcion Elimina Generos CRUD 4/4
        public function eliminaGeneros($id_genero=0){

            $statement = $this->conexionBD->prepare("DELETE FROM genero WHERE id_genero=?");

            $statement->bindparam(1, $id_genero, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

    }

?>