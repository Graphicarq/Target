// Función para abrir modal
function abrirModal(modalId) {
  document.getElementById(modalId).showModal();
}

// Función para cerrar modal
function cerrarModal(modalId) {
  document.getElementById(modalId).close();
}

function cerrar() {
  let navbar = document.querySelector(".navbar-toggler");
  navbar.click();
}

// ... código  modal CV

const btnAbrirTercerModal = document.querySelector("#btn-abrir-modalcv");
const btnCerrarTercerModal = document.querySelector("#btn-cerrar-modalcv");
const TercerModal = document.querySelector("#modalcv");

btnAbrirTercerModal.addEventListener("click", () => abrirModal(TercerModal.id));
btnCerrarTercerModal.addEventListener("click", () => cerrarModal(TercerModal.id));

const btnAbrirCuartoModal = document.querySelector("#btn-abrir-modalcv2");
const btnCerrarCuartoModal = document.querySelector("#btn-cerrar-modalcv2");
const CuartoModal = document.querySelector("#modalcv");

btnAbrirCuartoModal.addEventListener("click", () => abrirModal(CuartoModal.id));
btnCerrarCuartoModal.addEventListener("click", () => cerrarModal(CuartoModal.id));

const modalDropdown = document.querySelector("#modal_dropdown");
const dropdownLinks = modalDropdown.querySelectorAll("#block");

dropdownLinks.forEach(link => {
    link.addEventListener("click", () => {
        cerrarModal(modalDropdown.id); 
    });
});

