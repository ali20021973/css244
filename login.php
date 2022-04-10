


<body>

    <div>
        <form action="login.php" method="post">
         <input type="number" name="student" placeholder="ID">
         <br>
         <input type="password" name="studentpass" placeholder="password">
         <br>
          <input type="submit"value="Submit">

        </form>
    </div>
</body>

<?php
      

  // include 'cheek.php';
   //include 'deletestudent.php';
   
   
   $text=$_POST["student"];
   $text2=$_POST["studentpass"];
  $file=fopen("student.txt","a+");
  fwrite($file,$text."\n");
  $text2=md5($text2);
  fwrite($file,$text2."\n");
  fclose($file);
     //using
  
   
 // fill($text,$text);
 //remove_line($file, $text);


?>