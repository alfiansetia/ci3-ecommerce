<div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
      <div class="container">
         <a href="<?= base_url('home') ?>" class="brand">DAVIGMASTORE</a>
         <div id="main-menu" class="nav-collapse">
            <ul id="main-menu-left" class="nav">
               <li><a href="<?= base_url('home') ?>" title="beranda"><i class="icon-home icon-white"></i></a></li>
               <li id="preview-menu" class="dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle">products <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     <li><a href="./product_list.html">latest products</a></li>
                     <li><a href="./product_list.html">feature products</a></li>
                     <li><a href="./product_list.html">hot products</a></li>
                     <li class="divider"></li>
                     <li class="dropdown-submenu">
                        <a href="#">by categories</a>
                        <ul class="dropdown-menu">
                           <?php foreach ($category as $key => $data) { ?>
                              <li><a href="<?= base_url('home?category=' . $data->category_id) ?>"><?= $data->category_name ?></a></li>
                           <?php } ?>
                        </ul>
                     </li>
                     <li class="dropdown-submenu">
                        <a href="#">by brands</a>
                        <ul class="dropdown-menu">
                           <?php foreach ($brands as $key => $data) { ?>
                              <li><a href="<?= base_url('home?brand=' . $data->brand_id) ?>"><?= $data->brand_name ?></a></li>
                           <?php } ?>
                        </ul>
                     </li>
                  </ul>
               </li>
               <li><a href="<?= base_url('home/about') ?>">about us</a></li>
               <li><a href="<?= base_url('home/contact') ?>">contact</a></li>
               <li><a href="<?= base_url('home/faq') ?>">faq</a></li>
            </ul>
            <div class="pull-right">
               <a id="action-show-cart" class="btn btn-danger" href="#">
                  <i class="icon-shopping-cart icon-white"></i>
                  <span id="item-count"><?= count($this->cart->contents()) ?></span> item(s)
               </a>
               <a class="btn btn-primary" href="./login.html">Login</a>
               <a class="btn btn-success" href="./register.html">Register</a>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="container">
   <div id="myCarousel" class="carousel slide" style="margin-bottom:0">
      <div class="carousel-inner">
         <div class="item">
            <img src="<?= base_url('assets/main/img/banner/1.png') ?>" alt="">
         </div>
         <div class="item">
            <img src="<?= base_url('assets/main/img/banner/2.png') ?>" alt="">
         </div>
         <div class="item active">
            <img src="<?= base_url('assets/main/img/banner/3.jpeg') ?>" alt="">
         </div>
      </div>
      <!-- Carousel nav -->
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
   </div>
   <ul class="breadcrumb" style="margin-bottom:30px">
      <li><a href="<?= base_url('home') ?>">Home</a> <span class="divider">/</span></li>
      <li class="active">You are here</li>
   </ul>
   <div class="row">