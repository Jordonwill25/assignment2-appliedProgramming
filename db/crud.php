<?php 
    class crud{
        private $db;
        
        function __construct($conn){

            $this->db= $conn;
        }
    
        //creating an instance to insert data into the database
        public function insert($fName, $lName, $email,$hAddress, $pNumber,$dob,$speciality){
            try {
                $sql=" INSERT INTO registrant (firstName,lastName,emailAddress,homeAddress,contactNumber,dateOFBirth,specialty_Id) 
                VALUES (:fName, :lName, :email,:hAddress, :pNumber,:dob,:speciality)";

                $stmt=  $this->db->prepare($sql);

                $stmt->bindparam(':fName',$fName);
                $stmt->bindparam(':lName',$lName);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':hAddress',$hAddress);
                $stmt->bindparam(':pNumber',$pNumber);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':speciality',$speciality);

                $stmt ->execute(); 
                return true;

            } catch (PDOException $e) {

            echo $e ->getMessage();
            return false;
                //throw $th;
            }
        }

        //edit btn

        public function editRegistrant($id,$fName, $lName, $email,$hAddress, $pNumber,$dob,$speciality){
        $sql= " UPDATE `registrant` SET `firstName`=:fName,`lastName`= :lName
            ,`emailAddress`= :email,`homeAddress`= :hAddress,`contactNumber`= :pNumber, 
            `dateOfBirth`=:dob,`specialty_Id`=:speciality WHERE registarnt_Id = :id";

            try{
                $stmt=  $this->db->prepare($sql);

                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':fName',$fName);
                $stmt->bindparam(':lName',$lName);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':hAddress',$hAddress);
                $stmt->bindparam(':pNumber',$pNumber);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':speciality',$speciality);

                $stmt ->execute(); 
                return true;

            }catch(PDOException $e){
                echo $e ->getMessage();
                return false;
                //throw $th;
            }
                
        }

        //creating a function to get info from database

        public function getRegistrants(){

           
            try{
                $sql = "SELECT * FROM `registrant`a inner join specialties s on  a.specialty_Id = s.specialty_Id;";
                $resuts= $this->db->query($sql);
                return $resuts;

            }catch(PDOException $e){
                echo $e ->getMessage();
                return false;
                //throw $th;
            }

        }

        public function getRegistrantsDetails($id){

            
            try{
                $sql= "select * from registrant a inner join specialties s on  a.specialty_Id = s.specialty_Id
                where registarnt_Id = :id";
                $stmt=  $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;


            }catch(PDOException $e){
                echo $e ->getMessage();
                return false;
                //throw $th;
            }   
        }


        public function getSpecialties(){

            

            try{
                $sql = "SELECT * FROM `specialties`;";
                $results= $this->db->query($sql);
                return $results;

            }catch(PDOException $e){
                echo $e ->getMessage();
                return false;
                //throw $th;
             }

        }

        public function getSpecialty($id){

            try{
                $sql = "SELECT * FROM `specialties` where specialty_Id=:id;";
                $stmt= $this->db->query($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                $results = $stmt->fetch();

                return $results;

            }catch(PDOException $e){
                echo $e ->getMessage();
                return false;
                //throw $th;
             }

        }


        public function deleteRegistrant($id){
            

            try{
                $sql= "delete from registrant where registarnt_Id= :id";
                $stmt=  $this->db->prepare($sql);
                $stmt->bindparam('id',$id);
                $stmt->execute();
                return true;

            }catch(PDOException $e){
                echo $e ->getMessage();
                return false;
                //throw $th;
            }

        }
        
    }

 


?>
