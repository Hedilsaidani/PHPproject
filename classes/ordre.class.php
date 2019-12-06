<?php

    require 'dbconnect.class.php';

    class Ordre
    {
        private $cnx;

        public function __construct()
        {
            $db = new BasesDonnees;
            $this->cnx = $db->connectDB();
        }
        public function readAllOrdres()
        {
            try {
                $req = 'SELECT * FROM orders where deliverystatus =0 ';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }  public function readAllvehicules()
        {
            try {
                $req = 'SELECT * FROM vehicle';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        public function showOneOrdre($oid)
        {
            try {
                $req = 'SELECT * FROM ordres WHERE oid= :clt_oid';
                $result = $this->cnx->prepare($req);
                $result->bindParam(':clt_oid', $oid);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }


      
        public function deleteOrder($oid)
        {
            try {
                $sql = 'DELETE FROM ordres WHERE oid = :clt_oid';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_oid", $oid);
                $result->execute();
                return $result;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
        public function updateOrder($oid)
        {
            try {
                $sql = 'UPDATE orders
                        SET deliverystatus=1
                        WHERE oid = :clt_id';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_id", $oid);
                $result->execute();
                return $result;

            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }


    }