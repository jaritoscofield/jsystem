<div class="header">
    <div class="container">
        <div class="logo">
            <a href="index.php"><img src="images/logo-sermonti.png" alt="Logotipo da empresa sermonti" title="logotipo"/></a>
        </div>
        <div class="top-menu">
            <span class="menu"></span>
            <ul>
                <li><a class="active" href="pagina-inicial">Home</a></li>
                <li><a href="empresa">A Empresa</a></li>
                <li><a href="obras">Obras Realizadas</a></li>
                <li><a href="servicos">Serviços</a></li>
                <li><a href="contato">Contato</a></li>
            </ul>
        </div>
        <!-- script-for-menu -->
        <script>
            $("span.menu").click(function () {
                $(".top-menu ul").slideToggle("slow", function () {
                });
            });
        </script>
        <!-- script-for-menu -->
        <div class="clearfix"></div>
    </div>
</div>
<!---->