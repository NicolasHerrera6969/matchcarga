document.addEventListener("DOMContentLoaded", function () {
    const mostrarSeccionesBtn = document.getElementById("mostrar-secciones");
    const seccionesOcultas = document.querySelectorAll(".more-info");

    mostrarSeccionesBtn.addEventListener("click", function () {
        // Mostrar todas las secciones
        seccionesOcultas.forEach(function(seccion) {
            seccion.classList.toggle("hidden"); // Alternar la clase 'hidden'
        });

        // Ocultar el botón después de hacer clic
        mostrarSeccionesBtn.style.display = "none";
    });
});