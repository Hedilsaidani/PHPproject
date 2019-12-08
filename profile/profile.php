<?php
session_start();
 $pro = $_SESSION['cid'];
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      <link rel="stylesheet" href="css/prof.css">
  </head>
  <body>
    <figure class="snip0056">
        <figcaption>
          <h2>HELLO <span>great Client</span></h2>
          <?php 
          include 'profclass/prof.class.php';

          $custumer = new profile;
          $cus = $custumer->affprofile($cid);
          $data = $cus->fetchAll();
          if($pro == $cid):
          foreach($data as $profdata):
            ?>
          <input type="hidden" value="<?= $profdata['cid'] ?>">
          <span>Name: <?= $profdata['name'] ?></span>
          <span>Email: <?= $profdata['email'] ?></span>
          <span>Phone: <?= $profdata['phone'] ?></span>
          <span>Adresse: <?= $profdata['adresse'] ?></span>
          <?php endforeach ?>
          <?php endif ?>
          <div class="icons"><a href="#"><i class="ion-ios-home"></i></a><a href="#"><i class="ion-ios-email"></i></a><a href="#"><i class="ion-ios-telephone"></i></a></div>
        </figcaption><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample8.jpg" alt="sample8" />
        <div class="position">FOOD ORDERING</div>
      </figure>
  </body>
  </html>
  