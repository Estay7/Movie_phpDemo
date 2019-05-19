<?php
 $dbcon = mysqli_connect('localhost','root','','class');

 if (mysqli_connect_errno()) {
   echo "errrrrrrrrrrrrrr้". mysqli_connect_error();
 }
 mysqli_set_charset($dbcon,'utf8');

 ?>
