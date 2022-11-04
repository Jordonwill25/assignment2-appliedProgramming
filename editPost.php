<?php
$title ="Edit Post";
 require_once "db/conn.php"; 

//get info form form
if(isset($_POST['submitform'])){
    //extracting value from post array
          $id= $_POST['id'];
          $fName= $_POST['firstnameform'];
          $lName= $_POST['lastnameform'];
          $email= $_POST['emailInput'];
          $hAddress= $_POST['inputAddress'];
          $pNumber= $_POST['phonenumberform'];
          $dob= $_POST['dobform'];
          $speciality= $_POST['studyform'];



//call crud function

        $result= $crud->editRegistrant($id,$fName, $lName, $email,$hAddress, $pNumber,$dob,$speciality);




//redirect to index page
    if ($result){
        header("Location: viewRecords.php");
    }else{
        include "includes/error.php";
    }

}else{
    include "includes/error.php";
    
    }

?>