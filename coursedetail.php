<?php

include 'course.php';
   class coursedetails extends course
   {

     public $price;
     public $num_of_student;
     public $num_of_teacher;
     public $star_teaching;

     function __construct($price,$num_of_student,$num_of_teacher,$star_teaching)
     {
         $this->price=$price;
         $this->num_of_student=$num_of_student;
         $this->num_of_teacher=$num_of_teacher;
         $this->star_teaching=$star_teaching;
     }

      function change_price($x)
      {
             if($x>0)
             {
                 $this->price=$x;
             }
      }
      function change_number_teacher($x)
      {
                if($x>=0)
                {
                   $this->num_of_teacher=$x;
                }
      }
      function change_numeber_student($x)
      {
        if($x>=0)
        {
           $this->star_teaching=$star_teaching=$x;
        }
      }
     function see_coursedetails()
     {
             
      header('location:viewcourse1.html'); 
        
     }

   
   }

    $obj=new coursedetails("","","","");
    $obj->see_coursedetails();




?>