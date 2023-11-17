<?php
$header = "../../assets/inc/global-village-header.php";
$nav = "../../assets/inc/global-village-nav.php";

include($header);
include($nav);
?>
<main>
    <p>Here is Global Village:</p>
    <div class="gv-flex-container" style="justify-content: start;">
        <div class="flex-item">
            <h2>Global Village</h2>
            <img src="../../assets/media/globalvillage.jpg" alt="Global Village" title="Global Village">
            <h3>Room Types</h3>
            <ul>
                <li>Studio with Kitchen</li>
                <li>4 bed, 2-bath suite with Kitchen</li>
                <li>5 bed, 2-bath suite without Kitchen</li>
                <li>5 bed, 2-bath suite with Kitchen</li>
            </ul>
            <h3>Rates</h3>
            <ul>
                <li>Double without Kitchen &mdash; &dollar;4,866/semester/person</li>
                <li>Double with Kitchen &mdash; &dollar;5,119/semester/person</li>
                <li>Single without Kitchen &mdash; &dollar;5,646/semester/person</li>
                <li>Single with Kitchen &mdash; &dollar; 5,940/semester/person</li>
                <li>Studio &mdash; &dollar;7,254/semester/person</li>
            </ul>
            <h3>Featured Amenities</h3>
            <ul>
                <li>Furnished</li>
                <li>Laundry Facility in Building</li>
                <li>Access to Internet</li>
                <li>Air Conditioning</li>
                <li>TigerTV (provided with Stream2)</li>
            </ul>
            <h3>A look inside the suite</h3>
            <div class="flex-item">
                <figure>
                    <figcaption>Global Village - Living Room</figcaption>
                    <img src="../../assets/media/globalvillage-livingroom.jpg" alt="GV Living Room"
                         title="GV Living Room">

                </figure>
                <figure>
                    <figcaption>Room</figcaption>
                    <img src="../../assets/media/globalvillage-room.jpg" alt="GV Room" title="GV Room">
                </figure>
                <figure>
                    <figcaption>Kitchen</figcaption>
                    <img src="../../assets/media/globalvillage-kitchen.jpg" alt="GV Kitchen" title="GV Kitchen">
                </figure>
                <figure>
                    <figcaption>Bathroom and Shower</figcaption>
                    <img src="../../assets/media/globalvillage-bath-shower.jpg" alt="GV Kitchen" title="GV Kitchen">
                </figure>

            </div>

        </div>
    </div>
</main>
<?php

$footer = "../../assets/inc/global-village-footer.php";
include ($footer);
?>