<?php

    require 'dbconnect.class.php';

    class vehicule
    {
        private $cnx;

        public function __construct()
        {
            $db = new BasesDonnees;
            $this->cnx = $db->connectDB();
        }
        public function readAllvehicule()
        {
           
            try {
                $req = 'SELECT * FROM vehicule';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }