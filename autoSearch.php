<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDp51TWrCe9TEG_22qFY5S2ApeVLIK1jXU&libraries=places"></script>
</head>
<script>
    window.onload = function () {
        let input = document.getElementById('search-input')
        let map = new google.maps.Map(document.getElementById('map'),
            {
                zoom: 4,
                center: {
                    lat: -34.397,
                    lng: 150.644
                },
                scrollwheel: true
            })
        let marker = new google.maps.marker({
            map: map
        })

        let option = {
            types: ['(cities)'],
            componentRestrictions: {
                country: 'ca'
            }
        }

        let autocomplete = new google.maps.places.Autocomplete(input)
        autocomplete.bindTo('bounds', map)
    }
</script>

<body>
    <input type="text" id="search-input" placeholder="Enter a city">
    <div id="map" style="height: 800px; width: 100%;"></div>
</body>

</html>