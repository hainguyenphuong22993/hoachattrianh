<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Hai-dev">
  <title>Hóa Chất Trí Anh</title>
  <meta property="og:locale" content="vi_VN" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Trang chủ - Trí Anh" />
  <meta property="og:url" content="index.html" />
  <meta property="og:site_name" content="Trí Anh" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Trang chủ - Trí Anh" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/home.css" />
  <link rel="stylesheet" href="css/category.css" />
  <link rel="stylesheet" href="css/product.css" />
  <link rel="stylesheet" href="css/search.css" />
  <link rel="stylesheet" href="css/cart.css" />
  <link rel="stylesheet" href="css/introduce.css" />
  <link rel="stylesheet" href="css/news.css" />
  <link rel="stylesheet" href="css/contact.css" />
  <link rel="stylesheet" href="css/all.css" />
  <link rel="stylesheet" href="css/brands.css" />
  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/fontawesome.js"></script>
</head>

<body>
  <!-- Header -->
  <div id="header">
    <div class="container">
      <div class="row">
        <!-- logo -->
        <?php include_once("modules/logo/logo.php");?>
        <!-- hotline -->
        <?php include_once("modules/h_hotline/hotline.php");?>
        <!-- cart -->
        <?php include_once("modules/cart/notify.php");?>
        <div class="clear"></div>
      </div>
    </div>
    <nav id="menu">
      <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- menu -->
          <?php include_once("modules/category/menu.php");?>
          <!-- search -->
          <?php include_once("modules/search/search_form.php");?>
        </div>
      </nav>
    </nav>

  </div>
  <!-- End Header -->
  <!-- Slide -->
  
  <!-- End Slide -->

<!-- masterpage here -->
<?php
if(isset($_GET["page_layout"])){
  switch ($_GET["page_layout"]) {
    case 'category': include_once("modules/category/category.php"); break;
    case 'product': include_once("modules/product/product.php"); break;
    case 'introduce': include_once("modules/introduce/main-intro.php"); break;
    case 'news': include_once("modules/news/news.php");; break;
  }
}else{
  include_once("modules/slide/slide.php");
  include_once("modules/introduce/introduce.php");
  include_once("modules/product/product_home.php");
  include_once("modules/news/the_news.php");
  include_once("modules/partner/partner.php");
}
?>

  <?php include_once("modules/footer/footer_top.php");?>
  <?php include_once("modules/footer/footer_bot.php");?>
</body>

</html>