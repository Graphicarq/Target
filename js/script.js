// Función para abrir un modal
function abrirModal(modalId) {
  document.getElementById(modalId).showModal();
}

// Función para cerrar un modal
function cerrarModal(modalId) {
  document.getElementById(modalId).close();
}

// 'contador'
document.addEventListener('DOMContentLoaded', () => {
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('contador-start');

      }
    });
  }, { threshold: 1 });

  const elementosContador = document.querySelectorAll('.contador');

  elementosContador.forEach(elemento => observer.observe(elemento));
});


// Modal
const btnAbrirPrimerModal = document.querySelector("#btn-abrir-modal");
const btnCerrarPrimerModal = document.querySelector("#btn-cerrar-modal");
const primerModal = document.querySelector("#modal");

btnAbrirPrimerModal.addEventListener("click", () => abrirModal(primerModal.id));
btnCerrarPrimerModal.addEventListener("click", () => cerrarModal(primerModal.id));

// ... segundo modal 
const btnAbrirSegundoModal = document.querySelector("#btn-abrir-modale");
const btnCerrarSegundoModal = document.querySelector("#btn-cerrar-modale");
const SegundoModal = document.querySelector("#modale");

btnAbrirSegundoModal.addEventListener("click", () => abrirModal(SegundoModal.id));
btnCerrarSegundoModal.addEventListener("click", () => cerrarModal(SegundoModal.id));

window.addEventListener('scroll', animateOnScroll);

animateOnScroll();




