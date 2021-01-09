<?php

    require_once("ConexionPDO.php");

    class PuntoIntercambioPDO extends ConexionPDO{

        public function PuntoIntercambioPDO(){

            parent::__construct();

        }

        //FUNCIONES CRUD BASICAS
        //Funcion Agrega Punto Intercambio CRUD 1/4
        public function agregaPuntoIntercambio($nombre_punto_intercambio='', $direccion_pto_intercambio='', $id_ciudadTPI=0){
            
            $statement = $this->conexionBD->prepare("INSERT INTO punto_intercambio VALUES (0,?,?,?)");            
            $statement->bindparam(1, $nombre_punto_intercambio, PDO::PARAM_STR);
            $statement->bindparam(2, $direccion_pto_intercambio, PDO::PARAM_STR);
            $statement->bindparam(3, $id_ciudadTPI, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        //Funcion Lista Puntos Intercambio CRUD 2/4
        public function obtienePuntosIntercambio(){

            $statement = $this->conexionBD->prepare("SELECT * FROM punto_intercambio");
            $statement->execute();

            $puntosIntercambio = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $puntosIntercambio;

        }

        //Funcion Lista Puntos Intercambio desde una View especial CRUD 2/4
        public function obtienePuntosIntercambioCompleto(){

            $statement = $this->conexionBD->prepare("SELECT * FROM ptos_intercambio");
            $statement->execute();

            $puntosIntercambio = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $puntosIntercambio;

        }

        //Funcion Busca Punto Intercambio Por Id_pto_intercambio CRUD 2.1/4
        public function obtienePuntoIntercambioPorId($id_pto_intercambio=0){

            $statement = $this->conexionBD->prepare("SELECT * FROM punto_intercambio WHERE id_pto_intercambio=?");
            $statement->bindparam(1, $id_pto_intercambio, PDO::PARAM_INT);

            $statement->execute();

            $puntoIntercambioPorId = $statement->fetch(PDO::FETCH_ASSOC);
            $statement = null;
            return $puntoIntercambioPorId;

        }

        //Funcion Modifica Puntos de Intercambio CRUD 3/4
        public function actualizaPuntosIntercambio($id_pto_intercambio=0, $nombre_punto_intercambio='',$direccion_pto_intercambio='', $id_ciudadTPI=0){

            $statement = $this->conexionBD->prepare("UPDATE punto_intercambio SET id_pto_intercambio=?, nombre_pto_intercambio=?, direccion_pto_intercambio=?, id_ciudadTPI=? WHERE id_pto_intercambio=?");

            $statement->bindparam(1, $id_pto_intercambio, PDO::PARAM_INT);
            $statement->bindparam(2, $nombre_punto_intercambio, PDO::PARAM_STR);
            $statement->bindparam(3, $direccion_pto_intercambio, PDO::PARAM_STR);
            $statement->bindparam(4, $id_ciudadTPI, PDO::PARAM_INT);
            $statement->bindparam(5, $id_pto_intercambio, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        //Funcion Elimina Punto Intercambio por Id_pto_intercambio CRUD 4/4
        public function eliminaPuntoIntercambio($id_pto_intercambio=0){

            $statement = $this->conexionBD->prepare("DELETE FROM punto_intercambio WHERE id_pto_intercambio=?");

            $statement->bindparam(1, $id_pto_intercambio, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

    }

?>