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

    <div>
        <form>
            <div>
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
    </div>
</div>
<br/>
<br/>

<div>
    <div>
        <div id="appNotes">
            <h4>Notes</h4>
            <textarea></textarea>
        </div>
        <div id="markerMap">
            <h4>Map</h4>
            <img src="../img/icons/marker_map.png" id="appInfoPhoto"/>
        </div>
        <div id="appPhotos">
            <h4>Photos</h4>
            <!--<img src="../img/icons/no_image.jpg" id="appInfoPhoto" /> -->
            <div id="weatherInfo">
                <form method="get" action="">
                    <fieldset>
                        <legend>Weather Information</legend>
                        <table border="1">
                            <colgroup>
                                <col width="320">
                                <col width="320">
                                <col width="320">
                                <col width="320">
                            </colgroup>
                            <tr>
                                <td>
                                    <label for="windStrength">Wind Strength</label>
                                </td>
                                <td>
                                    <input name="windStrength" type="text" id="windStrength"/>
                                </td>
                                <td>
                                    <label for="windDirection">Wind Direction</label>
                                </td>
                                <td>
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
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="airPressure">Air Pressure</label>
                                </td>
                                <td>
                                    <input name="airPressure" type="text" id="airPressure"/>
                                </td>
                                <td>
                                    <label for="temperature">Temperature</label>
                                </td>
                                <td>
                                    <input name="temperature" type="text" id="temperature"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="clouds">Clouds</label>
                                </td>
                                <td>
                                    <input name="clouds" type="text" id="clouds"/>
                                </td>
                                <td>
                                    <label for="rain">Rain</label>
                                </td>
                                <td>
                                    <input name="rain" type="text" id="rain"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="waveHight">Wave Hight</label>
                                </td>
                                <td>
                                    <input name="waveHight" type="text" id="waveHight"/>
                                </td>
                                <td>
                                    <label for="waveDirection">Wave Direction</label>
                                </td>
                                <td>
                                    <input name="waveDirection" type="text" id="waveDirection"/>
                                </td>
                            </tr>
                        </table>
                    </fieldset>

                    <fieldset>
                        <legend>Date & Time</legend>
                        <label for="date">Date</label>
                        <input name="date" type="date" id="date"/>
                        <br>
                        <label for="time">Time</label>
                        <input name="time" type="time" id="time"/>
                    </fieldset>
                </form>

            </div>
        </div>
    </div>
</div>
