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
                    <a class="nav-link" href="aboutme.html">About Me</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="portfolio.html">Portfolio</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="hometown.html">Hometown</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="myteam.html">My Team</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="textme.html">Text me</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="../tr/banayazin.html">TR</a>
                </li>
            </ul>
        </div>
    </nav>
    <title>Burak Yazan Personel Web Site</title>
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
            <span class="iletisim">Name Surname : </span> <span><?php echo "$_isim" ?></span><br>
            <span class="iletisim">Mail Address : </span> <span><?php echo "$_email" ?></span><br>
            <span class="iletisim">Phono NO: </span> <span><?php echo "$_telefon" ?></span><br>
            <span class="iletisim">Reason for Reaching : </span><span><?php echo "$_ulasim" ?></span><br>
            <span class="iletisim">Message : </span> <span><?php echo "$_mesaj" ?></span><br>
        </div>
    </div>

    <footer id="footer" class="fixed-bottom">
        <div class="banaulasin">
            <div class="container">
                <h1 class="footer-aciklama">
                    <p>Contact me :)</p>
                </h1>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/in/burakyazan/" class="linkedin"><i
                            class="fa fa-linkedin"></i></a>
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



</body>

</html>