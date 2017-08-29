
<?php
include_once "header.php";
include_once "menu.php";
if (isset($_GET['pagina']) && (!empty($_GET['pagina']))){
    $file = $_GET['pagina'].".php";

    if (file_exists($file)){
        include_once $file;
    }else{
        include_once "404.php";
    }

}else{
    include_once "slider.php";
    include_once "main.php";
}

?>




<div class="footer">
    <div class="container">
        <p>Copyright © 2017 Todos os direitos reservados | Design by <a href="#">Jarito Scofield & Paulo Serrano</a></p>
        <!--<div class="social">
            <a href="#"><i class="facebook"></i></a>
            <a href="#"><i class="twitter"></i></a>
            <a href="#"><i class="dribble"></i></a>
            <a href="#"><i class="google"></i></a>
            <a href="#"><i class="youtube"></i></a>
        </div>
        <div class="clearfix"></div>-->
    </div>
</div>
<!---->
</body>
</html>