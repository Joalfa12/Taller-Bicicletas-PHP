const form = document.querySelector(".formulario");

if (form) {
    form.addEventListener("submit", (e) => {
        const nombre = document.querySelector("#nombre").value.trim();
        const correo = document.querySelector("#correo").value.trim();
        let errores = [];

        if (nombre === "") errores.push("El nombre es obligatorio.");
        if (!correo.includes("@")) errores.push("El correo no es válido.");

        if (errores.length > 0) {
            e.preventDefault();
            document.querySelector("#mensajes").textContent = errores.join(" ");
        }
    });
}

const btnMenu = document.querySelector("#btnMenu");
const menu = document.querySelector("#menu");

if (btnMenu && menu) {
    btnMenu.addEventListener("click", () => {
        menu.classList.toggle("activo");
    });
}


const preguntas = document.querySelectorAll(".accordion .titulo");

preguntas.forEach((pregunta) => {
    pregunta.addEventListener("click", () => {
        pregunta.parentElement.classList.toggle("activo");
    });
});


const servicios = [
    {
        titulo: "Reparación de frenos",
        descripcion: "Revisamos y ajustamos los frenos para mejorar tu seguridad.",
        imagen: "img/frenos.jpg"
    },
    {
        titulo: "Cambio de llantas",
        descripcion: "Cambiamos las llantas para que puedas recorrer tus caminos con seguridad.",
        imagen: "img/llantas.jpg"
    },
    {
        titulo: "Mantenimiento general",
        descripcion: "Revisamos y ajustamos tu bicicleta para mantenerla en buen estado.",
        imagen: "img/mantenimiento.jpg"
    }
];


const contenedor = document.querySelector("#cards");

if (contenedor) {
    contenedor.innerHTML = "";

    servicios.forEach((servicio) => {
        const tarjeta = document.createElement("article");
        tarjeta.classList.add("tarjeta");

        tarjeta.innerHTML = `
            <img src="${servicio.imagen}" alt="${servicio.titulo}">
            <h3>${servicio.titulo}</h3>
            <p>${servicio.descripcion}</p>
        `;

        contenedor.appendChild(tarjeta);
    });
}