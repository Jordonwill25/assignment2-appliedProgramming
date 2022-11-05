
<?php 
    $host= '127.0.0.1';
    $port='3307';
    $db='registrationform';
    $user='root';
    $pass='';
    $charset='utf8mb4';



    $dsn="mysql:host=$host;port=$port;dbname=$db;charset=$charset";

    try{

        $pdo= new PDO($dsn,$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // echo'hello database';

    }catch(PDOException $e){
            
      //  echo "<h1 class ='text-danger'>No data found</h1>";
       throw new PDOException($e ->getMessage());

    };

    require_once "crud.php";
    require_once "user.php";
    $crud = new crud($pdo);
    $user = new user($pdo);

    $user->insertUser("admin", "Password");
?>





<!--alternate version using workbench-->
<?php  /*
    $host= 'applied-web.mysql.database.azure.com';
    $db='registration_jordonwdb';
    $user='appliedweb_user@applied-web';
    $pass='P@ssword1';
    $charset='utf8mb4';


    $dsn="mysql:host=$host;dbname=$db;charset=$charset";

    try{

        $pdo= new PDO($dsn,$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo'hello database';

    }catch(PDOException $e){
            
        echo "<h1 class ='text-danger'>No data found</h1>";
       // throw new PDOException($e ->getMessage());

    };

    require_once "crud.php";
    require_once "user.php";
    $crud = new crud($pdo);
    $user = new user($pdo);

    $user->insertUser("admin", "Password");

?>*/