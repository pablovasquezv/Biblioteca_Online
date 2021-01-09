<?php

    require_once("ConexionPDO.php");

    class AutorPDO extends ConexionPDO{

        public function AutorPDO(){

            parent::__construct();

        }

        //FUNCIONES CRUD BASICAS
        //Funcion Agrega Autores CRUD 1/4
        public function agregaAutor($nombre_autor='', $apellido_autor='', $fecha_nacimiento='', $nacionalidad=''){

            $statement = $this->conexionBD->prepare("INSERT INTO autor VALUES (0,?,?,?,?)");
            $statement->bindparam(1, $nombre_autor, PDO::PARAM_STR);
            $statement->bindparam(2, $apellido_autor, PDO::PARAM_STR);
            $statement->bindparam(3, $fecha_nacimiento, PDO::PARAM_STR);
            $statement->bindparam(4, $nacionalidad, PDO::PARAM_STR);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        //Funcion Lista Autores CRUD 2/4
        public function obtieneAutores(){

            $statement = $this->conexionBD->prepare("SELECT * FROM autor");
            $statement->execute();

            $autores = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $autores;

        }

        /**
         * Funcion Busca Autor Pror Id_autor CRUD 2.1/4
         *
         * @param integer $id_autor
         * @return void
         */
        public function obtieneAutorPorId($id_autor = 0){

            $statement = $this->conexionBD->prepare("SELECT * FROM autor WHERE id_autor=?");
            $statement->bindparam(1, $id_autor, PDO::PARAM_INT);
            $statement->execute();

            $autorPorId = $statement->fetch(PDO::FETCH_ASSOC);
            $statement = null;
            return $autorPorId;

        }

        //Funcion Modifica Autor CRUD 3/4 (No se modifica el id)
        public function actualizaAutor($id_autor=0, $nombre_autor='', $apellido_autor='', $fecha_nacimiento_autor='', $nacionalidad=''){

            $statement = $this->conexionBD->prepare("UPDATE autor SET id_autor=?, nombre_autor=?, apellido_autor=?, fecha_nacimiento_autor=?, nacionalidad=? WHERE id_autor=?");

            $statement->bindparam(1, $id_autor, PDO::PARAM_INT);
            $statement->bindparam(2, $nombre_autor, PDO::PARAM_STR);
            $statement->bindparam(3, $apellido_autor, PDO::PARAM_STR);
            $statement->bindparam(4, $fecha_nacimiento_autor, PDO::PARAM_STR);
            $statement->bindparam(5, $nacionalidad, PDO::PARAM_STR);;
            $statement->bindparam(6, $id_autor, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        //Funcion Elimina Autor Por Id_autor CRUD 4/4
        public function eliminaAutor($id_autor=0){

            $statement = $this->conexionBD->prepare("DELETE FROM autor WHERE id_autor=?");

            $statement->bindparam(1, $id_autor, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

    }


?>