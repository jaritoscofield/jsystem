
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            manualControls: '#slider3-pager',
        });
    });
</script>
<div class="slider">
    <!-- Slideshow 3 -->
    <ul class="rslides" id="slider">
        <li><img src="images/slider/equipa-trabalhadores-empresa.jpg" alt="">
            <div class="caption">
                <h1>A NOSSA EQUIPA</h1>
                <h4 style="color: #fff">Equipa altamente profissional e competente.</h4>
            </div>
        </li>
        <li><img src="images/slider/obra-trabalhador.jpg" alt="">
            <div class="caption">
                <h1>EMPENHO E CAPACIDADE</h1>
                <h4 style="color: #fff">O nosso principal objetivo é a satisfação dos nossos clientes</h4>
            </div>
        </li>
        <li><img src="images/slider/trabalhadores.jpg" alt="">
            <div class="caption">
                <h1>QUALIDADE</h1>
                <h4 style="color: #fff">A nossa qualidade é reconhecida e garantida.</h4>
            </div>
        </li>
    </ul>
    <!-- Slideshow 3 Pager --></br></br>
    <ul id="slider3-pager">
        <li><a href="#"><img src="images/slider/equipa-trabalhadores-empresa-thumb.jpg" alt=""></a></li>
        <li><a href="#"><img src="images/slider/obra-trabalhador-thumb.jpg" alt=""></a></li>
        <li><a href="#"><img src="images/slider/trabalhadores-thumb.jpg" alt=""></a></li>
    </ul>
</div>