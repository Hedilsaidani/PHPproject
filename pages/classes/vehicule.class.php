<?php
require 'dbconnection.php';
class vehicule{
    private $cnx;
    public function __construct()
    {
        $db =new BasesDonnees;
        $this->cnx=$db->connectDB();
    }
    public function readAllvehicle(){
        try {
             $rep='SELECT * FROM vehicle';
             $result=$this->cnx->prepare($rep);
             $result->execute();
             return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
 public function creatvehicule($type,$status,$vehicle_number){
try{
    
    
    $rep ='INSERT INTO vehicle(type,status,vehiclenum) VALUES ( :param_type, :param_status, :param_vehicle_number )';
    $result = $this->cnx->prepare($rep);
   $result->bindParam (':param_type',$type);
   $result->bindParam (':param_status',$type);
   $result->bindParam (':param_vehicle_number',$vehiclenum);
   $result->execute();
   return $result;
}
   catch (PDOException $e) {
   echo $e->getMessage();
}

}


public function readonevehicule($vid)
{
    try {
        $req = 'SELECT * FROM vehicle WHERE vid= :clt_vid';
        $result = $this->cnx->prepare($req);
        $result->bindParam(':clt_vid', $vid);
        $result->execute();
        return $result;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


public function editvehicule($vid,$type,$status,$vehicle_number){
    try{
    $req = 'UPDATE vehicle 
    SET 
    type = :param_type,
    status=:param_status,
    vehiclenum=:param_vehicle_number,
    WHERE vid=:param_id';
    $result = $this->cnx->prepare($req);
  
    $result->bindParam (':param_type',$type);
    $result->bindParam (':param_status',$status);
    $result->bindParam (':param_vehicle_number',$vehicle_number);
    $result->bindParam (':param_id',$vid);
    $result->execute();
    return $result;
}
catch (PDOException $e) {
    echo $e->getMessage();
 }
   


}

public function delete($vid){
    try{
    $req = "DELETE FROM vehicle WHERE  vid=:param_id ";
    $result = $this->cnx->prepare($req);

    $result->bindParam(":param_id",$vid);
    $result->execute();
    return $result;
}
catch (PDOException $e) {
    echo $e->getMessage();
 }
    header('location:vehicule.php');
}


}
