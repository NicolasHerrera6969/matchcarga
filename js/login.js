document.addEventListener("DOMContentLoaded", function () {
    const toggleFormBtn = document.getElementById("toggle-form-btn");
    const authForm = document.getElementById("auth-form");

    toggleFormBtn.addEventListener("click", function () {
        if (authForm.innerHTML.includes("Iniciar Sesión")) {
            authForm.innerHTML = `
                <h2>Registrarse</h2>
                <label for="username">Usuario</label>
                <input type="text" id="username" name="username" required>
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
                <label for="confirm-password">Confirmar Contraseña</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
                <button type="submit" class="btn-primary">Registrarse</button>
            `;
            toggleFormBtn.textContent = "Iniciar Sesión";
        } else {
            authForm.innerHTML = `
                <h2>Iniciar Sesión</h2>
                <label for="username">Usuario</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" class="btn-primary">Iniciar Sesión</button>
            `;
            toggleFormBtn.textContent = "Registrarse";
        }
    });
});