const canvas = document.getElementById('svg2');
const zoomInButton = document.getElementById('zoom-in');
const zoomOutButton = document.getElementById('zoom-out');
let currentScale = 1;
let isDragging = false;
let startX, startY;
let offsetX = 0;
let offsetY = 0;
const scaleFactor = 0.1; // Ajusta este valor para controlar la velocidad de desplazamiento

// Función para aplicar la transformación de zoom y panning al elemento SVG
function applyTransform() {
    canvas.style.transform = `scale(${currentScale}) translate(${offsetX}px, ${offsetY}px)`;
}

// Función para manejar el zoom-in
zoomInButton.addEventListener('click', () => {
    currentScale += 0.1;
    applyTransform();
});

// Función para manejar el zoom-out
zoomOutButton.addEventListener('click', () => {
    currentScale -= 0.1;
    applyTransform();
});

canvas.addEventListener('dblclick', () => {
    currentScale += 1; 
     applyTransform();
});

// Maneja el evento de scroll del mouse para el zoom
canvas.addEventListener('wheel', (event) => {
    if (event.deltaY > 0) {
        // Hacer zoom out cuando se desplaza hacia abajo
        currentScale -= 0.1;
    } else {
        // Hacer zoom in cuando se desplaza hacia arriba
        currentScale += 0.1;
    }
    applyTransform();
});

// Agregar un evento al hacer clic en el canvas
canvas.addEventListener('mousedown', (e) => {
    isDragging = true;
    startX = e.clientX;
    startY = e.clientY;
});

// Agregar un evento al soltar el clic
canvas.addEventListener('mouseup', (e) => {
    isDragging = false;
    offsetX += (e.clientX - startX) * scaleFactor;
    offsetY += (e.clientY - startY) * scaleFactor;
});

// Agregar un evento al mover el mouse
canvas.addEventListener('mousemove', (e) => {
    if (isDragging) {
        const dx = (e.clientX - startX) * scaleFactor;
        const dy = (e.clientY - startY) * scaleFactor;
        canvas.style.transform = `scale(${currentScale}) translate(${offsetX + dx}px, ${offsetY + dy}px)`;
    }
});




