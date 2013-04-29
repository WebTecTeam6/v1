
<!-- bring in the OpenLayers javascript library
    (here we bring it from the remote site, but you could
    easily serve up this javascript yourself) -->
<script src="http://www.openlayers.org/api/OpenLayers.js"></script>

<!-- bring in the OpenStreetMap OpenLayers layers.
    Using this hosted file will make sure we are kept up
    to date with any necessary changes -->
<script src="http://www.openstreetmap.org/openlayers/OpenStreetMap.js"></script>
<script type="text/javascript" src="http://map.openseamap.org/map/javascript/harbours.js"></script>
<script type="text/javascript" src="http://map.openseamap.org/map/javascript/map_utils.js"></script>
<script type="text/javascript" src="http://map.openseamap.org/map/javascript/utilities.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB25Pukgbs3v9GQwqi3ZqSVIhd4HTbU2Nc&sensor=false"></script>

<script type="text/javascript" src="../bootstrap/js/weatherMap.js" rel="script"></script>

<!-- Content -->
<div class="span9">
    <section id="Wegpunkt">
        <div class="page-header">
            <h2>Wegpunkt</h2>
        </div>
        <h4>Map</h4>
        <div id="seaMap" class="span9">
            <!-- define a DIV into which the map will appear. Make it take up the whole window -->
            <div style="width:100%; height:100%" id="mapCanvas"></div>
        </div>
        <div class="span10">
            <form>

                <div class="span3">

                    <div>
                        <label>Name</label>
                        <input type="text" id="name"/>
                    </div>

                    <div>
                        <label>Time</label>
                        <input type="date" id="wdate"/>
                    </div>
                    <div>
                        <label>Date</label>
                        <input type="date" id="wtime"/>
                    </div>
                    <div>
                        <label>BTM</label>
                        <input type="text" id="btm"/>
                    </div>
                </div>

                <div class="span3">
                    <div>
                        <label>Latitude</label>
                        <input type="text" id="lat"/>
                    </div>
                    <div>
                        <label>Longitude</label>
                        <input type="text" id="lng"/>
                    </div>
                    <div>
                        <label>Fahrt nach</label>
                        <select name="fahrtziel" id="marker"></select>
                    </div>
                    <div>
                        <label>DTM</label>
                        <input type="text" id="dtm"/>
                    </div>
                </div>

                <div class="span3">
                    <div>
                        <label>COG</label>
                        <input type="text" id="cog"/>
                    </div>
                    <div>
                        <label>SOG</label>
                        <input type="text" id="sog"/>
                    </div>

                    <div>
                        <label>Manoever</label>
                        <select name="manoever" id="manoever"></select>
                    </div>
                    <div>
                        <label>Vorsegel</label>
                        <select name="vorsegel" id="vorsegel"></select>
                    </div>
                </div>
        </div>

    </section>

    <section id="Weather-Information">
        <div id="appPhotos">
            <!--            <h4>Photos</h4>-->
            <!--<img src="../img/icons/no_image.jpg" id="appInfoPhoto" /> -->
            <div id="weatherInfo" class="span11">
                <form method="get" action="">
                    <fieldset id="fieldsetWeatherInfo">
                        <legend>Weather Information</legend>

                        <div div="weatherInfoLeft" class="span3">
                            <label for="windStrength">Wind Strength</label>
                            <input name="windStrength" type="text" id="windStrength"/>

                            <label for="airPressure">Air Pressure</label>
                            <input name="airPressure" type="text" id="airPressure"/>


                            <label for="clouds">Clouds</label>
                            <input name="clouds" type="text" id="clouds"/>


                            <label for="waveHight">Wave Hight</label>
                            <input name="waveHight" type="text" id="waveHight"/>
                        </div>

                        <div div="weatherInfoRight" class="span3">
                            <label for="windDirection">Wind Direction</label>
                            <select name="windDirection">
                                <option value="North"
                                        selected="selected">North
                                </option>
                                <option value="NorthEast">NorthEast</option>
                                <option value="NorthWest">NorthWest</option>
                                <option value="NorthNorthWest">NorthNorthWest</option>
                                <option value="NorthNorthEast">NorthNorthEast</option>
                                <option value="East">East</option>
                                <option value="South">South</option>
                                <option value="SouthEast">SouthEast</option>
                                <option value="SouthSouthWest">SouthSouthWest</option>
                                <option value="SouthSouthEast">SouthSouthEast</option>
                                <option value="SouthWest">SouthWest</option>
                                <option value="West">West</option>
                            </select>


                            <label for="temperature">Temperature</label>
                            <input name="temperature" type="text" id="temperature"/>

                            <label for="rain">Rain</label>
                            <input name="rain" type="text" id="rain"/>

                            <label for="waveDirection">Wave Direction</label>
                            <input name="waveDirection" type="text" id="waveDirection"/>

                        </div>


                    </fieldset>

                </form>

                <div class="span3">
                    <fieldset id="dateTime">
                        <legend>Date & Time</legend>
                        <label for="date">Date</label>
                        <input name="date" type="date" id="date"/>

                        <label for="time">Time</label>
                        <input name="time" type="time" id="time"/>
                    </fieldset>

                    <div id="appNotes">
                        <h4>Notes</h4>
                        <textarea></textarea>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



