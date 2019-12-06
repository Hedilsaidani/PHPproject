<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table class="table table-striped">
            <thead>
                <tr>
                    <th>vid</th>
                    <th>staus</th>
                    <th>vehicule number</th>
                  
                </tr>
            </thead>

<tbody>
<?php

include 'vehicule.class.php';
$vehicule = new vehicule;
$vehicules =$vehicule ->readAllvehicule();
while($data = $vehicules->fetch()){
?>     
              <tr>
  <td><?=$data['vid']?></td>
              
<td>
<?=$data['status']?>
</td>
<td>
<?=$data['vehicle number']?>
</td>
<td>
<a href='edit_vehicule.php?id= <?= $data['vid']?>'class="btn btn-warning btn-lg btn-block">EDIT vehicule</a></td>
<td>

<a href='delete3.php?id= <?= $data['vid']?>'class="btn btn-danger btn-lg btn-block">DELETE vehicule</a></td>
</td>
</tr>
<?php
 }
?>
</tbody>
</table>
</body>
</html>