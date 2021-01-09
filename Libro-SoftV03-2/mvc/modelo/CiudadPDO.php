<?php

    require_once("ConexionPDO.php");

    class CiudadPDO extends ConexionPDO{

        public function CiudadPDO(){

            parent::__construct();

        }

        //FUNCIONES CRUD BASICAS
        //Funcion Agrega Ciudad CRUD 1/4
        public function agregaCiudad($nombre_ciudad='', $id_regionTC=0){

            $statement = $this->conexionBD->prepare("INSERT INTO ciudad VALUES (0,?,?)");
            $statement->bindparam(1, $nombre_ciudad, PDO::PARAM_STR);
            $statement->bindparam(2, $id_regionTC, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        //Funcion Lista Ciudades CRUD 2/4
        public function obtieneCiudades(){

            $statement = $this->conexionBD->prepare("SELECT * FROM ciudad");
            $statement->execute();

            $ciudades = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $ciudades;

        }

        //Funcion Busca Ciudad Por Id_ciudad CRUD 2.1/4
        public function obtieneCiudadPorId($id_ciudad = 0){

            $statement = $this->conexionBD->prepare("SELECT * FROM ciudad WHERE id_ciudad=?");
            $statement->bindparam(1, $id_ciudad, PDO::PARAM_INT);
            $statement->execute();

            $ciudadPorId = $statement->fetch(PDO::FETCH_ASSOC);
            $statement = null;
            return $ciudadPorId;

        }

        //Funcion Obtiene Todas las ciudades y los nombres de las regiones
        public function obtieneCiudadesRegiones(){

            $statement = $this->conexionBD->prepare("SELECT * FROM ciudadRegion");
            $statement->execute();

            $ciudadesRegion = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $ciudadesRegion;

        }

        //Funcion Modifica Ciudad CRUD 3/4 (No se modifica el id)
        public function actualizaCiudad($nombre_ciudad='', $id_regionTC=0, $id_ciudad=0){

            $statement = $this->conexionBD->prepare("UPDATE ciudad SET id_ciudad=?, nombre_ciudad=?, id_regionTC=? WHERE id_ciudad=?");

            $statement->bindparam(1, $id_ciudad, PDO::PARAM_INT);
            $statement->bindparam(2, $nombre_ciudad, PDO::PARAM_STR);
            $statement->bindparam(3, $id_regionTC, PDO::PARAM_INT);
            $statement->bindparam(4, $id_ciudad, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        //Funcion Elimina Ciudad Por Id_ciudad CRUD 4/4
        public function eliminaCiudad($id_ciudad=0){

            $statement = $this->conexionBD->prepare("DELETE FROM ciudad WHERE id_ciudad=?");

            $statement->bindparam(1, $id_ciudad, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

    }


?>