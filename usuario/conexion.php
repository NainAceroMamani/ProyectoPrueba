<?php
    class Db{
        private $link;
        private $engine;
        private $host;
        private $name;
        private $user;
        private $pass;
        private $charset;

        public function __construct()
        {
            $this->host    = "localhost";
            $this->engine  = "mysql";
            $this->name    = "grupo1";
            $this->user    = "root";
            $this->pass    = "ESIS2020@NXN";
            $this->charset = "utf8";
            return $this;
        }

        /**
         * Conexión a la base de datos
         *
         * @return void
         */
        private function connect()
        {
            try{
                $this->link = new PDO($this->engine.':host='.$this->host.';dbname='.$this->name.';charset='.$this->charset, $this->user, $this->pass);
                return $this->link;

            }catch(PDOException $e){
                die(sprintf('No hay conexion a la base de datos , hubo un error : %s', $e->getMessage()));
            }
        }

        /**
         * Query
         *
         * @param string $sql
         * @param array $params
         * @return void
         */
        public static function query($sql, $params = [])
        {
            $db = new self();
            $link = $db->connect();
            $link->beginTransaction();
            $query = $link->prepare($sql);

            if(!$query->execute($params)) {
                $link->rollBack();
                $error = $query->errorInfo();

                throw new Exception($error[2]);
            }

            if(strpos($sql, 'SELECT') !== false) {

                return $query->rowCount() > 0 ? $query->fetchAll(PDO::FETCH_CLASS) : false;

            }
        }
    }
