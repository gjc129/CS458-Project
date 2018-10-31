//30OCT added meter1-6 for marker example

window.onload = function(e)
{

var mymap = L.map('mapid').setView([40.875770, -124.078639], 17);

//var zoomLevel = 13;
//var xCoordinate = 40.875770;
//var yCoordinate = -124.078639;


L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2$
                maxZoom: 18,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox.streets'
        }).addTo(mymap);

var meter1 = L.marker([40.874447, -124.075873]).addTo(mymap)
        .bindPopup('Meter ID: 0001')
        .togglePopup();

var meter2 = L.marker([40.874346, -124.075872]).addTo(mymap)
        .bindPopup('Meter ID: 0002')
        .togglePopup();

var meter3 = L.marker([40.874320, -124.075883]).addTo(mymap)
        .bindPopup('Meter ID: 0003')
        .togglePopup();

var meter4 = L.marker([40.874257, -124.075908]).addTo(mymap)
        .bindPopup('Meter ID: 0004')
        .togglePopup();

var meter5 = L.marker([40.874198, -124.075934]).addTo(mymap)
        .bindPopup('Meter ID: 0005')
        .togglePopup();

var meter6 = L.marker([40.874161, -124.075946]).addTo(mymap)
        .bindPopup('Meter ID: 0006')
        .togglePopup();
}
