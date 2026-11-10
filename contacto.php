
    <?php include 'header.php'; ?>

<main>
    <section class="contacto">
        <h1>Contáctanos</h1>
        <p>¿Necesitas reparar tu bicicleta? Envíanos un mensaje y con gusto te atenderemos.</p>
    
    <form class="formulario" action="enviar.php" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
    
    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo" placeholder="Ingrese su correo" required>
    
    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" rows="5" placeholder="Escriba su mensaje" required></textarea>
    
    <p id="mensajes"></p>
    <button type="submit" class="boton">Enviar mensaje</button>
    </form>

    </section>
</main>

<?php include 'footer.php'; ?>

