<?php

    require_once("ConexionPDO.php");

    class TipoUsuarioPDO extends ConexionPDO{

        public function TipoUsuarioPDO(){

            parent::__construct();

        }

        //FUNCIONES CRUD BASICAS
        //Funcion Agrega Tipo Usuario CRUD 1/4
        public function agregaTipoUsuario($id_tipo_usuario=0, $nombre_tipo_usuario=''){

            $statement = $this->conexionBD->prepare("INSERT INTO tipo_usuario VALUES (?,?)");
            $statement->bindparam(1, $id_tipo_usuario, PDO::PARAM_INT);
            $statement->bindparam(2, $nombre_tipo_usuario, PDO::PARAM_STR);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        //Funcion Lista Tipos de Usuarios CRUD 2/4
        public function obtieneTiposUsuarios(){

            $statement = $this->conexionBD->prepare("SELECT * FROM tipo_usuario");
            $statement->execute();

            $tiposUsuarios = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $tiposUsuarios;

        }

        //Funcion Busca Tipo de Usuario Pror Id_tipo_usuario CRUD 2.1/4
        public function obtieneTipoUsuarioPorId($id_tipo_usuario = 0){

            $statement = $this->conexionBD->prepare("SELECT * FROM tipo_usuario WHERE id_tipo_usuario=?");
            $statement->bindparam(1, $id_tipo_usuario, PDO::PARAM_INT);
            $statement->execute();

            $tipoUsuarioPorId = $statement->fetch(PDO::FETCH_ASSOC);
            $statement = null;
            return $tipoUsuarioPorId;

        }

        //Funcion Modifica Tipos de Usuario CRUD 3/4 (Solo modifica el nombre)
        public function actualizaTipoUsuario($id_tipo_usuario=0, $nombre_tipo_usuario=''){

            $statement = $this->conexionBD->prepare("UPDATE tipo_usuario SET nombre_tipo_usuario=? WHERE id_tipo_usuario=?");

            $statement->bindparam(1, $nombre_tipo_usuario, PDO::PARAM_STR);
            $statement->bindparam(2, $id_tipo_usuario, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

        //Funcion Elimina Tipo de Usuario Por Id_tipo_usuario CRUD 4/4
        public function eliminaTipoUsuario($id_tipo_usuario=0){

            $statement = $this->conexionBD->prepare("DELETE FROM tipo_usuario WHERE id_tipo_usuario=?");

            $statement->bindparam(1, $id_tipo_usuario, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

    }


?>