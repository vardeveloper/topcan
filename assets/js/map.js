$(document).ready(function () {

    //Open street  Map -12.162173,-76.987884
    var coord = [-12.067703, -77.0133211]; // <--- coordinates here

    var map = L.map('map-canvas', {scrollWheelZoom: false}).setView(coord, 17);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
        attribution: ''
    }).addTo(map);

    // custom icon
    var customIcon = L.icon({
        iconUrl: 'html/img/mapmarker.png',
        iconSize: [64, 64], // size of the icon
        iconAnchor: [32, 63] // point of the icon which will correspond to marker's location
    });

    // marker object, pass custom icon as option, add to map         
    //var marker = L.marker(coord, {icon: customIcon}).addTo(map);
    var marker = L.marker(coord).addTo(map);
});
