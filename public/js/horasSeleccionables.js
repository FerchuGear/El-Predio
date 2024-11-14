/*const bloquesHoras = document.querySelectorAll('.hora-bloque');

bloquesHoras.forEach(bloque => {
    bloque.addEventListener('click', () => {
        // Remueve la selección de cualquier otro bloque
        bloquesHoras.forEach(b => b.classList.remove('seleccionado'));

        // Agrega la clase "seleccionado" al bloque actual
        bloque.classList.add('seleccionado');

        // Aquí puedes hacer otras acciones como almacenar la hora seleccionada
        console.log(`Hora seleccionada: ${bloque.innerText}`);
    });
});
¨*/

// Seleccionamos todos los bloques de hora
const timeBlocks = document.querySelectorAll('.time-block');
const infoBox = document.querySelector('.info-box'); // Selecciona el bloque de información

// Agregamos un evento de clic a cada bloque de hora
timeBlocks.forEach(block => {
    block.addEventListener('click', function () {
        // Remueve la clase 'selected' de todos los bloques de hora
        timeBlocks.forEach(b => b.classList.remove('selected'));

        // Agrega la clase 'selected' al bloque clickeado
        block.classList.add('selected');

        // Obtiene la hora del bloque seleccionado
        const selectedTime = block.textContent;

        // Actualiza el contenido del info-box con la hora seleccionada
        infoBox.querySelector('p:nth-child(2)').textContent = `${selectedTime} hs`;

        // Inserta el info-box justo después del bloque seleccionado
        block.parentNode.insertBefore(infoBox, block.nextSibling);
    });
});
