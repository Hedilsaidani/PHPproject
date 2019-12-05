<?php
session_start();
$cid = $_SESSION['cid'];
$name = $_SESSION['name'];
$name = $_SESSION['name'] ?? 'Guest';
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
    <link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/icomoon.css">






</head>
<body>
    <nav class="uk-navbar-container uk-margin" uk-navbar>

<div class="uk-navbar-left">
<a class="uk-navbar-toggle" uk-toggle="target: #offcanvas-nav" href="#">
            <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
        </a>
        <span class="text-primary">Hello <?php echo htmlspecialchars($name); ?></span>
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
<span>&nbsp; $0.00</span>
    
</div>

    <div class="uk-navbar-right">
         <button class="uk-margin-left" ><i class="ti-user"></i></button>
    <div uk-dropdown="mode: click">
    <ul class="uk-nav uk-dropdown-nav">
        <li><a href="classes/logout.class.php"><span class="ti-user">&nbsp;</span>Log Out</a></li>
        <li><a href="#"><span class="ti-settings">&nbsp;</span>profile</a></li>
    </ul>
    </div>
</div>

    </div>
</nav>
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
  
  include_once './classes/produit.class.php';

  $cart = new produit;
  $ct = $cart->affcart();
  ?>
    <div id="offcanvas-usage" uk-offcanvas="flip: true;" >
   <div class="uk-offcanvas-bar">
       <button class="uk-offcanvas-close" type="button" uk-close></button>
       <input type="submit" class="btn btn-outline-primary btn-sm btn-lg btn-block" value="Checkout">
       <hr>  
  <?php
while($data = $ct->fetch()){
    if($_SESSION['cid'] == $data['cid']){
   echo'
   <div class="uk-margin">
   <legend>'.$data['name'].'</legend>
   <input type="hidden" name="cid" value="'.$_SESSION['cid'].'" />
   <p>option:'.$data['opt'].'</p>
   <p>'.$data['description'].'</p>
   <p>Quantite:'.$data['qty'].'</p>
   <p>$'.$data['price'].'</p>
   <input type="reset" class="btn btn-outline-danger" value="Remove">
   <hr>
   </div>
 ';
    }
}
 ?>
   </div>
   </div>
<!-- card end -->

  <?php
include_once './classes/produit.class.php';

$prod = new produit;
$req = $prod->affprod();
?>


<div class="uk-width-1-2">
<!--<div class="uk-float-right">-->
<div class="uk-margin">			
<?php
foreach($req as $row)
{echo'
   <form method="post" action="./cartaad.php">
         <input type="hidden" name="pid" value="'.$row['pid'].'" />
         <input type="hidden" name="cid" value="'.$_SESSION['cid'].'" />
             <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid id="cd">
               <div class="uk-card-media-left uk-cover-container">
                 <img src="./img/'.$row['file'].'" alt="" uk-cover>
                     <canvas width="200" height="100"></canvas>
               </div>
             <div>
         <div class="uk-card-body">
              <h3 class="uk-card-title">'.$row['name'].'</h3>
                 <p>'.$row['description'].'</p>
                  <h6>price :$'.$row['price'].'</h6>
                   <span class="uk-button uk-button-default" href="#modal-overflow" uk-toggle>Order Now</span>
                      <input type="submit" id="br" hidden />
                       <input value="'.$row['price'].'" type="hidden" name="price" />
                      <input value="" id="qt" type="hidden" name="qt" />
                     <input value="" id="px" type="hidden" name="px" />
                <input value="" type="hidden" id="ne" name="ne" />
                </div>
             </div>
         </div>
    </div>
   </form>
';
}
?>
</div>
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
            <label><input name="op"  id="op" class="uk-checkbox" type="checkbox" value="Cheddar Cheese">&nbsp;Cheddar Cheese &nbsp; +$1.5</label>
        </div>
        <hr>
        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input name="op" id="op" class="uk-checkbox" type="checkbox" value="Extra Cheese">&nbsp;Extra Cheese &nbsp; +$0.65</label>
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
    qt = document.getElementById('qty').value;
    var items=document.getElementsByName('op');
    var selectedItems="";
    prix = 0;
    px = 0; 
    for(var i=0; i<items.length; i++){
        if(items[i].type=='checkbox' && items[i].checked==true){
            selectedItems+=items[i].value+" + ";
            if(items[i].value == 'Bacon') { px = 1.0;}
            if(items[i].value == 'Cheddar Cheese') { px = 1.5 ;}
            if(items[i].value == 'Extra Cheese') { px = 0.65; }
            if(items[i].value == 'Grilled Onions') { px = 0.5;}
            prix = prix + px;
        }
    }

    document.getElementById('px').value = px;
    document.getElementById('qt').value = qt;
    document.getElementById('ne').value = selectedItems;
    document.getElementById('br').click();
}
</script>
    </div>
</div>

<script src="uikit/js/uikit-icons.js"></script>
<script src="uikit/js/uikit-icons.min.js"></script>
<script src="uikit/js/uikit.min.js"></script>  
<script src="js/bootstrap.min.js"></script>
</body>
</html>