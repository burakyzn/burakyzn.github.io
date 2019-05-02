<!DOCTYPE html>
<html lang="en">
<head>
		<meta name="viewport" content="width=device-width , initial-scale=1">
    <link rel = "stylesheet" href="../css/boostrap/css/bootstrap.min.css">
	<link rel = "stylesheet" href="../css/boostrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700" rel="stylesheet">

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
		<span class="navbar-brand">Burak Yazan</span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		 <ul class="navbar-nav ml-auto">
			<li class="nav-item px-3">
			  <a class="nav-link" href="hakkimda.html">Hakkımda</a>
			</li>
			<li class="nav-item px-3">
				<a class="nav-link" href="ozgecmis.html">Özgeçmişim</a>
			</li>
			<li class="nav-item px-3">
				<a class="nav-link" href="sehrim.html">Şehrim</a>
			</li>
			<li class="nav-item px-3">
			  <a class="nav-link" href="banayazin.html">Bana Yazın</a>
			</li>
			<li class="nav-item px-3">
			  <a class="nav-link" href="../en/aboutme.html">EN</a>
			</li>
		  </ul>
		</div>
	  </nav>
    
    
	<title>Burak Yazan Kişisel Web Sitesi</title>
	
</head>
<body>
	
    <?php
        $_isim = $_POST['isim'];
        $_email = $_POST['email'];
        $_telefon = $_POST['telefon'];
        $_mesaj = $_POST['mesah'];

        echo('<br>');
        echo "İsim : $_isim "; 
        echo('<br>');
        echo "Email : $_email ";
        echo('<br>');
        echo "Telefon : $_telefon ";
        echo('<br>');
        echo "Mesaj : $_mesaj ";
        echo('<br>');    ?>


	<footer id="footer" class="fixed-bottom">
			<div class="banaulasin">
				<div class="container">
					<h1 class="footer-aciklama"><p>Bana Ulaşın :)</p></h1>
						<div class="social-icons">
							<a href="https://www.linkedin.com/in/burakyazan/" class="linkedin"><i class="fa fa-linkedin"></i></a>
							<a href="https://github.com/burakyzn" class="github"><i class="fa fa-github"></i></a>
							<a href="https://www.instagram.com/brkyazan/" class="instagram"><i class="fa fa-instagram"></i></a>
							<a href="https://www.facebook.com/brkyazan" class="facebook"><i class="fa fa-facebook"></i></a>
						</div>
					</div>
				</div>
		</footer> 
	   

    

    <!--JS DOSYALARI-->
    <script type = "text/javascript" src="../js/jquery-3.3.1.js"></script>
    <script type = "text/javascript" src="../js/boostrap/js/bootstrap.js"></script>

   
    
</body>
</html>