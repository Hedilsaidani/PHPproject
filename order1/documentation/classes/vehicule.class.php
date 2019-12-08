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
                $req = 'SELECT * FROM vehicle where status= 0';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        public function updatevehicule($vid)
        {
            try {
                $sql = 'UPDATE vehicle
                        SET status=1
                        WHERE vid = :clt_vid';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_vid", $vid);
                $result->execute();
                return $result;

            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
            
 public function creatvehicle($vid,$status,$type){
    try{
        
        
        $rep ='INSERT INTO vehicle(vid,status,type) VALUES ( :param_vid, :param_status, :param_type)';
        $result = $this->cnx->prepare($rep);
       $result->bindParam (':param_vid',$vid);
       $result->bindParam (':param_status',$status);
       $result->bindParam (':param_type',$type);
       $result->execute();
       return $result;
    }
       catch (PDOException $e) {
       echo $e->getMessage();
    }
    
    }

    public function editVehicle($vid,$status,$type){
        try{
        $req = 'UPDATE employee 
        SET 
        name = :param_name,
        pwd=:param_pwd,
        email=:param_email,
        phone=:param_phone 
        WHERE eid=:param_id';
        $result = $this->cnx->prepare($req);
      
        $result->bindParam (':param_name',$name);
        $result->bindParam (':param_pwd',$pwd);
        $result->bindParam (':param_email',$email);
        $result->bindParam (':param_phone',$phone);
        $result->bindParam (':param_id',$eid);
        $result->execute();
        return $result;
    }
    catch (PDOException $e) {
        echo $e->getMessage();
     }
       
    
    
    }
    
    public function deletevehicule($vid){
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
    
    
    }
    public function insertv($id,$type){
        try{
        $req = 
         'UPDATE  SET orders type = :od_param WHERE orders.oid=:id';
        $result = $this->cnx->prepare($req);
        $result->bindParam(":id",$id);

        $result->bindParam(":od_param",$type);
        $result->execute();
        return $result;
    }
    catch (PDOException $e) {
        echo $e->getMessage();
     }
    }
        }