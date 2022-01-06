var map=L.map("map").setview([21.4272,92.0058],10);

var osm = L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
{
    attribution:
    "&copy:<a href = 'https://openstreetmap.org/copyright'>Openstreet map </a> contributors",
});

osm.addTo(map);

var marker= L.marker([21.4272,92.0058]).addTo(map);
