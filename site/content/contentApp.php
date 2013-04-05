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
<div class="span12">
    <!-- Content -->
    <div class="page-header">
        <h2>Wegpunkt</h2>
    </div>
    <br/>

    <div class="span5">
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


<br/>
<br/>

<div>
    <div>
        <div id="appNotes">
            <h4>Notes</h4>
            <textarea></textarea>
        </div>

        <div id="markerMap" class="span6">
            <h4>Map</h4>
            <img src="../img/icons/marker_map.png" id="appInfoPhoto"/>
        </div>

        <div id="appPhotos">
            <h4>Photos</h4>
            <img src="../img/icons/no_image.jpg" id="appInfoPhoto"/>
        </div>

    </div>
</div>

</div>