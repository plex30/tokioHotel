var fechaEmision = moment(document.getElementById('fecha_emision').value, 'YYYY/MM/DD');
var fechaExpiracion = moment(document.getElementById('fecha_expiracion').value, 'YYYY/MM/DD');

var diasDiferencia = fechaExpiracion.diff(fechaEmision, 'days');
console.log(diasDiferencia)