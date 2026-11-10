
<?php include 'header.php'; ?>

<main>
    <section class="portada">
        <h1>Bienvenidos a BikerPro</h1>
        <p>Ofrecemos reparación y mantenimiento de bicicletas para que disfrutes cada recorrido con seguridad.</p>
        <a href="servicios.php" class="boton">Ver servicios</a>
        <img src="img/taller.jpg" alt="Mecánico reparando una bicicleta">
    </section>

    <section class="servicios">
        <h2>Nuestros servicios</h2>
        <p>Conoce algunos de los servicios que ofrecemos para tu bicicleta.</p>

    <div class="cards" id="cards">
    </div>
    </section>

    <section class="accordion">
    <h2>Preguntas frecuentes</h2>

    <div class="item">
        <div class="titulo">¿Qué servicios ofrecen?</div>
        <div class="contenido">
            <p>Ofrecemos reparación y mantenimiento de bicicletas.</p>
        </div>
    </div>

    <div class="item">
    <div class="titulo">¿Realizan mantenimiento preventivo?</div>
    <div class="contenido">
        <p>Sí, realizamos revisiones y ajustes para mantener las bicicletas en buen estado.</p>
    </div>
</div>

   <div class="item">
    <div class="titulo">¿Cuánto tarda una reparación?</div>
    <div class="contenido">
        <p>El tiempo depende del tipo de reparación y del estado de la bicicleta.</p>
    </div>
</div>

<div class="item">
    <div class="titulo">¿Necesito solicitar una cita?</div>
    <div class="contenido">
        <p>Recomendamos contactarnos antes de visitar el taller para consultar la disponibilidad.</p>
    </div>
</div>

</section>

</main>

<?php include 'footer.php'; ?>
