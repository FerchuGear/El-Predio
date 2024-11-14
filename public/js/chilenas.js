document.addEventListener("DOMContentLoaded", () => {
    const numbers = document.querySelectorAll(".custom-stats-container .number");
    
    numbers.forEach(number => {
        const targetValue = parseInt(number.innerText);
        let startValue = 0;
        
        const updateCount = () => {
            startValue += Math.ceil(targetValue / 50); // Ajusta la velocidad del conteo
            if (startValue > targetValue) startValue = targetValue;
            number.innerText = startValue;
            if (startValue < targetValue) requestAnimationFrame(updateCount);
        };
        
        updateCount();
    });
});
