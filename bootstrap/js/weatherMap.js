function initialize() {

    //----------------------------------------------------------Overlays
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

    var mapOptions = {
        center: new google.maps.LatLng(47.66, 9.16),
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);

    map.overlayMapTypes.push(null);	// Placeholder for Sites Overlay
    map.overlayMapTypes.push(null);	// Placeholder for OSM TOP + Sites
    map.overlayMapTypes.push(null);

    //-------------------------------------------------------setMapOverlays
    map.overlayMapTypes.setAt(0, mainMap);
    map.overlayMapTypes.setAt(1, windMap);
    map.overlayMapTypes.setAt(2, tempMap);


    //create the check box items
    var checkOptions1 = {
        gmap: map,
        title: "Aktivieren und deaktivieren der Windkennung",
        id: "windCheck",
        label: "Wind On/Off",
        checked: false,
        action: function () {
            if(this.checked == true) {
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
            if(this.checked == true) {
                this.checked = false;
                map.overlayMapTypes.setAt(2, tempMap);
            } else {
                this.checked = true;
                map.overlayMapTypes.setAt(2, null);
            }
        }
    }
    var check2 = new checkBox(checkOptions2);

    //put them all together to create the drop down
    var ddDivOptions = {
        items: [check1, check2],
        id: "myddOptsDiv"
    }
    //alert(ddDivOptions.items[1]);
    var dropDownDiv = new dropDownOptionsDiv(ddDivOptions);

    var dropDownOptions = {
        gmap: map,
        name: 'toggle Overlays',
        id: 'ddControl',
        position: google.maps.ControlPosition.TOP_RIGHT,
        dropDown: dropDownDiv
    }

    var dropDown1 = new dropDownControl(dropDownOptions);

    google.maps.event.addDomListener(window, 'load', initialize);

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
        initialize()
    }
);