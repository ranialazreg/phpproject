<?php
$servername='localhost';
$username='root';
$password='';
$dbname='log_in';
//$conn = instance de l'objet mysqli
$conn=new mysqli(
    $servername,$username,$password,$dbname);
if($conn->connect_error){

    echo("echec de connection");
}
else{

  //  echo("connection a été établi avec sucees");
}

  $resetcode = $_POST['reset'];
  $pwd =$_POST['pwd'];
  $cpwd =$_POST['cpwd'];
 
  $result=$conn->query("SELECT COUNT(*) FROM client WHERE resetcode='$resetcode'");
  $row = $result->fetch_row();
  $reset_count = $row[0];
  if ($reset_count > 0)
  {
  if($pwd == $cpwd)
  {
    $t1="update client set password='$pwd' where resetcode='$resetcode'";
    if($conn ->query($t1) ===true)
    {
    $t2="update client set resetcode='0' where resetcode='$resetcode'";
    $conn ->query($t2);
         echo '<script>
    alert("Your password updated successfully");
       window.location.href = "log in.php";
      </script>';
     
    }
    else
    {
        echo '<script>
alert("Error while updating password");
window.location.href = "acceuil.php";
</script>';
     
    }
  }
  else
  {
        echo '<script>
alert("Password and Confirm Password do not match");
window.location.href = "verif.php";
</script>';
   
  }
  }
  else
  {
      echo '<script>
alert("Reset code do not match");
window.location.href = "verif.php";
</script>';
}
     

?>
