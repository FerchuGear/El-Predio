document.addEventListener('DOMContentLoaded', function() {
    const canchaElemento = document.querySelector('.left-section h2');
    const fechaElemento = document.querySelector('.left-section p:nth-of-type(3)');
    const turnoElemento = document.querySelector('.left-section p:nth-of-type(4)');
    const editarButton = document.getElementById('editar-reserva');

    // Recuperar los datos de localStorage
    const reservaCancha = localStorage.getItem('reservaCancha');
    const reservaFecha = localStorage.getItem('reservaFecha');
    const reservaHora = localStorage.getItem('reservaHora');

    if (editarButton) {
        editarButton.addEventListener('click', function() {
            // Redirige a la pantalla de reservas
            window.location.href = "/PROYECTO%20FINAL%20-%20FRONTEND/Reservas/reservas.php";
        });
    }

    // Mostrar la información en la pantalla de compra
    if (reservaCancha && reservaFecha && reservaHora) {
        canchaElemento.textContent = `Cancha: ${reservaCancha.toUpperCase()}`;
        fechaElemento.textContent = `📅 Fecha: ${reservaFecha}`;
        turnoElemento.textContent = `⏰ Turno: ${reservaHora} - ${parseInt(reservaHora) + 1}:00`;
    }
});

