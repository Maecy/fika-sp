var render_map = function (lat, lng, tittle) {
    var mapCanvas = document.getElementById('map-canvas');
    var args = {
        zoom: 16,
        center: new google.maps.LatLng(lat, lng),
        mapTypeId: google.maps.mapTypeId.ROADMAP
    };
    var map = new google.maps.Map(mapCanvas, args);

    var marker = new google.maps.Marker({
        position: args.center,
        map: map,
        tittle: tittle
    });
    toggleMap();
}

var toggleMap = function () {
    if ($('body').hasClass('-show-map')) {
        mapHide();
    } else {
        mapShow();
    };
}

$('.map-trigger').on('click', function (event) {
    event.preventDefault();
    var lat = $(this).data('lat');
    var lng = $(this).data('lng');
    render_map(lat, lng);
});

$(function() {
    $('.phonecell').click(function () {
        var PhoneNumber = $(this).text();
        PhoneNumber = PhoneNumber.replace('Phone:', '');
        window.location.href = 'tel://' + PhoneNumber;
    });
});

function scrollWin() {
    window.scrollTo(400, 600);
}