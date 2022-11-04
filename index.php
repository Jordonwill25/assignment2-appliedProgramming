
<?php 
    $title ="Index";
    require_once "includes/header.php"; 
    require_once "db/conn.php";  

    //getting specialties for the area of study
    $results= $crud->getSpecialties();
     ?>

    <h1 class="text-center text-primary">School Registration</h1>

<!--
    first name
    last name
    email address
    address
    phone number
    date of birth
    area of study
-->
    <form method="post" action="Success.php" autocomplete="on">
<!--first name input -->
    <div class="mb-3">
    <label for="firstnameform" class="form-label">First Name</label>
    <input required type="text" class="form-control" id="firstnameform" name="firstnameform">
   
  </div>
  <!-- last name input-->
  <div class="mb-3">
    <label for="lastnameform" class="form-label">Last Name</label>
    <input required type="text" class="form-control" id="lastnameform" name="lastnameform">
   
  </div>
<!--email address input -->
  <div class="mb-3">
    <label for="emailInput" class="form-label">Email address</label>
    <input required type="email" class="form-control" id="emailInput" aria-describedby="emailHelp" name="emailInput">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
<!-- home address input-->
  <div class="mb-3">
    <label for="inputAddress" class="form-label">Address</label>
    <input required type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="inputAddress">
   
  </div>

  <!-- contact info input-->
  <div class="mb-3">
    <label for="phonenumberform" class="form-label">Contact Number</label >
    <input required type="text" class="form-control" id="phonenumberform" name="phonenumberform">
  </div>
<!--dob input -->
  <div class="mb-3">
    <label for="dobform" class="form-label">Date of Birth</label>
    <input type="text" class="form-control" id="dobform" placeholder="yy-mm-dd" name="dobform">
  </div>

  <!-- area of study input-->
  <div class="mb-3">
    <label for="studyform">Area of Study</label>
    <select id="studyform" class="form-select" name="studyform">

      <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) {?>

      <option value="<?php echo $r['specialty_Id'] ?>"> <?php echo $r['name']; ?> </option>

      <?php }?>
    </select>
  </div>
  <!-- submit btn-->
  <button type="submit" name="submitform" class="btn btn-primary">Submit</button>
</form>
    
<br>
<br>
<br>
    <?php  require_once "includes/footer.php";    ?>