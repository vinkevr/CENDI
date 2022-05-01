document.addEventListener("DOMContentLoaded", () => {
  formulario();
  agregarEstados();
});

//funcion para ocultar y mostrar partes del formulario
let paso = 1;
function formulario() {
 
  const botones = document.querySelectorAll(".btn");

  botones.forEach((btn) => {
   
    btn.addEventListener("click", (e) => {
      //Seleccionamos el paso para cambiar seccion
      paso = e.target.dataset.paso;
      mostrarSeccion();
    });
  });
}
function mostrarSeccion() {
  const seccionMostrar = document.querySelector(`#paso-${paso}`);
  //btn a resaltar
  const btnActual = document.querySelector(".btnActual");
  //btn al que se le dio click
  const click = document.querySelector(`[data-paso="${paso}"]`);
  //Seleccionamos el que se mostraba y lo ocultamos
  const seccionAnt = document.querySelector(".mostrar");
  if (seccionAnt) {
      //ocultamos
    seccionAnt.classList.remove("mostrar");
    seccionAnt.classList.add("ocultar");
  }
  //Mostramos
  seccionMostrar.classList.add("mostrar");
  seccionMostrar.classList.remove("ocultar");

  //Resaltar btn
  btnActual.classList.remove("btnActual");
  click.classList.add("btnActual");
}
async function agregarEstados() {
  //Pedimos los estados
  const url = "/mexico";
  const respuesta = await fetch(url);
  const datos = await respuesta.json();
  //consulta a los municipios
  const urlMunicipios = "/mexico/municipios";
  const peticion = await fetch(urlMunicipios);
  const resultado = await peticion.json();
  //Seleccionamos los select
  const padres = document.querySelectorAll(".entidad");
  padres.forEach((padre) => {
    //Cada padre tendra los estados
    datos.forEach((estado) => {
      const opcion = document.createElement("OPTION");
      opcion.textContent = estado;
      opcion.value = estado
        .normalize("NFD")
        .replace(/[\u0300-\u036f]/g, "")
        .toLowerCase()
        .split(" ")
        .join("_");
      padre.appendChild(opcion);

    });
     //Aparecer los municipios
     padre.addEventListener("change", (e) =>
     colcocarMunicipios(resultado[e.target.value])
   );
  });

}
async function colcocarMunicipios(municipios) {
  //El padre es el contenedor de los option
  const padres = document.querySelectorAll(".municipio");

  padres.forEach((padre) => {
    //Limpiamos al padre
    padre.innerHTML = "<option disbaled>---Seleccione una opción---</option>";
    municipios.forEach((municipio) => {
      //Limpiamos al padre
      //se crea una etiqueta de option
      const opcion = document.createElement("OPTION");
      //de texto le añadimos el nombre del municipio
      opcion.textContent = municipio;

      //el valor que se envia a la db
      opcion.value = municipio.toLowerCase().split(" ").join("_");

      //Lo agregamos en el padre
      padre.appendChild(opcion);
    });
  });
}
