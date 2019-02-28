//// MAP


var map = L.map('map').setView([44.4603756, 1.4541945], 12);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// L.marker([44.4603756, 1.4541945]).addTo(map)
//     .bindPopup('<strong>RM Cuisines</strong> <br> 481 Avenue des Ftpf, 8eme RI Route de Villefranche,<br> 46000 Cahors')
//     .openPopup();