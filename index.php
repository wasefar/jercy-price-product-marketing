<!doctype html>
<html class="no-js" lang="">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>jercy</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="manifest" href="site.webmanifest">
      <link rel="shortcut icon" type="image/x-icon" href="image/logo.jpg">
      <!-- Place favicon.ico in the root directory -->
      <!-- all css here -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/fontawesome-all.min.css">
      <link rel="stylesheet" href="css/default.css">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
      <!-- Add your site or application content here -->
      <header class="top-header bg-shade">
         <div class="container-box">
            <div class="logo-text-area">
               <img class="logo" src="image/logo.png">
               <span class="text-logo">Product Planears</span>
            </div>
            <div class="menu-login-area">
               <ul>
                  <li><a href="#">Home</a></li>
                  <li><span> | </span></li>
                  <li><a href="#">Logged in As:</a></li>
               </ul>
            </div>
         </div>
      </header>
      <section class="main-area">
         <div class="container-box">
            <div class="main-contant-item-width">
               <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link item-tabs active" id="home-tab" data-toggle="tab" href="#ladada" role="tab" aria-controls="home" aria-selected="true">Ladada</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link item-tabs" id="profile-tab" data-toggle="tab" href="#Shopee" role="tab" aria-controls="profile" aria-selected="false">Shopee</a>
                  </li>
               </ul>
               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="ladada" role="tabpanel" aria-labelledby="home-tab">
                     <div class="main-contant-dropdown">
                        <div class="row">
                           <div class="col-md-7">
                              <!-- Example split danger button -->
                              <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroup">ALL</label>
                                 </div>
                                 <select class="custom-select item-bdr" id="inputGroup">
                                    <option selected>Jerseys</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <select class="form-control item-bdr all">
                                 <option>United States / English</option>
                                 <option>Default select</option>
                                 <option>Default select</option>
                                 <option>Default select</option>
                                 <option>Default select</option>
                              </select>
                              <button type="button" class="btn btn-danger icon"><i class="fa fa-search" aria-hidden="true"></i></button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="Shopee" role="tabpanel" aria-labelledby="profile-tab">...</div>
               </div>
               <div class="simple-text-heading-tittle">
                  <h3>Jerseys Price List in the Malaysia November 2019</h3>
                  <nav aria-label="breadcrumb ">
                     <ol class="breadcrumb bg">
                        <li class="breadcrumb-item clr"><a href="#">Home</a></li>
                        <li class="breadcrumb-item clr active" aria-current="page">Search result :"jerseys"</li>
                     </ol>
                  </nav>
               </div>
               <div class="tabs-area tabs">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link bg-gray active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sort by views</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link bg-gray" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Sort by Price</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link bg-gray" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Sort by ratting</a>
                     </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <?php for($i = 0; $i <= 10; $i++){?>
                        <div class="my-item-item-jerseys">
                           <div class="item-images">
                              <img src="image/pro1.jpg">
                           </div>
                           <div class="sc-product-list">
                              <div class="single-product-name-text">
                                 <h4>[Free Shipping + Flash Deal] Spring <br>  Summer Sports Soccer Football <br>Basketball..
                                 </h4>
                                 <span>Mans's Fashion</span>
                                 <p class="product-code">Material: Polyester, size:KID Size,KIDS Size:Lenghtxwide-50 <br>x/34cm 19.65*13 inch(Under 1.3m),ideal fo...</p>
                                 <p class="sold">Sold by Lazada</p>
                              </div>
                              <div class="product-code-and-details">
                                 <ul class="product-code">
                                    <li><span>P155</span></li>
                                    <li><button type="button" class="btn btn-primary bg-details">Check Details</button></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <?php }?>
                     </div>
                     <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <?php for($i = 0; $i <= 2; $i++){?>
                        <div class="my-item-item-jerseys">
                           <div class="item-images">
                              <img src="image/pro2.jpg">
                           </div>
                           <div class="sc-product-list">
                              <div class="single-product-name-text">
                                 <h4>[Free Shipping + Flash Deal] Spring <br>  Summer Sports Soccer Football <br>Basketball..
                                 </h4>
                                 <span>Mans's Fashion</span>
                                 <p class="product-code">Material: Polyester, size:KID Size,KIDS Size:Lenghtxwide-50 <br>x/34cm 19.65*13 inch(Under 1.3m),ideal fo...</p>
                                 <p class="sold">Sold by Lazada</p>
                              </div>
                              <div class="product-code-and-details">
                                 <ul class="product-code">
                                    <li><span>P155</span></li>
                                    <li><button type="button" class="btn btn-primary bg-details">Check Details</button></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <?php }?>
                     </div>
                     <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <?php for($i = 0; $i <= 1; $i++){?>
                        <div class="my-item-item-jerseys">
                           <div class="item-images">
                              <img src="image/pro3.jpg">
                           </div>
                           <div class="sc-product-list">
                              <div class="single-product-name-text">
                                 <h4>[Free Shipping + Flash Deal] Spring <br>  Summer Sports Soccer Football <br>Basketball..
                                 </h4>
                                 <span>Mans's Fashion</span>
                                 <p class="product-code">Material: Polyester, size:KID Size,KIDS Size:Lenghtxwide-50 <br>x/34cm 19.65*13 inch(Under 1.3m),ideal fo...</p>
                                 <p class="sold">Sold by Lazada</p>
                              </div>
                              <div class="product-code-and-details">
                                 <ul class="product-code">
                                    <li><span>P155</span></li>
                                    <li><button type="button" class="btn btn-primary bg-details">Check Details</button></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <?php }?>
                     </div>
                  </div>
               </div>
               <div class="page-next-item-sc">
                  <div class="tittle-page">
                     pages 1 of 3
                  </div>
                  <div class="text-center">
                     <ul>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="next"><a href="#">Next</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="footer-sc-area">
         <div class="container-box">
            <div class="row">
               <div class="col-md-7">
                  <div class="left-side-area">
                     <div class="copyright-area-sc">
                        @20119 ALL rights reserved.
                     </div>
                     <div class="logo-text-area">
                        <img class="logo" src="image/logo.png">
                        <span class="text-logo">Product Planears</span>
                     </div>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="socil-media-sc">
                     <a href="#"><i class="fab fa-twitter"></i></a>
                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                     <a href="#"><i class="fab fa-youtube"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- all js here -->
      <script src="js/vendor/modernizr-3.5.0.min.js"></script>
      <script src="js/vendor/jquery-3.2.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/plugins.js"></script>
      <script src="js/main.js"></script>
   </body>
</html>