<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <main>
        <h1>Map</h1>
        <div id="map" style="height: 600px; width: 100%;"></div>
    </main>
    <script src="js/script.js"></script>
    <script>
        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: -34.397, lng: 150.644 },
                zoom: 8,
            });
        }
    </script>
</body>
</html>