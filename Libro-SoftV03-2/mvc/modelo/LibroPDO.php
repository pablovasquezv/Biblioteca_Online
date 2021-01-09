<?php

    require_once("ConexionPDO.php");

    //Clase que hereda de la clase con la conexion
    class LibroPDO extends ConexionPDO{
     

        public function LibroPDO(){
            //Para que se ejecute la conexión desde el constructor de la clase conexionPDO
            parent::__construct();//Llamamos al constructor para que se ejecute

        }

        //FUNCIONES CRUD BASICAS
        //Funcion para agregar Libros Nuevos CRUD 1/4
        public function agregaLibro($titulo_libro='', 
                                      $fecha_lanzamiento_libro='', 
                                      $num_paginas_libro=0, 
                                      $descripcion_libro='', 
                                      $id_autorTL=0, 
                                      $id_generoTL=0, 
                                      $id_editorialTL=0, 
                                      $rut_usuarioTL=''){                                
            
            $stmt = $this->conexionBD->prepare("INSERT INTO libro VALUES (0,?,?,?,?,?,?,?,?)");
            
            $stmt->bindparam(1, $titulo_libro, PDO::PARAM_STR);
            $stmt->bindparam(2, $fecha_lanzamiento_libro, PDO::PARAM_STR);
            $stmt->bindparam(3, $num_paginas_libro, PDO::PARAM_INT);
            $stmt->bindparam(4, $descripcion_libro, PDO::PARAM_STR);
            $stmt->bindparam(5, $id_autorTL, PDO::PARAM_INT);
            $stmt->bindparam(6, $id_generoTL, PDO::PARAM_INT);
            $stmt->bindparam(7, $id_editorialTL, PDO::PARAM_INT);
            $stmt->bindparam(8, $rut_usuarioTL, PDO::PARAM_STR);

            $resultado = $stmt->execute();
            $stmt = null;
            return $resultado;

        }

        //Funcion Lista Libros CRUD 2/4
        public function obtieneLibros(){

            $statement = $this->conexionBD->prepare("SELECT * FROM libro");
            $statement->execute();

            $libros = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $libros;
        }

        //Funcion Busca y devuelve Libro por Id_libro
        public function obtieneLibroPorId($id_libro=0){

            $statement = $this->conexionBD->prepare("SELECT * FROM libro WHERE id_libro=?");
            $statement->bindparam(1, $id_libro, PDO::PARAM_INT);
            $statement->execute();

            $libroPorId = $statement->fetch(PDO::FETCH_ASSOC);
            $statement = null;
            return $libroPorId;

        }

        //Funcion busca y obtiene todos los libros personales de un usuario junto a sus datos asociados
        public function obtieneLibrosPersonales($rut_usuario=''){

            $statement = $this->conexionBD->prepare("SELECT * FROM librospersonales WHERE rut_usuario = ?");
            $statement->bindparam(1, $rut_usuario, PDO::PARAM_STR);
            $statement->execute();

            $librosPersonales = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $librosPersonales;
        }

        /**
         * Funcion de filtro dinamico para libros personales 
         * Filtra segun titulo de libro ó Nombres autor ó nombre genero ó 
         *
         * @param string $rut_usuario
         * @param string $titulo_libro
         * @return void
         */
        public function obtieneLibrosFiltroDinamicoLibrosPersonales($rut_usuario='', $titulo_libro=''){

            $statement = $this->conexionBD->prepare("SELECT * FROM librospersonales WHERE rut_usuario=? AND titulo_libro LIKE ?");
            $statement->bindparam(1, $rut_usuario, PDO::PARAM_STR);
            $statement->bindparam(2, $titulo_libro, PDO::PARAM_STR);

            $statement->execute();

            $librosFiltroDinamico = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $librosFiltroDinamico;
        }

        public function obtieneLibrosPersonales2(){

            $statement = $this->conexionBD->prepare("SELECT * FROM librospersonales");
           
            $statement->execute();

            $librosPersonales = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $librosPersonales;
        }

        public function obtieneLibrosFiltroAutor($id_autor=0){

            $statement = $this->conexionBD->prepare("SELECT * FROM librospersonales WHERE id_autor=?");
            $statement->bindparam(1, $id_autor, PDO::PARAM_INT);

            $statement->execute();

            $librosFiltroAutor = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $librosFiltroAutor;
        }

        public function obtieneLibrosFiltroGenero($id_genero=0){

            $statement = $this->conexionBD->prepare("SELECT * FROM librospersonales WHERE id_genero=?");
            $statement->bindparam(1, $id_genero, PDO::PARAM_INT);

            $statement->execute();

            $librosFiltroGenero = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $librosFiltroGenero;
        }

        public function obtieneLibrosFiltroEditorial($id_editorial=0){

            $statement = $this->conexionBD->prepare("SELECT * FROM librospersonales WHERE id_editorial=?");
            $statement->bindparam(1, $id_editorial, PDO::PARAM_INT);

            $statement->execute();

            $librosFiltroEditorial = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $librosFiltroEditorial;
        }

        public function obtieneLibrosFiltroTituloLibro($titulo_libro=''){

            $statement = $this->conexionBD->prepare("SELECT * FROM librospersonales WHERE titulo_libro=?");
            $statement->bindparam(1, $titulo_libro, PDO::PARAM_STR);

            $statement->execute();

            $librosFiltroTituloLibro = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $librosFiltroTituloLibro;
        }

        /**
         * Funcion de filtro dinamico 
         * Filtra segun titulo de libro ó Nombres autor ó nombre genero ó 
         *
         * @param string $titulo_libro
         * @return void
         */
        public function obtieneLibrosFiltroDinamicoPorTitulo($titulo_libro=''){

            $statement = $this->conexionBD->prepare("SELECT * FROM librospersonales WHERE titulo_libro LIKE ? OR nombre_autor LIKE ? OR apellido_autor LIKE ? OR nombre_genero LIKE ? OR nombre_editorial LIKE ?");
            $statement->bindparam(1, $titulo_libro, PDO::PARAM_STR);
            $statement->bindparam(2, $titulo_libro, PDO::PARAM_STR);
            $statement->bindparam(3, $titulo_libro, PDO::PARAM_STR);
            $statement->bindparam(4, $titulo_libro, PDO::PARAM_STR);
            $statement->bindparam(5, $titulo_libro, PDO::PARAM_STR);

            $statement->execute();

            $librosFiltroDinamico = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $librosFiltroDinamico;
        }



        public function obtieneLibroIdLibro($id_libro=''){

            $statement = $this->conexionBD->prepare("SELECT * FROM librospersonales WHERE id_libro=?");
            $statement->bindparam(1, $id_libro, PDO::PARAM_INT);

            $statement->execute();

            $librosFiltroIdLibro = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement = null;
            return $librosFiltroIdLibro;
        }


        //Funcion modifica datos Libro NO SE PUEDE MODIFICAR EL Id CRUD 3/4
        public function actualizaLibro($titulo_libro='', $fecha_lanzamiento_libro='', $num_paginas_libro=0, $descripcion_libro='', $id_autorTL=0, $id_generoTL=0, $id_editorialTL=0, $rut_usuarioTL='', $id_libro=0){
            $statement = $this->conexionBD->prepare("UPDATE libro SET id_libro=?, titulo_libro=?, fecha_lanzamiento_libro=?, num_paginas_libro=?, descripcion_libro=?, id_autorTL=?, id_generoTL=?, id_editorialTL=?, rut_usuarioTL=? WHERE id_libro=?");

            $statement->bindparam(1, $id_libro, PDO::PARAM_INT);
            $statement->bindparam(2, $titulo_libro, PDO::PARAM_STR);
            $statement->bindparam(3, $fecha_lanzamiento_libro, PDO::PARAM_STR);
            $statement->bindparam(4, $num_paginas_libro, PDO::PARAM_INT);
            $statement->bindparam(5, $descripcion_libro, PDO::PARAM_STR);
            $statement->bindparam(6, $id_autorTL, PDO::PARAM_INT);
            $statement->bindparam(7, $id_generoTL, PDO::PARAM_INT);
            $statement->bindparam(8, $id_editorialTL, PDO::PARAM_INT);
            $statement->bindparam(9, $rut_usuarioTL, PDO::PARAM_STR);
            $statement->bindparam(10, $id_libro, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;
        }

        //Funcion elimina Libro por Id_libro CRUD 4/4
        public function eliminaLibro($id_libro=0){

            $statement = $this->conexionBD->prepare("DELETE FROM libro WHERE id_libro=?");

            $statement->bindparam(1, $id_libro, PDO::PARAM_INT);

            $resultado = $statement->execute();
            $statement = null;
            return $resultado;

        }

    }

?>