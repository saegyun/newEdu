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
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
	  <header id="header" id="home">
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
				<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
			  </div>
			  <nav id="nav-menu-container">
				<ul class="nav-menu">
				  <li><a href="index.html">Home</a></li>
				  <li><a href="about.html">내 클래스</a></li>
				  <li class="menu-has-children"><a href="school-search.html">Search</a>
					<ul>
					  <li><a href="school-search.html">학교 찾기</a></li>
					  <li><a href="class-search.html">강의 찾기</a></li>
					</ul>
				  </li>
				</ul>
			  </nav><!-- #nav-menu-container -->
			</div>
		</div>
	  </header><!-- #header -->

<form action="update_process.php" method="post">
  <br>
  <br>
  <br>
  <br>
    <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
  <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
        <tr>
        <td height=20 align= center bgcolor=#ccc><font color=white> 글쓰기</font></td>
        </tr>
        <tr>
        <td bgcolor=white>
        <table class = "table2">
               <tr>
                <td>제목</td>
                <td><input type = text name = title size=60 value="<?php print_title();?>"></td>
                </tr>
                <tr>
                <td>내용</td>
                <td><textarea name = description cols=85 rows=15><?php print_description(); ?></textarea></td>
                </tr>
              </table>
                <center>
                <input type = "submit" value="작성">
                </center>
        </td>
        </tr>
</table>
</form>
</body>
</html>
