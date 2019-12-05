<?php

    require 'dbconnect.class.php';

    class Produit
    {
        private $cnx;

        public function __construct()
        {
            $db = new BasesDonnees;
            $this->cnx = $db->connectDB();
        }
        
    
        public function readAllProduct()
        {
            try {
                $req = 'SELECT * FROM product';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function showOneProduct($pid)
        {
            try {
                $req = 'SELECT * FROM product WHERE pid= :clt_pid';
                $result = $this->cnx->prepare($req);
                $result->bindParam(':clt_pid',$pid);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function addNewProduct($nom, $description, $prix,$fichier)
        {
            try {
                $sql = "INSERT INTO product (name,description,price,file) VALUES (:clt_nom,:clt_description,:clt_prix,:clt_fichier)";
            $result = $this->cnx->prepare($sql);
            $result->bindparam(":clt_nom", $nom);
            $result->bindparam(":clt_description", $description);
            $result->bindparam(":clt_prix",$prix);
            $result->bindparam(":clt_fichier",$fichier);
            $result->execute();
            return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }

        public function updateProduct($pid,$nom, $description, $prix,$fichier)
        {
            try {
                $sql = 'UPDATE product
                        SET name = :clt_nom,
                            description = :clt_description,
                            price = :clt_prix,
                            file = :clt_fichier,
                        WHERE pid = :clt_pid';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_pid", $pid);
                $result->bindparam(":clt_nom", $nom);
                $result->bindparam(":clt_description",$description);
                $result->bindparam(":clt_prix", $prix);
                $result->bindparam(":clt_fichier",$fichier );
                $r = $result->execute();
                return $result;

            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
        public function deleteProduct($pid)
        {
            try {
                $sql = 'DELETE FROM product WHERE pid = :clt_pid';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_pid", $pid);
                $result->execute();
                return $result;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
    }
?>