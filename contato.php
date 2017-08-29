<div class="contact">
    <div class="container">
        <h2>CONTATO</h3>
            <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBTdXJVECekehkK9cmFeb_wwMLyyjQwSkU'></script>
            <div style='overflow:hidden;height:300px;width:100%;'>
                <div id='gmap_canvas' style='height:300px;width:100%;'></div>

                <style>#gmap_canvas img {
                        max-width: none !important;
                        background: none !important
                    }</style>
            </div>
            <script type='text/javascript'>function init_map() {
                    var myOptions = {
                        zoom: 16,
                        center: new google.maps.LatLng(-1.513877, -48.7207449),
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                    marker = new google.maps.Marker({
                        map: map,
                        position: new google.maps.LatLng(-1.513877, -48.7207449)
                    });
                    infowindow = new google.maps.InfoWindow({content: '<strong>Morada : </strong><br>Rua Nova Jerusalém nº 17 - Sala A  - Itupanema <br> Barcarena (PA) CEP: 68.447 - 000 <br>'});
                    google.maps.event.addListener(marker, 'click', function () {
                        infowindow.open(map, marker);
                    });
                    infowindow.open(map, marker);
                }
                google.maps.event.addDomListener(window, 'load', init_map);</script>
            <br>
            <form id="contact" method="post">
                <div class="col-md-6 contact-left">
                    <input type="text" name="name" placeholder="Nome" required/>
                    <input type="text" name="email" placeholder="E-mail" required/>
                    <input type="text" name="phone" placeholder="Telefone" required/>
                </div>
                <div class="col-md-6 contact-right">
                    <textarea name="message" placeholder="Mensagem"></textarea>
                    <button type="submit" name="submit" id="submit">Enviar</button>
                </div>
                <div class="clearfix"></div>
            </form>
    </div>
</div>

