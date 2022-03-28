<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
    
} ?>



<?php
        $_SESSION['from_city']='';
        $_SESSION['to_city']='';
        $_SESSION['date']='';

    if(isset($_POST['submit']))
    {
        
        $_SESSION['from_city']=$_POST['from'];
        $_SESSION['to_city']=$_POST['to'];
        $_SESSION['date']=$_POST['date'];
        echo $_SESSION['from_city'];
        echo $_SESSION['to_city'];
        echo $_SESSION['date'];
        
        }
        
?>
<?php
    if(!isset($_SESSION['customer']) || empty($_SESSION['customer']) )
        {
            header('location:login.php');
            $_SESSION['message']='please login first';
        }
    else{
      if(isset($_SESSION['from_city']) && isset($_SESSION['to_city']) && isset($_SESSION['date']))
      {
          header('location:search_result.php');
      }
      else{
          header('location:index.php');
      }
    }
?>