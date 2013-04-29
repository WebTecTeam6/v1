
function initialize() {

    var mapOptions = {
        center: new google.maps.LatLng(47.66, 9.16),
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("mapCanvas"),
        mapOptions);

    map.overlayMapTypes.push(new google.maps.ImageMapType({
        getTileUrl: function (coord, zoom) {
            return "http://tiles.openseamap.org/seamark/" + zoom + "/" + coord.x + "/" +
                coord.y + ".png";
        },
        tileSize: new google.maps.Size(256, 256),
        name: "OpenSeaMap",
        maxZoom: 18 }));

    map.overlayMapTypes.push(new google.maps.ImageMapType({
        getTileUrl: function (coord, zoom) {
            return "http://www.openportguide.org/tiles/actual/air_temperature/5/" + zoom +
                "/" + coord.x + "/" + coord.y + ".png";
        },
        tileSize: new google.maps.Size(256, 256),
        name: "OpenSeaMap",
        maxZoom: 18
    }));

    map.overlayMapTypes.push(new google.maps.ImageMapType({
        getTileUrl: function (coord, zoom) {
            return "http://www.openportguide.org/tiles/actual/wind_vector/5/" + zoom + "/" +
                coord.x + "/" + coord.y + ".png";
        },
        tileSize: new google.maps.Size(256, 256),
        name: "OpenSeaMap",
        maxZoom: 18
    }));
}

$(document).ready(function () {
        initialize()
    }
);