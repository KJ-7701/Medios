<?php
   $con=mysqli_connect("localhost","root","","e-commerce");
   if($con)
   {

   }
   else
   {
       echo "Not connected..";
       echo mysqli_connect_error();
   }
   ?>