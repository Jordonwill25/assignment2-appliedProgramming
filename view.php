<?php 
    $title ="View Registrant";
    require_once "includes/header.php"; 
    require_once "includes/authCheck.php";
    require_once "db/conn.php";  

    //get registrant
    if(!isset($_GET['id'])){

      include "includes/error.php";
      header("Location: viewRecords.php");

    }else{

        $id= $_GET['id'];
        $results= $crud->getRegistrantsDetails($id);
       
     ?>

<img src="<?php echo empty($results['avatarPath']) ? "uploads/blank.png "  :$results['avatarPath'] ;  ?>" class= "rounded-circle"style="width:20%; height:20%" />

<div class="card" style="width: 18rem;">
  <div class="card-header">
    Registration information
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Full Name: <?php echo  $results['firstName'] ."  ". $results['lastName']; ?></li>
    <li class="list-group-item">Email Address: <?php echo  $results['emailAddress']; ?></li>
    <li class="list-group-item">Home Address: <?php echo  $results['homeAddress']; ?></li>
    <li class="list-group-item"> Contact Number: <?php echo  $results['contactNumber']; ?></li>
    <li class="list-group-item">Date of Birth: <?php echo  $results['dateOfBirth']; ?></li>
    <li class="list-group-item"> Area of Study: <?php echo  $results['name']; ?></li>
  </ul>
</div>
<br>
      <a href="viewRecords.php?id " class="btn btn-primary">Back To List</a>
      <a href="Edit.php?id= <?php echo $results['registarnt_Id'] ?> " class="btn btn-warning">Edit</a>
      <a onclick="returnhref="delete.php?id= <?php echo $results['registarnt_Id'] ?> class="btn btn-danger"> Delete</a>


<?php }?>





<br>
<br>
<br>
    <?php  require_once "includes/footer.php";    ?>