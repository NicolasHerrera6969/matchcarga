document.addEventListener("DOMContentLoaded", function () {
    const toggleFormBtn = document.getElementById("toggle-form-btn");
    const authFormContainer = document.querySelector(".form-container");

    toggleFormBtn.addEventListener("click", function () {
        if (authFormContainer.querySelector("h2").textContent === "Iniciar Sesión") {
            authFormContainer.innerHTML = `
                <form id="auth-form" action="php/registro.php" method="POST">
                    <h2>Registrarse</h2>
                    <label for="username">Usuario</label>
                    <input type="text" id="username" name="username" required>
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" required>
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                    <button type="submit" class="btn-primary">Registrarse</button>
                </form>
            `;
            toggleFormBtn.textContent = "Iniciar Sesión";
        } else {
            authFormContainer.innerHTML = `
                <form id="auth-form" action="php/validar.php" method="POST">
                    <h2>Iniciar Sesión</h2>
                    <label for="username">Usuario</label>
                    <input type="text" id="username" name="username" required>
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                    <button type="submit" class="btn-primary">Iniciar Sesión</button>
                </form>
            `;
            toggleFormBtn.textContent = "Registrarse";
        }
    });
});