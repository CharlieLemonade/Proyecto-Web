const canvas = document.getElementById('svg2');
let currentScale = 1;
let isHandGrabbing = false;
let startX, startY;
let offsetX = 0;
let offsetY = 0;
const scaleFactor = 0.1;

function applyTransform() {
    canvas.style.transform = `scale(${currentScale}) translate(${offsetX}px, ${offsetY}px)`;
}

function handleTouchStart(e) {
    if (e.touches.length === 1) {
        isHandGrabbing = true;
        startX = e.touches[0].clientX;
        startY = e.touches[0].clientY;
    }
}

function handleTouchMove(e) {
    if (isHandGrabbing && e.touches.length === 1) {
        const dx = (e.touches[0].clientX - startX) * scaleFactor;
        const dy = (e.touches[0].clientY - startY) * scaleFactor;
        offsetX += dx;
        offsetY += dy;
        applyTransform();
        startX = e.touches[0].clientX;
        startY = e.touches[0].clientY;
    }
}

function handleTouchEnd() {
    isHandGrabbing = false;
}

// Puedes agregar más funciones según tus necesidades específicas para dispositivos móviles

// Agregar event listeners
canvas.addEventListener('touchstart', handleTouchStart);
canvas.addEventListener('touchmove', handleTouchMove);
canvas.addEventListener('touchend', handleTouchEnd);

// Resto del código...
