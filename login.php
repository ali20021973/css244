<?php

      $file=fopen("login.txt","r");
      $x=0;
      while(!feof($file))
      {
          $cheek=fgets($file);
          $arr=explode("~",$cheek);
               
           $arr[1]=intval($arr[1]);
           $_POST["id"]=intval($_POST["id"]);
          if($arr[0]==$_POST["password"])
          {
           
           if($arr[1]==$_POST["id"])
           {
           
             header('location:Main.php');
             $x=1;
           }
        }
      }
      if($x==0)
      {
        echo"invalid registered"."<br>";
      }
      
      
    fclose($file);


?>