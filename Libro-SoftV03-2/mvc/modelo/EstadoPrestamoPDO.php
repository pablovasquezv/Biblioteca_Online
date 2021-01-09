<?php

    require_once("ConexionPDO.php");

    class EstadoPrestamoPDO extends ConexionPDO{

        public function EstadoPrestamoPDO(){

            parent::__construct();

        }

        //FUNCIONES CRUD BASICAS
        //Funcion Agrega Estado Prestamo CRUD 1/4
        public function agregaEstadoPrestamo($id_estado_prestamo=0, $nombre_estado_prestamo=''){

            $statement = $this->conexionBD->prepare("INSERT INTO estado_prestamo VALUES (?,?)");
            $statement->bindparam(1, $id_estado_prestamo, PDO::PARAM_STR);
            $statement->bindparam(2, $nombre_estado_prestamo, PDO::PARAM_STR);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        //Funcion Lista Estados Prestamos CRUD 2/4
        public function obtieneEstadosPrestamos(){

            $statement = $this->conexionBD->prepare("SELECT * FROM estado_prestamo");
            $statement->execute();

            $estadosPrestamos = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $estadosPrestamos;

        }

        //Funcion Busca Estado Prestamo Pror Id_estado_prestamo CRUD 2.1/4
        public function obtieneEstadoPrestamoPorId($id_estado_prestamo = 0){

            $statement = $this->conexionBD->prepare("SELECT * FROM estado_prestamo WHERE id_estado_prestamo=?");
            $statement->bindparam(1, $id_estado_prestamo, PDO::PARAM_INT);
            $statement->execute();

            $estadoPrestamoPorId = $statement->fetch(PDO::FETCH_ASSOC);
            $statement = null;
            return $estadoPrestamoPorId;

        }

        //Funcion Modifica Estado Prestamo CRUD 3/4 (Solo modifica el nombre)
        public function actualizaEstadoPrestamo($id_estado_prestamo=0, $nombre_estado_prestamo=''){

            $statement = $this->conexionBD->prepare("UPDATE estado_prestamo SET nombre_estado_prestamo=? WHERE id_estado_prestamo=?");

            $statement->bindparam(1, $nombre_estado_prestamo, PDO::PARAM_STR);
            $statement->bindparam(2, $id_estado_prestamo, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        //Funcion Elimina Estado Prestamo Por Id_estado_prestamo CRUD 4/4
        public function eliminaEstadoPrestamo($id_estado_prestamo=0){

            $statement = $this->conexionBD->prepare("DELETE FROM estado_prestamo WHERE id_estado_prestamo=?");

            $statement->bindparam(1, $id_estado_prestamo, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

    }


?>