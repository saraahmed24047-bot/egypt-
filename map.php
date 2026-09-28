<?php

$pageTitle = "Tourist Map";
$page = "map";

include 'inc/header.php';

?>

<!-- Leaflet CSS -->

<link
    rel="stylesheet"
    href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
/>


<style>

.map-section {
    padding: 40px 0;
}

.map-title {
    text-align: center;
    margin-bottom: 30px;
}

#egyptMap {
    height: 550px;
    width: 100%;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
}

</style>


<!-- Tourist Map -->

<section class="map-section">

    <div class="container">

        <div class="map-title">

            <h2 class="fw-bold">
                🗺️ Egypt Tourist Map
            </h2>

            <p class="text-muted">
                Explore some of the most famous tourist destinations in Egypt.
            </p>

        </div>


        <!-- Map -->

        <div id="egyptMap"></div>

    </div>

</section>


<!-- Leaflet JS -->

<script
    src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js">
</script>


<script>

    // Create the map

    var map = L.map('egyptMap').setView(
        [26.8206, 30.8025],
        6
    );


    // Add OpenStreetMap

    L.tileLayer(
        'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
        {
            maxZoom: 19,
            attribution: '&copy; OpenStreetMap contributors'
        }
    ).addTo(map);


    // Cairo

    L.marker([30.0444, 31.2357])
        .addTo(map)
        .bindPopup(
            '<b>Cairo</b><br>Explore the Egyptian Museum and Cairo landmarks.'
        );


    // Giza

    L.marker([29.9792, 31.1342])
        .addTo(map)
        .bindPopup(
            '<b>Giza</b><br>Visit the famous Pyramids of Giza and the Sphinx.'
        );


    // Luxor

    L.marker([25.6872, 32.6396])
        .addTo(map)
        .bindPopup(
            '<b>Luxor</b><br>Discover ancient temples and historical sites.'
        );


    // Aswan

    L.marker([24.0889, 32.8998])
        .addTo(map)
        .bindPopup(
            '<b>Aswan</b><br>Enjoy the Nile and Nubian culture.'
        );


    // Hurghada

    L.marker([27.2579, 33.8116])
        .addTo(map)
        .bindPopup(
            '<b>Hurghada</b><br>Enjoy the Red Sea and beautiful beaches.'
        );


    // Sharm El Sheikh

    L.marker([27.9158, 34.3299])
        .addTo(map)
        .bindPopup(
            '<b>Sharm El Sheikh</b><br>Enjoy the Red Sea and beautiful beaches.'
        );

</script>


<?php

include 'inc/footer.php';

?>
