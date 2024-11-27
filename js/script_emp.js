// Función para abrir un modal
function abrirModal(modalId) {
  document.getElementById(modalId).showModal();
}

// Función para cerrar un modal
function cerrarModal(modalId) {
  document.getElementById(modalId).close();
}

function cerrar() {
  let navbar = document.querySelector(".navbar-toggler");
  navbar.click();
}

// ... código  modal CV

const btnAbrirEmpModal = document.querySelector("#btn-abrir-modalcv3");
const btnCerrarEmpModal = document.querySelector("#btn-cerrar-modalcv3");
const EmpModal = document.querySelector("#modalcv3");

btnAbrirEmpModal.addEventListener("click", () => abrirModal(EmpModal.id));
btnCerrarEmpModal.addEventListener("click", () => cerrarModal(EmpModal.id));


