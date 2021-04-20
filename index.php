<?php

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,700&display=swap" rel="stylesheet">
     <style media="screen">
     body{
       font-family: 'Mulish', sans-serif;
     }
     .header{
       display: flex;
       flex-direction: column;
       justify-content: center;
       align-items: center;
       color: #c70039;
     }
       .bgcolor{
         background: black;
       }
       .show{
         display: flex;
         justify-content: center;
         align-items: center;
         margin-bottom: 50px;

       }
       table{
         border-spacing: 0;
         border: 2px solid black;
       }
       td{
         padding: 35px;
       }
       .xyz{
         display: flex;
         justify-content: center;
         align-items: center;
       }
       .form-control{
         margin-top: 20px;
       }
       .btn{
         margin-left: 14px ;
         background-color: #008891!important;
       }
     </style>
   </head>
   <body>

     <div class="header">
       <h1>Welcome</h1>
       <h3>Create your own dynamic Chess Board now!!</h3>

     </div>
    <div class="input-group mb-3 xyz">
     <form class="" action="" method="post">

       <div class="input-group mb-3">

       <input type="text" name="cb" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Enter the size">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Generate Chess Board</button>
     </form>
    </div>
<br>
<div class="show">
  <table>
    <?php
    if(isset($_POST['submit'])){

      $data=$_POST['cb'];

      for($row=1;$row<=$data;$row++){
        echo "<tr>";
        for($col=1;$col<=$data;$col++){
          if(($row+$col)%2==0){
          echo "<td class='bgcolor'>   </td>";
        }
          else{
            echo "<td >   </td>";
          }
        }
        echo "</tr>";
      }
    }


     ?>
  </table>

</div>

   </body>
 </html>
