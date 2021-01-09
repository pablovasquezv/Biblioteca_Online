<?php

    require_once("ConexionPDO.php");

    class RegionPDO extends ConexionPDO{

        public function RegionPDO(){

            parent::__construct();

        }

        //FUNCIONES CRUD BASICAS
        //Funcion Agrega Region CRUD 1/4
        public function agregaRegion($id_region=0, $nombre_region=''){

            
            $statement = $this->conexionBD->prepare("INSERT INTO region VALUES (?,?)");
            $statement->bindparam(1, $id_region, PDO::PARAM_INT);
            $statement->bindparam(2, $nombre_region, PDO::PARAM_STR);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        //Funcion Lista Regiones CRUD 2/4
        public function obtieneRegiones(){

            $statement = $this->conexionBD->prepare("SELECT * FROM region");
            $statement->execute();

            $regiones = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $regiones;

        }

        //Funcion Busca Region Por Id_Region CRUD 2.1/4
        public function obtieneRegionPorId($id_region=0){

            $statement = $this->conexionBD->prepare("SELECT * FROM region WHERE id_region=?");
            $statement->bindparam(1, $id_region, PDO::PARAM_INT);
            $statement->execute();

            $region = $statement->fetch(PDO::FETCH_ASSOC);
            $statement = null;
            return $region;

        }

        //Funcion Modifica Regiones CRUD 3/4
        public function actualizaRegion($id_region=0, $nombre_region=''){

            $statement = $this->conexionBD->prepare("UPDATE region SET nombre_region=? WHERE id_region=?");

            $statement->bindparam(1, $nombre_region, PDO::PARAM_STR);
            $statement->bindparam(2, $id_region, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        //Funcion Elimina Regiones CRUD 4/4
        public function eliminaRegiones($id_region=0){

            $statement = $this->conexionBD->prepare("DELETE FROM region WHERE id_region=?");

            $statement->bindparam(1, $id_region, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

    }


?>