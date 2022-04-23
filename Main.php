

<?php


include 'employee.php';
include 'coursedetail.php';

   // $app=new  course($_POST["fname"],$_POST["lname"]);
      if(($_POST["name"]!=" ")&&$_POST["id"])
      {
      $file=fopen("course.txt","a+");
      $txt=$_POST["name"];
      fwrite($file,$txt);
      $txt=$_POST["id"];
      fwrite($file,"~".$txt);
      $txt=$_POST["Price"];
      fwrite($file,"~".$txt."\r\n");
      fclose( $file);
      }
     header('location:view.html');
       

    

?>

