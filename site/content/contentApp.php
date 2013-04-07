<?php
/**
 * Created by JetBrains PhpStorm.
 * User: evanglion
 * Date: 05.04.13
 * Time: 19:08
 * To change this template use File | Settings | File Templates.
 */
?>

<!-- Content -->
<div class="span11">
    <br/>

    <div class="page-header">
        <h2>Wegpunkt</h2>
    </div>

    <div class="span3">
        <form>

            <div>

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
            </div>

            <div>
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
            </div>

            <div>
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
            </div>

            <div>
                <div>
                    <label>BTM</label>
                    <input type="text" id="btm"/>
                </div>
                <div>
                    <label>DTM</label>
                    <input type="text" id="dtm"/>
                </div>
                <div>
                    <label>Vorsegel</label>
                    <select name="vorsegel" id="vorsegel"></select>
                </div>
            </div>

    </div>

    <div id="markerMap" class="span7">
        <h4>Map</h4>
        <img src="../img/icons/marker_map.png" id="appInfoPhoto"/>
    </div>


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
</div>