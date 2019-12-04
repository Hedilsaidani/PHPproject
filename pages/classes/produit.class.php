<?php
require 'dbconnection.php';
class produit{
    private $cnx;
    public function __construct()
    {
        $db =new BasesDonnees;
        $this->cnx=$db->connectDB();
    }
    public function readAllproduit(){
        try {
             $rep='SELECT * FROM product';
             $result=$this->cnx->prepare($rep);
             $result->execute();
             return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function readoneproduct($pid)
    {
        try {
            $req = 'SELECT * FROM product WHERE pid= :clt_pid';
            $result = $this->cnx->prepare($req);
            $result->bindParam(':clt_pid', $pid);
            $result->execute();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
     
 public function creatproduit($name,$price,$description){
try{
    
    
    $rep ='INSERT INTO product(name,price,description) VALUES ( :param_name, :param_price, :param_description)';
    $result = $this->cnx-> prepare($rep);
   $result->bindParam (':param_name',$name);
   $result->bindParam (':param_price',$price);
   $result->bindParam (':param_description',$description);
   
   $result->execute();
   return $result;
}
   catch (PDOException $e) {
   echo $e->getMessage();
}

}



public function editProduit($pid,$name,$description,$price){
    try{
    $req = 'UPDATE product SET name=:param_name,description=:param_description,price=:param_price WHERE pid=:param_pid';
    $result = $this->cnx->prepare($req);
  
    $result->bindParam (':param_name',$name);
    $result->bindParam (':param_description',$description);
    $result->bindParam (':param_price',$price);
    $result->bindParam (':param_pid',$pid);
    $result->execute();
    return $result;
}
catch (PDOException $e) {
    echo $e->getMessage();
 }
   


}

public function delete($pid){
    try{
    $req = "DELETE FROM product WHERE  pid=:param_id ";
    $result = $this->cnx->prepare($req);

    $result->bindParam(":param_id",$pid);
    $result->execute();
    return $result;
}
catch (PDOException $e) {
    echo $e->getMessage();
 }
    header('location:user.php');
}


}
