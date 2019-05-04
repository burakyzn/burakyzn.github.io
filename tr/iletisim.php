<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width , initial-scale=1">
  <link rel="stylesheet" href="../css/boostrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/boostrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700" rel="stylesheet">

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <span class="navbar-brand">Burak Yazan</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link" href="takimim.html">Takımım</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="banayazin.html">Bana Yazın</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="../en/textme.html">EN</a>
        </li>
      </ul>
    </div>
  </nav>
  <title>Burak Yazan Kişisel Web Sitesi</title>
</head>
<body>

  <?php
        $_isim = $_REQUEST['isim'];
        $_email = $_REQUEST['email'];;
        $_telefon = $_REQUEST['telefon'];
        $_mesaj = $_REQUEST['mesaj']; 
        $_ulasim = $_REQUEST['ulasim']?>

  <div class="mt-4" style="color:white">-</div>
    <div class="container mt-5">
      <div class="jumbotron mt-5">
        <span class="iletisim">Gönderen İsim Soyisim : </span> <span><?php echo "$_isim" ?></span><br>
        <span class="iletisim">Gönderen Mail Adresi : </span> <span><?php echo "$_email" ?></span><br>
        <span class="iletisim">Gönderen Telefon No : </span> <span><?php echo "$_telefon" ?></span><br>
        <span class="iletisim">Gönderen Ulaşım Tercihi : </span> <span><?php echo "$_ulasim" ?></span><br>
        <span class="iletisim">Gönderen Mesaj : </span> <span><?php echo "$_mesaj" ?></span>
      </div>
  </div>

  <footer id="footer" class="fixed-bottom">
    <div class="banaulasin">
      <div class="container">
        <h1 class="footer-aciklama">
          <p>Bana Ulaşın :)</p>
        </h1>
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
  <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="../js/boostrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/form.js"></script>

</body>

</html>