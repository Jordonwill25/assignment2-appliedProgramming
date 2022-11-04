<?php 
    $title ="Success";
    require_once "includes/header.php";  
    require_once "db/conn.php";

    if(isset($_POST['submitform'])){
//extracting value from post array
      $fName= $_POST['firstnameform'];
      $lName= $_POST['lastnameform'];
      $email= $_POST['emailInput'];
      $hAddress= $_POST['inputAddress'];
      $pNumber= $_POST['phonenumberform'];
      $dob= $_POST['dobform'];
      $speciality= $_POST['studyform'];
    
      //track if successful or  not and to insert
      $isSuccess= $crud->insert($fName,$lName,$email,$hAddress,$pNumber,$dob,$speciality);
    


    if($isSuccess){

     echo " <h1 class='text-center text-success'>You have been registered</h1>";

    }else{
      include "includes/error.php";
    }

  }

      ?>


<!--//this is used to print out actios passed to the action page using the 'get' method
    <div class="card" style="width: 18rem;">
  <div class="card-header">
    Registration information
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Full Name: <?php //echo $_GET['firstnameform'] ."". $_GET['lastnameform']; ?></li>
    <li class="list-group-item">Email Address: <?php //echo $_GET['emailInput']; ?></li>
    <li class="list-group-item">Home Address: <?php //echo $_GET['inputAddress']; ?></li>
    <li class="list-group-item"> Contact Number: <?php //echo $_GET['phonenumberform']; ?></li>
    <li class="list-group-item">Date of Birth: <?php //echo $_GET['dobform']; ?></li>
    <li class="list-group-item"> Area of Study: <?php //echo $_GET['studyform']; ?></li>
  </ul>
</div>
-->

<div class="card" style="width: 18rem;">
  <div class="card-header">
    Registration information
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Full Name: <?php echo $_POST['firstnameform'] ."  ". $_POST['lastnameform']; ?></li>
    <li class="list-group-item">Email Address: <?php echo $_POST['emailInput']; ?></li>
    <li class="list-group-item">Home Address: <?php echo $_POST['inputAddress']; ?></li>
    <li class="list-group-item"> Contact Number: <?php echo $_POST['phonenumberform']; ?></li>
    <li class="list-group-item">Date of Birth: <?php echo $_POST['dobform']; ?></li>
    <li class="list-group-item"> Area of Study: <?php echo $_POST['studyform']; ?></li>
  </ul>
</div>

<br>
<br>
<br>
    <?php  require_once "includes/footer.php";    ?>