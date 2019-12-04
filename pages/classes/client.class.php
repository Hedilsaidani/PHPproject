<?php
require 'dbconnection.php';
class client{
    private $cnx;
    public function __construct()
    {
        $db =new BasesDonnees;
        $this->cnx=$db->connectDB();
    }
    public function readAllclient(){
        try {
             $rep='SELECT * FROM costumer';
             $result=$this->cnx->prepare($rep);
             $result->execute();
             return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    






public function delete($cid){
    try{
    $req = "DELETE FROM costumer WHERE  cid=:param_id ";
    $result = $this->cnx->prepare($req);

    $result->bindParam(":param_id",$cid);
    $result->execute();
    return $result;
}
catch (PDOException $e) {
    echo $e->getMessage();
 }
    header('location:typography.php');
}


}
