console.log('LLEGUE A LOAD MASIVE');
// CREATE MASIVA JS
const fileInput = document.getElementById("fileInput");
const fileName = document.getElementById("fileName");
const clearFileBtn = document.getElementById("clearFileBtn");

// Mostrar nombre del archivo y activar botón eliminar
fileInput.addEventListener("change", () => {
  if (fileInput.files.length > 0) {
    fileName.value = fileInput.files[0].name;
    clearFileBtn.classList.remove("d-none");
  } else {
    fileName.value = "Ningún archivo seleccionado";
    clearFileBtn.classList.add("d-none");
  }
});
fileName.addEventListener("click", () => {
  fileInput.click(); 
})
// Limpiar archivo seleccionado
clearFileBtn.addEventListener("click", () => {
  fileInput.value = "";
  fileName.value = "Ningún archivo seleccionado";
  clearFileBtn.classList.add("d-none");
});