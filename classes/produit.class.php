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
                $req = 'SELECT * FROM product WHERE pid=:pdt_id';
                $result = $this->cnx->prepare($req);
                $result->bindParam(':pdt_id',$pid);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function addNewProduct($nom, $description, $prix,$fichier)
        {
            try {
                $sql = "INSERT INTO product (name,description,price,file) VALUES (:pdt_nom,:pdt_desc,:pdt_prix,:pdt_fich)";
            $result = $this->cnx->prepare($sql);
            $result->bindparam(":pdt_nom", $nom);
            $result->bindparam(":pdt_desc", $description);
            $result->bindparam(":pdt_prix",$prix);
            $result->bindparam(":pdt_fich",$fichier);
            $result->execute();
            return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }

        
        public function updateProduct($pid,$nom, $description, $prix,$fichier)
        {
            try {
                $sql = "UPDATE product SET name=:pdt_nom, description=:pdt_desc, price=:pdt_prix, file=:pdt_fich WHERE pid=:pdt_id";
                $r = $this->cnx->prepare($sql);
                $r->bindparam(":pdt_id", $pid);
                $r->bindparam(":pdt_nom", $nom);
                $r->bindparam(":pdt_desc", $description);
                $r->bindparam(":pdt_prix", $prix);
                $r->bindparam(":pdt_fich", $fichier);
                $r->execute();

                return $r;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }



        public function deleteProduct($pid)
        {
            try {
                $sql = 'DELETE FROM product WHERE pid=:pdt_id';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":pdt_id", $pid);
                $result->execute();
                return $result;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
    }
?>