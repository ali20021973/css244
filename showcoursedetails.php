<?php
              
             $val=$_POST["name"];
            
         $file=fopen("course.txt","a+");
         
         while(!feof($file))
         {
            
                $cheek=fgets($file);
                $arr=explode("~",$cheek);
                 
                if($arr[0]==$val)
                {
                     $fi=fopen("coursedetails.txt","a+");
                     $cheek1=fgets($fi);
                     $arr1=explode("~",$cheek1);
                     if($arr1[0]==$val)
                     {
                         echo $cheek1."<br";
                     }

                      
                }
                  
                
         }
         fclose($fi);
         fclose($file);
?>