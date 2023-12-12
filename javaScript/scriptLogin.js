const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

function validarRegistro() {
    // Validar correo electrónico
    var email = document.getElementById('email').value;
    var emailError = document.getElementById('emailError');
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(email)) {
        emailError.textContent = 'Correo electrónico no válido';
        return false;
    } else {
        emailError.textContent = '';
    }

    // Validar contraseña
    var password = document.getElementById('password').value;
    var passwordError = document.getElementById('passwordError');

    if (password.length < 6) {
        passwordError.textContent = 'La contraseña debe tener al menos 6 caracteres';
        return false;
    } else {
        passwordError.textContent = '';
    }

    // Si ambos campos son válidos, el formulario se envía
    return true;
}



  
