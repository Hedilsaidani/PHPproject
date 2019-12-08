<?php
session_start();
$cid = $_SESSION['cid'];
$name = $_SESSION['name'];
$name = $_SESSION['name'] ?? 'Guest';
include_once './classes/produit.class.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="uikit/css/uikit.min.css">
    <link rel="stylesheet" href="cards.css">
    <link rel="stylesheet" href="login/vendor/Magnific-Popup/magnific-popup.css">
    <link rel="stylesheet" href="login/vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="css/pro.css">
    <link rel="stylesheet" href="cards.css">
    <link rel="stylesheet" href="css/icomoon.css">






</head>
<body>

<div style="z-index: 980;" uk-sticky="bottom: #offset" >

    <nav class="uk-navbar-container uk-margin" id="fix" uk-navbar>

<div class="uk-navbar-left">
<a class="uk-navbar-toggle" uk-toggle="target: #offcanvas-nav" href="#">
            <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
        </a>
        <span class="text-primary">welcome <?php echo htmlspecialchars($name); ?></span>
</div>
    <div class="uk-navbar-center">
        <a class="uk-navbar-item uk-logo" href="#"></a>
    </div>
    <div class="uk-navbar-right">
        <div>
            <a class="uk-navbar-toggle" href="#" uk-search-icon></a>
            <div class="uk-navbar-dropdown" uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !nav">
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <form class="uk-search uk-search-navbar uk-width-1-1">
                            <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                        </form>
                    </div>
                    <div class="uk-width-auto">
                        <a class="uk-navbar-dropdown-close" href="#" uk-close></a>
                    </div>
                </div>

            </div>
        </div>

<div class="uk-navbar-right">
<a href="#"><i class="ti-shopping-cart-full" uk-toggle="target: #offcanvas-usage"></i></a><br>
<span>&nbsp;
 <?php 

 $som = new produit;
 $dateof = date("Y-m-d");
 $somm = $som->totcart($cid,$dateof);
 while($data = $somm->fetch()){
echo $data['totale'].'$';

 }
?></span>
    
</div>

    <div class="uk-navbar-right">
         <button class="uk-margin-left" ><i class="ti-user"></i></button>
    <div uk-dropdown="mode: click">
    <ul class="uk-nav uk-dropdown-nav">
        <li><a href="classes/logout.class.php"><span class="ti-user">&nbsp;</span>Log Out</a></li>
        <li><a href="profile/profile.php"><span class="ti-settings">&nbsp;</span>profile</a></li>
    </ul>
    </div>
</div>

    </div>
</nav>
</div>
<!-- SIDE NAV BAGIN -->
<div id="offcanvas-nav" uk-offcanvas="overlay: true"> 
    <div class="uk-offcanvas-bar">

        <ul class="uk-nav uk-nav-primary ">
            <li class="uk-active"><a href="#">Food Ordering</a></li>
            <li class="uk-nav-header">Discover</li>
            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: home"></span>Home</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span>Help</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span>Deliver With us</a></li>
        </ul>

    </div>
    
</div>
     <?php if (isset($_GET['notif'])): ?>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <?php
                    if ($_GET['notif'] == 'login') echo ' Hello '.$name.' did you whant to order sumthing ? ';
                    if ($_GET['notif'] == 'delete') echo ' order is Removed :(';
                    if ($_GET['notif'] == 'cart') echo ' order is Added in cart';
                    if ($_GET['notif'] == 'ord') echo 'Just a minute your orders is on the root (^_^) !';
                ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
            </div>
        <?php endif ?>
<!-- and side nav -->
<section>
    <div class="hero-wrapper">
      <div class="hero-left">
        <h1 class="hero-title">Food Menu</h1>
        <p>From  set together our divided own saw divided the form god <br> seas moveth you will fifth under replenish end</p>
        <ul class="hero-info d-none d-lg-block">
          <li>
            <img src="images/fas-service-icon.png" alt="">
            <h4>Fast Service</h4>
          </li>
          <li>
            <img src="images/fresh-food-icon.png" alt="">
            <h4>Fresh Food</h4>
          </li>
          <li>
            <img src="images/support-icon.png" alt="">
            <h4>24/7 Support</h4>
          </li>
        </ul>
      </div>
      <div class="hero-right">
        <div class="owl-carousel owl-theme w-100 hero-carousel">
          <div class="hero-carousel-item">
            <img class="img-fluid" src="img/banner/hero-banner-sm.png" alt="">
          </div>
        </div>
      </div>
      <ul class="social-icons d-none d-lg-block">
        <li><a href="#"><i class="ti-facebook"></i></a></li>
        <li><a href="#"><i class="ti-twitter"></i></a></li>
        <li><a href="#"><i class="ti-instagram"></i></a></li>
      </ul>
    </div>
  </section>
  <section>
 <!-- <div class="uk-position-right uk-flex uk-flex-middle uk-width-1-3">
  
  <div class=" uk-grid-smal uk-text-center" uk-grid>
   <span>
    
    </span>

    <div>
        <div  class="uk-card "><a href=""><img width="60" height="60" src="images/menu/burger.png" alt=""></a><p>Burgers</p></div>
    </div>
    <div>
    <div  class="uk-card "><a href=""><img width="60" height="60" src="images/menu/taco.png" alt=""></a><p>Lebanais</p></div>
    </div>
    <div>
    <div  class="uk-card"><a href=""><img width="60" height="60" src="images/menu/diet.png" alt=""></a><p>healthy food</p></div>
    </div>
    <div>
    <div  class="uk-card"><a href=""><img width="60" height="60" src="images/menu/pizza.png" alt=""></a><p>Pizza</p></div>
    </div>
    <div>
    <div  class="uk-card"><a href=""><img width="60" height="60" src="images/menu/turkey.png" alt=""></a><p>Chiken</p></div>
    </div>
    <div>
    <div  class="uk-card"><a href=""><img width="60" height="60" src="images/menu/fast-food.png" alt=""></a><p>Fast Food</p></div>
    </div>
    <div>
    <div  class="uk-card"><a href=""><img width="60" height="60" src="images/menu/sandwich.png" alt=""></a><p>Sandwich</p></div>
    </div>
    <div>
    <div  class="uk-card"><a href=""><img width="60" height="60" src="images/menu/breakfast.png" alt=""></a><p>BreakFast</p></div>
    </div>
  <!--  <div>
    <div  class="uk-card"><a href=""><img width="60" height="60" src="images/menu/loading.gif" alt=""></a><p>Desserts</p></div>
    </div>
</div>
</div>-->



   <!--card begin -->

  
   <?php 
  $cart = new produit;
  $ct = $cart->affcart();
  ?>
  
    <div id="offcanvas-usage" uk-offcanvas="flip: true;" >
   <div class="uk-offcanvas-bar">
       <button class="uk-offcanvas-close" type="button" uk-close></button>
     <!--    <?php/*
       $cart1 = new produit;
       $ct1 = $cart1->affcart1();
       while($data1 = $ct1->fetch()){
        echo '<legend>'.$data1['name'].'</legend>';
        echo '<p>'.$data1['description'].'</p>';
       }*/
       ?>-->
       <hr>  
  <?php
while($data = $ct->fetch()){
    if($_SESSION['cid'] == $data['cid']){
        ?>
   <div class="uk-margin">
     
         <form action="addordre.php" method="POST">
                 
                <input type="hidden" name="cid" value="<?= $_SESSION['cid'] ?>" />
                    <input type="hidden" name="pid" value="<?= $data['pid'] ?>" />
                      <p>option:<?= $data['opt'] ?></p>
                      <input type="hidden" name="opt" value="<?= $data['opt'] ?>" />
                   <p>Quantite:<?= $data['qty'] ?></p>
                   <input type="hidden" name="qty" value="<?= $data['qty'] ?>" />
                <p>$<?= $data['price'] ?></p>
                <input type="hidden" name="price" value="<?= $data['price'] ?>" />
             <a class="btn btn-outline-danger" href="deletcart.php?id=<?=$data['id'] ?>" >Remove</a>
         <hr>
         <input type="submit" class="btn btn-outline-primary btn-sm btn-lg btn-block" value="Checkout">
        </form>
   </div>
   <?php } }?>
   </div>
   </div>

<!-- card end -->
<div class="uk-width-1-2">
  <?php


$prod = new produit;
$req = $prod->affprod();
?>



<!--<div class="uk-float-right">-->
	
<?php
while($data = $req->fetch())
{echo'
    <div class="uk-margin">		
   <form method="post" action="./cartaad.php" id="f'.$data['pid'].'">
         <input type="hidden" name="pid" value="'.$data['pid'].'" />
         '.$data['pid'].'
         <input type="hidden" name="cid" value="'.$_SESSION['cid'].'" />
             <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid id="cd">
               <div class="uk-card-media-left uk-cover-container">
                 <img src="./img/'.$data['file'].'" alt="" uk-cover>
                     <canvas width="200" height="100"></canvas>
               </div>
             <div>
         <div class="uk-card-body">
              <h3 class="uk-card-title">'.$data['name'].'</h3>
                 <p>'.$data['description'].'</p>
                  <h6>price :$'.$data['price'].'</h6>
         <input type="hidden" name="pid" value="'.$data['pid'].'" />
                   <span class="uk-button uk-button-default" href="#modal-overflow" uk-toggle onclick="test('.$data['pid'].')">Order Now</span>
                      <input type="submit" id="br'.$data['pid'].'" hidden />
                       <input value="'.$data['price'].'" type="hidden" name="price" />
                      <input value="" id="qt'.$data['pid'].'" type="hidden" name="qt" />
                     <input value="" id="px'.$data['pid'].'" type="hidden" name="px" />
                <input value="" type="hidden" id="ne'.$data['pid'].'" name="ne" />
                </div>
             </div>
         </div>
    </div>
   </form>
';
}
?>
</div>


<div id="modal-overflow" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>
    
        <div class="uk-modal-header">
            <h2 class="uk-modal-title"><?php
           ?>
             </h2>
        </div>

        <div class="uk-modal-body" uk-overflow-auto>
            Add Extras   
        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input name="op" id="op" class="uk-checkbox" type="checkbox" value="Bacon">&nbsp;Bacon &nbsp; +$1.00</label>
        </div>
        <hr>
        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input name="op"  id="op" class="uk-checkbox" type="checkbox" value="Cheddar Cheese">&nbsp;Cheddar Cheese &nbsp; +$2</label>
        </div>
        <hr>
        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input name="op" id="op" class="uk-checkbox" type="checkbox" value="Extra Cheese">&nbsp;Extra Cheese &nbsp; +$3</label>
        </div>
        <hr>
        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input name="op" id="op" class="uk-checkbox" type="checkbox" value="Grilled Onions">&nbsp;Grilled Onions &nbsp; +$0.50</label>
        </div>
        <hr>
        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
        <legend>Quantite</legend>
        <label><input name="qty" id="qty" class="uk-input" type="number"></label>
        </div>
        <hr>
        </div>

        <div class="uk-modal-footer uk-text-right">
            <button  class="uk-button uk-button-default uk-modal-close" type="button">Cencel</button>
            <button onclick="cart()" class="uk-button uk-button-primary" value="Add To cart">Add To cart</button>
        </div>
        <script>
function cart(){
    let m = document.getElementById('modal-overflow');
    let p = m.querySelectorAll("input")[m.querySelectorAll("input").length-1];
    qt = document.getElementById('qty').value;
    var items=document.getElementsByName('op');
    var selectedItems="";
    prix = 0;
    px = 0; 
    for(var i=0; i<items.length; i++){
        if(items[i].type=='checkbox' && items[i].checked==true){
            selectedItems+=items[i].value+" + ";
            if(items[i].value == 'Bacon') { px = 1.0;}
            if(items[i].value == 'Cheddar Cheese') { px = 2.0 ;}
            if(items[i].value == 'Extra Cheese') { px =  3.0; }
            if(items[i].value == 'Grilled Onions') { px = 0.5;}
            prix = prix + px;
        }
    }

    document.getElementById('px'+p.value).value = px;
    document.getElementById('qt'+p.value).value = qt;
    document.getElementById('ne'+p.value).value = selectedItems;
    document.getElementById('br'+p.value).click();
}
function test(pid){
   let modal = document.querySelector("#modal-overflow");
   let h = document.createElement("input")
   h.type = "hidden";
   h.name = "pid";
   h.value = pid;
   h.id = "pid";
   modal.appendChild(h)
}
</script>
    </div>
</div>




<!-- footer -->


<footer class="ftco-footer ftco-bg-info ftco-section" id="back">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Food ordering</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Open Hours</h2>
              <ul class="list-unstyled open-hours">
                <li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Sunday</span><span> 9:00 - 02:00</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Instagram</h2>
              <div class="thumb d-sm-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
	            	</a>
	            </div>
	            <div class="thumb d-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
	            	</a>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Newsletter</h2>
            	<p>Far far away, any where you are, we came for you.</p>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter delivery Address ">
                  <input type="submit" value="Find Restaurents" class="btn btn-primary btn-lg btn-block px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart" aria-hidden="true"></i>Chehir Ben Slim</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
  


<!-- end footer -->




<script src="uikit/js/uikit-icons.js"></script>
<script src="uikit/js/uikit-icons.min.js"></script>
<script src="uikit/js/uikit.min.js"></script>  
<script src="js/bootstrap.min.js"></script>
</body>
</html>