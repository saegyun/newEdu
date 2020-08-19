<?php
function print_title(){
  if(isset($_GET['id'])){
    echo $_GET['id'];
  } else {
  }
}
function print_description(){
  if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
  } else {
  }
}
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Education</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body><button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button>
	  <header id="header" class="header-scrolled">
		  <div class="header-top">
			  <div class="container">
				  <div class="row">
					  <div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
						  <a href="tel:010 6754 9333"><span class="lnr lnr-phone-handset"></span> <span class="text">010 6754 9333</span></a>
						  <a href="mailto:10133jhg@gmail.com"><span class="lnr lnr-envelope"></span> <span class="text">10133jhg@gmail.com</span></a>
					  </div>
				  </div>
			  </div>
		</div>
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
			  <div id="logo">
				<a href="index.html"><img src="img/logo.png" alt="" title=""></a>
			  </div>
			  <nav id="nav-menu-container">
				<ul class="nav-menu sf-js-enabled sf-arrows" style="touch-action: pan-y;">
				  <li><a href="index.html">Home</a></li>
				  <li><a href="about.html">내 클래스</a></li>
				  <li class="menu-has-children"><a href="school-search.html" class="sf-with-ul">Search</a>
					<ul style="display: none;">
					  <li><a href="school-search.html">학교 찾기</a></li>
					  <li><a href="class-search.html">강의 찾기</a></li>
					</ul>
				  </li>
				</ul>
			  </nav><!-- #nav-menu-container -->
			</div>
		</div>
  </header>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <h2>
    <?php
    print_title();
    ?>
  </h2>
  <h3>
  <?php
  print_description();
   ?>
 </h3>
   <?php if(isset($_GET['id'])) { ?>
      <form action="update.php?id=<?=$_GET['id']?>" method="post">
      <input type="submit" value="글 수정">
    </form>
      <form action="delete_process.php" method="post">
      <input type="hidden" name="id" value="<?=$_GET['id']?>">
      <input type="submit" value="글 삭제">
    </form>
    <?php } ?>
 </body>
 </html>
