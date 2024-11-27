// Función para abrir un modal
function abrirModal(modalId) {
    document.getElementById(modalId).showModal();
}

// ... código  modal CV

const btnAbrirDropModal = document.querySelector("#btn-abrir-dropdown");
const btnCerrarDropModal = document.querySelector("#btn-cerrar-dropdown");
const DropModal = document.querySelector("#modal_dropdown");

btnAbrirDropModal.addEventListener("click", () => abrirModal(DropModal.id));
btnCerrarDropModal.addEventListener("click", () => cerrarModal(DropModal.id));


const btnAbrirModal = document.querySelector("#btn-abrir-modal-mob");
const btnCerrarModal = document.querySelector("#btn-cerrar-modal-mob");
const Modal = document.querySelector("#modal");

btnAbrirModal.addEventListener("click", () => abrirModal(Modal.id));
btnCerrarModal.addEventListener("click", () => cerrarModal(Modal.id));

// Obtén el enlace y el modal (ajusta los selectores según tu HTML)
const enlaceNosotros = document.getElementById('btn-cerrar-dropdown');
const modal = document.getElementById('DropModal'); // Reemplaza 'tu-id-modal' por el ID de tu modal

// Agrega un event listener al enlace
enlaceNosotros.addEventListener('click', () => {
    // Oculta el modal (puedes usar display: none, opacity: 0, o cualquier otra técnica)
    modal.style.display = 'none';
});


