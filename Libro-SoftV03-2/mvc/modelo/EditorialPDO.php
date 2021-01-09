<?php

    require_once("ConexionPDO.php");

    class EditorialPDO extends ConexionPDO{

        public function EditorialPDO(){

            parent::__construct();

        }

        //FUNCIONES CRUD BASICAS
        //Funcion Agrega Editoriales CRUD 1/4
        public function agregaEditorial($id_editorial_mula=0, $nombre_editorial=''){

            $statement = $this->conexionBD->prepare("INSERT INTO editorial VALUES (?,?)");
            $statement->bindparam(1, $id_editorial_mula, PDO::PARAM_INT);
            $statement->bindparam(2, $nombre_editorial, PDO::PARAM_STR);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }


        
        public function obtieneEditoriales(){

            $statement = $this->conexionBD->prepare("SELECT * FROM editorial");
            $statement->execute();

            $editoriales = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $editoriales;

        }

        //Funcion Busca Editorial Pror Id_editorial CRUD 2.1/4
        public function obtieneEditorialPorId($id_editorial = 0){

            $statement = $this->conexionBD->prepare("SELECT * FROM editorial WHERE id_editorial=?");
            $statement->bindparam(1, $id_editorial, PDO::PARAM_INT);
            $statement->execute();

            $editorialPorId = $statement->fetch(PDO::FETCH_ASSOC);
            $statement = null;
            return $editorialPorId;

        }

        //Funcion Modifica Editoriales CRUD 3/4 (Solo modifica el nombre)
        public function actualizaEditorial($id_editorial=0, $nombre_editorial=''){

            $statement = $this->conexionBD->prepare("UPDATE editorial SET nombre_editorial=? WHERE id_editorial=?");

            $statement->bindparam(1, $nombre_editorial, PDO::PARAM_STR);
            $statement->bindparam(2, $id_editorial, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        //Funcion Elimina Editorial Por Id_editorial CRUD 4/4
        public function eliminaEditorial($id_editorial=0){

            $statement = $this->conexionBD->prepare("DELETE FROM editorial WHERE id_editorial=?");

            $statement->bindparam(1, $id_editorial, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

    }


?>