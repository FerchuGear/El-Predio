document.addEventListener("DOMContentLoaded", function() {
    let sliderInner = document.querySelector(".slider--inner");
    let index = 0;
    let images = document.querySelectorAll(".slider--inner img");

    function updateSlidePosition() {
        let percentage = index * -100;
        sliderInner.style.transform = "translateX(" + percentage + "%)";
    }

    function moveToNextSlide() {
        index = (index + 1) % images.length; // Ciclo continuo
        updateSlidePosition();
    }

    // Intervalo automático
    setInterval(moveToNextSlide, 3000); // Intervalo de 3 segundos
});
