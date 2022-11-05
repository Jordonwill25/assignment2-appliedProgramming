<?php 
    $title ="View Records";
    require_once "includes/header.php"; 
    require_once "includes/authCheck.php";
    require_once "db/conn.php";  

//getting registrants info from database to display
    $results= $crud->getRegistrants();
     ?>
<h1 class="text-center">View Records</h1>



    <table class="table">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email Address</th>
            <th>Speciality</th>
            <th>Actions</th>
        </tr>

        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){ ?>

            <tr>
                <td><?php echo $r['registarnt_Id'] ?></td>
                <td><?php echo $r['firstName'] ?></td>
                <td><?php echo $r['lastName'] ?></td>
                <td><?php echo $r['emailAddress'] ?></td>
                <td><?php echo $r['name'] ?></td>
                <td><a href="view.php?id= <?php echo $r['registarnt_Id'] ?> " class="btn btn-primary">View</a></td>
                <td><a href="Edit.php?id= <?php echo $r['registarnt_Id'] ?> " class="btn btn-warning">Edit</a></td>
                <td><a onclick="return confirm('Are you sure you want to dlete this record?'); " 
                    href="delete.php?id= <?php echo $r['registarnt_Id'] ?> " class="btn btn-danger">Delete</a></td>
            </tr>

        <?php  }  ?>   
        
        

    </table>









     
<br>
<br>
<br>
<br>
    <?php  require_once "includes/footer.php";    ?>