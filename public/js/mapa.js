// Inicializa el mapa en el contenedor con el nuevo ID 'mapa-leaflet'
var map = L.map('mapa-leaflet', {
    center: [-34.6599146, -58.5029697], // Coordenadas de Buenos Aires
    zoom: 16,
    zoomControl: false, // Desactiva control de zoom inicial
    dragging: false, // Desactiva arrastre inicial
    scrollWheelZoom: false // Desactiva zoom con scroll inicial
});

// Capa de mapa de OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

// Añade un marcador
L.marker([-34.6599146, -58.5029697]).addTo(map)
    .bindPopup('Buenos Aires, Argentina')
    .openPopup();

// Evento para activar la interacción al hacer clic
map.once('click', function () {
    map.scrollWheelZoom.enable();
    map.dragging.enable();
    map.zoomControl.enable();
});
