var mymap = L.map('mapid').setView([40.741895, -73.989308], 6);
L.tileLayer('https://maps.heigit.org/openmapsurfer/tiles/roads/webmercator/{z}/{x}/{y}.png', {
    maxZoom:20
}).addTo(map)