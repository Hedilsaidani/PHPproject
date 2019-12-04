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
                $req = 'SELECT * FROM produits';
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
                $req = 'SELECT * FROM produits WHERE pid= :clt_pid';
                $result = $this->cnx->prepare($req);
                $result->bindParam(':clt_pid', $pid);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function addNewProduct($nom, $description, $prix,$file)
        {
            try {
                $sql = "INSERT INTO Produits (nom,descr,prix,fichier) VALUES (:clt_nom,:clt_description,:clt_prix,:clt_file)";
            $result = $this->cnx->prepare($sql);
            $result->bindparam(":clt_nom", $nom);
            $result->bindparam(":clt_description", $description);
            $result->bindparam(":clt_prix",$prix);
            $result->bindparam(":clt_file",$file);
            $result->execute();
            return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }

        public function updateProduct($pid,$nom, $description, $prix,$file )
        {
            try {
                $sql = 'UPDATE produits
                        SET nom = :clt_nom,
                            descr = :clt_description,
                            prix = :clt_prix,
                            fichier = :clt_file,
                        WHERE pid = :clt_pid';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_pid", $pid);
                $result->bindparam(":clt_nom", $nom);
                $result->bindparam(":clt_description",$description);
                $result->bindparam("clt_prix:", $prix);
                $result->bindparam("clt_file:",$file );
                $result->execute();
                return $result;

            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
        public function deleteProduct($pid)
        {
            try {
                $sql = 'DELETE FROM produits WHERE pid = :clt_pid';
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