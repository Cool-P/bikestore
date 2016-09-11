jQuery(document).ready(function($) {
    // instantiate slickz carousel

    $(".landing-firstlink").click(function(){
        $(".bike-module").hide();
        $(".landing").fadeOut(3000).remove();
        $(".bike-module").fadeIn(6000);
    });

    $(function () {

        function initMap() {

            var location = new google.maps.LatLng('45.495798, -73.619985');

            var mapCanvas = document.getElementById('map');
            var mapOptions = {
                center: location,
                zoom: 16,
                panControl: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions);

            var marker = new google.maps.Marker({
                position: location,
                map: map,
                animation:google.maps.Animation.DROP
            });

            var contentString = '<div class="info-window">' +
                '<a href="home">3543 Avenue Swail</a>' +
                '<div class="info-content">' +
                '3543 Swail Montreal QC H3T 1P5' +
                '</div>' +
                '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString,
                maxWidth: 400
            });

            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });


        }

        google.maps.event.addDomListener(window, 'load', initMap);

    });

});