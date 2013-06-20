//mainmap
var mainMap = new google.maps.ImageMapType({
    getTileUrl: function (coord, zoom) {
        return "http://tiles.openseamap.org/seamark/" + zoom + "/" + coord.x + "/" +
            coord.y + ".png";
    },
    tileSize: new google.maps.Size(256, 256),
    name: "OpenSeaMap",
    maxZoom: 18 });

//windmap
var tempMap = new google.maps.ImageMapType({
    getTileUrl: function (coord, zoom) {
        return "http://www.openportguide.org/tiles/actual/air_temperature/5/" + zoom +
            "/" + coord.x + "/" + coord.y + ".png";
    },
    tileSize: new google.maps.Size(256, 256),
    name: "TempMap",
    maxZoom: 18
});

//tempMap
var windMap = new google.maps.ImageMapType({
    getTileUrl: function (coord, zoom) {
        return "http://www.openportguide.org/tiles/actual/wind_vector/5/" + zoom + "/" +
            coord.x + "/" + coord.y + ".png";
    },
    tileSize: new google.maps.Size(256, 256),
    name: "Windmap",
    maxZoom: 18
});
//----------------------------------------------------------

var toggleFullscreen = false;
var poly;
var wayPoints = new Array();
var distance = parseFloat(0.00);

function getDistance(path) {

    if (path.getLength() >= 2) {
        var temp2 =  (google.maps.geometry.spherical.computeDistanceBetween(wayPoints[wayPoints.length -2], wayPoints[wayPoints.length -1]) / 1000).toFixed(2);
        var temp =   distance + parseFloat(temp2);
         distance = temp;
        $('#distance').val(distance.toFixed(2) + " km");
    }
}

function addLatLng(event) {

    var path = poly.getPath();

    // Because path is an MVCArray, we can simply append a new coordinate
    // and it will automatically appear
    path.push(event.latLng);
    // Add a new marker at the new plotted point on the polyline.
    var marker = new google.maps.Marker({
        position: event.latLng,
        title: '#' + path.getLength(),
        map: map,
        draggable: true
    });

    wayPoints.push(marker.position);
    getDistance(path);
}

function toggleFullScreen(check) {
    options = {
        position: 'fixed',
        width: '100%',
        height: '100%',
        left: '-31px',
        top: '81px'
    }

    if (check == true) {
        $('#seaMap').css(options);
        $('#appFoms').hide();
        $('#Weather-Information').hide();
    } else {
        $('#appFoms').show();
        $('#Weather-Information').show();
        $('#seaMap').removeAttr('style');
    }
}

function initialize() {
//----------------------------------------------------------Overlays
    // set different map types
    var mapTypeIds = ["roadmap", "satellite", "OSM"];

    mapOptions = {
        center: new google.maps.LatLng(47.66, 9.16),
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControlOptions: {
            mapTypeIds: mapTypeIds
        },
        disableDefaultUI: true,
        mapTypeControl: true,
        draggableCursor: 'crosshair'
    };

    map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);

    map.overlayMapTypes.push(null);	// Placeholder for Sites Overlay
    map.overlayMapTypes.push(null);	// Placeholder for OSM TOP + Sites
    map.overlayMapTypes.push(null);

//-----------------------------------------------------------openstreetmap
    map.mapTypes.set("OSM", new google.maps.ImageMapType({
        getTileUrl: function (coord, zoom) {
            return "http://tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
        },
        tileSize: new google.maps.Size(256, 256),
        name: "OpenStreetMap",
        maxZoom: 18
    }));

//-------------------------------------------------------setMapOverlays
    map.overlayMapTypes.setAt(0, mainMap);
    map.overlayMapTypes.setAt(1, windMap);
    map.overlayMapTypes.setAt(2, tempMap);


    var polyOptions = {
        strokeColor: '#000000',
        strokeOpacity: 1.0,
        strokeWeight: 3
    }
    poly = new google.maps.Polyline(polyOptions);
    poly.setMap(map);

    // Add a listener for the click event
    google.maps.event.addListener(map, 'click', addLatLng);

}
function setAttributes() {

//create the check box items
    var checkOptions1 = {
        gmap: map,
        title: "Aktivieren und deaktivieren der Windkennung",
        id: "windCheck",
        label: "Wind On/Off",
        checked: false,
        action: function () {
            if (this.checked == true) {
                this.checked = false;
                map.overlayMapTypes.setAt(1, windMap);
            } else {
                this.checked = true;
                map.overlayMapTypes.setAt(1, null);
            }
        }
    }
    var check1 = new checkBox(checkOptions1);

    var checkOptions2 = {
        gmap: map,
        title: "Aktivieren und deaktivieren der Temparatur",
        id: "tempCheck",
        label: "temp On/Off",
        checked: false,
        action: function () {
            if (this.checked == true) {
                this.checked = false;
                map.overlayMapTypes.setAt(2, tempMap);
            } else {
                this.checked = true;
                map.overlayMapTypes.setAt(2, null);
            }
        }
    }
    var check2 = new checkBox(checkOptions2);

    var checkOptions3 = {
        gmap: map,
        title: "FullScreen On/Off",
        id: "toggleFullScreen",
        label: "fullscreen",
        action: function () {
            if (toggleFullscreen == false) {
                toggleFullScreen(true);
                toggleFullscreen = true;
                initialize();
                setAttributes();
            } else {
                toggleFullscreen = false;
                toggleFullScreen(false);
                initialize();
                setAttributes();
            }
        }
    }
    var check3 = new checkBox(checkOptions3);

//put them all together to create the drop down
    var ddDivOptions = {
        items: [check1, check2, check3],
        id: "myddOptsDiv"
    }
//alert(ddDivOptions.items[1]);
    var dropDownDiv = new dropDownOptionsDiv(ddDivOptions);

    var dropDownOptions = {
        gmap: map,
        name: 'Options',
        id: 'ddControl',
        position: google.maps.ControlPosition.TOP_RIGHT,
        dropDown: dropDownDiv
    }

    var dropDown1 = new dropDownControl(dropDownOptions);

    function checkBox(options) {
        //first make the outer container
        var container = document.createElement('DIV');
        container.className = "checkboxContainer";
        container.title = options.title;

        var span = document.createElement('SPAN');
        span.role = "checkbox";
        span.className = "checkboxSpan";

        var bDiv = document.createElement('DIV');
        bDiv.className = "blankDiv";
        bDiv.id = options.id;

        var image = document.createElement('IMG');
        image.className = "blankImg";
        image.src = "http://maps.gstatic.com/mapfiles/mv/imgs8.png";

        var label = document.createElement('LABEL');
        label.className = "checkboxLabel";
        label.innerHTML = options.label;

        bDiv.appendChild(image);
        span.appendChild(bDiv);
        container.appendChild(span);
        container.appendChild(label);

        google.maps.event.addDomListener(container, 'click', function () {
            (document.getElementById(bDiv.id).style.display == 'block') ? document.getElementById(bDiv.id).style.display = 'none' : document.getElementById(bDiv.id).style.display = 'block';
            options.action();
        })
        return container;
    }

    function dropDownOptionsDiv(options) {
        //alert(options.items[1]);
        var container = document.createElement('DIV');
        container.className = "dropDownOptionsDiv";
        container.id = options.id;


        for (i = 0; i < options.items.length; i++) {
            //alert(options.items[i]);
            container.appendChild(options.items[i]);
        }
        return container;
    }

    function dropDownControl(options) {
        var container = document.createElement('DIV');
        container.className = 'custom-container';

        var control = document.createElement('DIV');
        control.className = 'dropDownControl';
        control.innerHTML = options.name;
        control.id = options.name;
        var arrow = document.createElement('IMG');
        arrow.src = "http://maps.gstatic.com/mapfiles/arrow-down.png";
        arrow.className = 'dropDownArrow';
        control.appendChild(arrow);
        container.appendChild(control);
        container.appendChild(options.dropDown);

        options.gmap.controls[options.position].push(container);
        google.maps.event.addDomListener(container, 'click', function () {
            (document.getElementById('myddOptsDiv').style.display == 'block') ? document.getElementById('myddOptsDiv').style.display = 'none' : document.getElementById('myddOptsDiv').style.display = 'block';
            setTimeout(function () {
                document.getElementById('myddOptsDiv').style.display = 'none';
            }, 1500);
        })
    }
}

$(document).ready(function () {
    initialize();
    setAttributes();


});
