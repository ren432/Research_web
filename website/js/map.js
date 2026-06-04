  // Iloilo center
const iloiloCenter = [10.7202, 122.5621];
  // Iloilo bounds (southwest, northeast)
const bounds = [
  [10.6200, 122.4500], // southwest
  [10.8200, 122.6700]  // northeast
];
  // Create map
const map = L.map('map', {
    center: iloiloCenter,
    zoom: 13,
    minZoom: 12, // maximum zoom out
    maxZoom: 18, // maximum zoom in
    maxBounds: bounds,
    maxBoundsViscosity: 1.0
});
  // OpenStreetMap tiles
L.tileLayer(
    'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
  {
      attribution: '&copy; OpenStreetMap contributors'
  }
).addTo(map);
  // Marker
L.marker(iloiloCenter)
  .addTo(map)
  .bindPopup("Iloilo City")
  .openPopup();