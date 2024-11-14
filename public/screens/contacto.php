<?php
    require '../assets/php/menu.php';
?>
<title>Contacto</title>
<link rel="stylesheet" href="../css/contacto.css">
<div class="contact-container">
    <div class="contact-info">
        <h2>DATOS DE CONTACTO</h2>
        <ul>
            <li><span class="icon">&#x1F4CD;</span> Directorio y Lisandro de la Torre, - Mataderos</li>
            <li><span class="icon">&#x1F4F1;</span> Whatsapp: 115-909-8724</li>
            <li><span class="icon">&#x1F4E7;</span> elpredioclub@gmail.com</li>
            <li><span class="icon">&#x1F4F7;</span> @elpredioclub</li>
            <li><span class="icon">&#x1F4F6;</span> @elpredioclub</li>
        </ul>
    </div>
    <div class="contact-form">
        <h2>ENVIANOS TU CONSULTA</h2>
        <form action="enviar_consulta.php" method="post">
            <input type="text" name="nombre" placeholder="Nombre y Apellido" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="telefono" placeholder="Teléfono">
            <textarea name="mensaje" placeholder="Mensaje" required></textarea>
            <button type="submit">Enviar ➔</button>
        </form>
    </div>
</div>

<?php
    require '../assets/php/footer.php';
?>
