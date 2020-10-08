<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

 ?>

    <p>Tabel Logika 1111</p>
    <table border="1">
         <tr>
           <td>Input true</td>
           <td>Input 2</td>
           <td>AND</td>
           <td>OR</td>
         </tr>
         <tr>
           <td>false</td>
           <td>false</td>
           <td><?php echo printf(false && false) ?></td>
           <td><?php echo printf(false || false) ?></td>
         </tr>
         <tr>
           <td>false</td>
           <td>true</td>
           <td><?php echo printf(false && true) ?></td>
           <td><?php  printf(false || true) ?></td>
         </tr>
         <tr>
           <td>true</td>
           <td>false</td>
           <td><?php echo printf(true && false) ?></td>
           <td><?php  printf(true || false) ?></td>
         </tr>
         <tr>
           <td>true</td>
           <td>true</td>
           <td><?php  printf(true && true) ?></td>
           <td><?php  printf(true || true) ?></td>
         </tr>
   </table>





  </body>
</html>
