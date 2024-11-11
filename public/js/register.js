
require('dotenv').config();

const SUPABASE_URL = process.env.SUPABASE_URL;
const SUPABASE_ANON_KEY = process.env.SUPABASE_ANON_KEY;

/**
 * Registra un nuevo usuario en Supabase.
 * @param {string} email - Correo electrónico del usuario.
 * @param {string} password - Contraseña del usuario.
 */
async function registerUser(userData) {
    try {
        // Solicitud para crear el usuario en Supabase
        const response = await fetch(`${SUPABASE_URL}/auth/v1/signup`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'apikey': SUPABASE_ANON_KEY,
                'Authorization': `Bearer ${SUPABASE_ANON_KEY}`
            },
            body: JSON.stringify({
                email: userData.email,
                password: userData.password,
                data: {
                    nombre: userData.nombre,
                    apellido: userData.apellido,
                    telefono: userData.telefono,
                    tipo_usuario: userData.tipo_usuario
                }
            })
        });

        const data = await response.json();

        // Verificar si la respuesta es exitosa
        if (!response.ok) {
            throw new Error(data.error_description || data.message || "Error en el registro");
        }

        const messageElement = document.getElementById("message");
        messageElement.innerText = "Registro exitoso. Revisa tu correo para verificar la cuenta.";
        messageElement.style.color = "green";
        console.log('Registro exitoso:', data);
    } catch (error) {
        // Mostrar mensaje de error en rojo
        const messageElement = document.getElementById("message");
        messageElement.innerText = `Error: ${error.message}`;
        messageElement.style.color = "red";
        console.error('Error en el registro:', error.message);
    }
}

/**
 * Maneja el envío del formulario de registro.
 */
document.getElementById("registerForm").addEventListener("submit", function(event) {
    event.preventDefault();

    // Obtener valores de los campos del formulario
    const nombre = document.getElementById("nombre").value;
    const apellido = document.getElementById("apellido").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const passwordConfirm = document.getElementById("passwordConfirm").value;
    const telefono = document.getElementById("telefono").value;
    const tipo_usuario = document.getElementById("tipo_usuario").value;

    // Verificar si las contraseñas coinciden
    if (password !== passwordConfirm) {
        document.getElementById("message").innerText = "Las contraseñas no coinciden.";
        return;
    }

    // Preparar los datos del usuario
    const userData = { nombre, apellido, email, password, telefono, tipo_usuario };

    // Llamar a la función registerUser con los datos del formulario
    registerUser(userData);
});
