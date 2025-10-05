console.log('LLEGUE A CREAR');

$('#FISUCURSALID, #FIESTATUS, #FIROLID').select2({
  theme: 'bootstrap-5',
  placeholder: "Seleccione una sucursal",
  width: '100%',
  dropdownAutoWidth: true,
  minimumResultsForSearch: 10 // activa búsqueda si hay más de 10 opciones
});