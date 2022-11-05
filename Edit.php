
<?php 
    $title ="Edit Record";
    require_once "includes/header.php"; 
    require_once "includes/authCheck.php";
    require_once "db/conn.php";  

    //getting specialties for the area of study
    $results= $crud->getSpecialties();

    if(!isset($_GET['id'])){

      include "includes/error.php";
      header("Location: viewRecords.php");
    }else{
        $id= $_GET['id'];
        $registrant= $crud->getRegistrantsDetails($id);
    
     ?>

    <h1 class="text-center">Edit Record</h1>


    <form method="post" action="editPost.php" autocomplete="on">
     <input type="hidden"  name ="id" value= "<?php echo $registrant['registarnt_Id']?>">   
<!--first name input -->
    <div class="mb-3">
    <label for="firstnameform" class="form-label">First Name</label>
    <input type="text" class="form-control" value= "<?php echo $registrant['firstName']?>" id="firstnameform" name="firstnameform">
   
  </div>
  <!-- last name input-->
  <div class="mb-3">
    <label for="lastnameform" class="form-label">Last Name</label>
    <input type="text" class="form-control" value= "<?php echo $registrant['lastName']?>" id="lastnameform" name="lastnameform">
   
  </div>
<!--email address input -->
  <div class="mb-3">
    <label for="emailInput" class="form-label">Email address</label>
    <input type="email" class="form-control" value= "<?php echo $registrant['emailAddress']?>" id="emailInput" aria-describedby="emailHelp" name="emailInput">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
<!-- home address input-->
  <div class="mb-3">
    <label for="inputAddress" class="form-label">Home Address</label>
    <input type="text" class="form-control" value= "<?php echo $registrant['homeAddress']?>" id="inputAddress" placeholder="1234 Main St" name="inputAddress">
   
  </div>

  <!-- contact info input-->
  <div class="mb-3">
    <label for="phonenumberform" class="form-label">Contact Number</label >
    <input type="text" class="form-control" value= "<?php echo $registrant['contactNumber']?>" id="phonenumberform" name="phonenumberform">
  </div>
<!--dob input -->
  <div class="mb-3">
    <label for="dobform" class="form-label">Date of Birth</label>
    <input type="text" class="form-control" value= "<?php echo $registrant['dateOfBirth']?>" id="dobform" placeholder="yy-mm-dd" name="dobform">
  </div>

  <!-- area of study input-->
  <div class="mb-3">
    <label for="studyform">Area of Study</label>
    <select id="studyform" class="form-select" name="studyform">

      <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) {?>

      <option value="<?php echo $r['specialty_Id'] ?>"     <?php if($r['specialty_Id']
            == $registrant['specialty_Id']) echo "selected" ?>> <!--in option tag-->

            <?php echo $r['name']; ?> 
     </option>

      <?php }?>
    </select>
  </div>
  <!-- submit btn-->
  <button type="submit" name="submitform" class="btn btn-info btn-block">Save Changes</button>
</form>
<br>
<a href="viewRecords.php?id " class="btn btn-primary">Back To List</a>

<?php }?>

<br>
<br>
<br>
    <?php  require_once "includes/footer.php";    ?> 