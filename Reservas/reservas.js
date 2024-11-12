document.addEventListener('DOMContentLoaded', function() {
    const timeBlocks = document.querySelectorAll('.time-block');
    const infoBox = document.querySelector('.info-box');
    const canchaSelect = document.getElementById('cancha');
    const fechaElemento = document.querySelector('.fecha');

    timeBlocks.forEach(block => {
        block.addEventListener('click', function() {
            timeBlocks.forEach(b => b.classList.remove('selected'));
            block.classList.add('selected');

            const selectedHour = block.textContent.trim();
            const selectedCancha = canchaSelect.value;
            const selectedFecha = fechaElemento.textContent.trim();

            infoBox.innerHTML = `
                <p>Cancha: ${selectedCancha.toUpperCase()}</p>
                <p>${selectedHour} hs</p>
                <p>60 min - $10,000</p>
                <button class="confirm-button">Confirmar - $10,000</button>
            `;
            block.insertAdjacentElement('afterend', infoBox);

            // Escuchar el clic en el botón de confirmación
            document.querySelector('.confirm-button').addEventListener('click', () => {
                // Guardar la selección en localStorage
                localStorage.setItem('reservaCancha', selectedCancha);
                localStorage.setItem('reservaFecha', selectedFecha);
                localStorage.setItem('reservaHora', selectedHour);

                // Redirigir a la pantalla de compra
                window.location.href = '/PROYECTO%20FINAL%20-%20FRONTEND/Reservas/compra.php';
            });
        });
    });
});

/* 
document.addEventListener('DOMContentLoaded', function() {
    const timeBlocks = document.querySelectorAll('.time-block'); // Ajusta el selector al de tus bloques de hora
    const infoBox = document.querySelector('.info-box'); // Asegúrate de que el selector sea correcto

    timeBlocks.forEach(block => {
        block.addEventListener('click', function() {
            // Remover la clase "selected" de todos los bloques
            timeBlocks.forEach(b => b.classList.remove('selected'));

            // Agregar la clase "selected" al bloque actual
            block.classList.add('selected');

            // Obtener la hora del bloque seleccionado
            const selectedHour = block.textContent.trim(); // Usa .trim() para eliminar espacios en blanco

            // Actualizar el contenido del bloque de información con la hora seleccionada
            infoBox.innerHTML = `
                <p>Cancha: FUTBOL</p>
                <p>${selectedHour} hs</p>
                <p>60 min - $10,000</p>
                <button class="confirm-button">Confirmar - $10,000</button>
            `;

            // Mover el bloque de información debajo del bloque de hora seleccionado
            block.insertAdjacentElement('afterend', infoBox);
        });
    });
});
*/
