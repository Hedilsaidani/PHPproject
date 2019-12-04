<?php
require 'dbconnection.php';
class admin{
    private $cnx;
    public function __construct()
    {
        $db =new BasesDonnees;
        $this->cnx=$db->connectDB();
    }
   public function product(){
try {
    $req = 'SELECT  COUNT(*) AS c FROM product' ;
    $result = $this->cnx->prepare($req);
    $result->execute();
    return $result;
 

} catch (PDOException $e) {
    echo $e->getMessage();
}
   }
   public function employe(){
    try {
        $req = 'SELECT  COUNT(*) AS c FROM employee' ;
        $result = $this->cnx->prepare($req);
        $result->execute();
        return $result;
     
    
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
   
   }

   public function costumer(){
    try {
        $req = 'SELECT  COUNT(*) AS c FROM costumer' ;
        $result = $this->cnx->prepare($req);
        $result->execute();
        return $result;
     
    
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
   
   }
    public function popular()
    {
        try {
            $req = 'SELECT pid, COUNT(pid) AS amount FROM orders GROUP BY pid ORDER BY amount DESC LIMIT 1';
            $result = $this->cnx->prepare($req);
            $result->execute();
            while($data = $result->fetch()){
                $r=$data['pid'];
                
            }
            $rep = 'SELECT * FROM product WHERE pid= :clt_pid';
            $resul = $this->cnx->prepare($rep);
            $resul->bindParam(':clt_pid', $r);
            $resul->execute();
            return $resul;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        
    }
    public function notpopular()
    {
        try {
            $req = 'SELECT pid, COUNT(pid) AS amount FROM orders GROUP BY pid ORDER BY amount  LIMIT 1';
            $result = $this->cnx->prepare($req);
            $result->execute();
            while($data = $result->fetch()){
                $r=$data['pid'];
                
            }
            $rep = 'SELECT * FROM product WHERE pid= :clt_pid';
            $resul = $this->cnx->prepare($rep);
            $resul->bindParam(':clt_pid', $r);
            $resul->execute();
            return $resul;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        
    }
    
}
