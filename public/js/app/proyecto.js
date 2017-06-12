/**
 * Created by Crismehol on 25/05/2017.
 */

// Estilos para el menú
if(window.location.href.indexOf("dashboard") > -1) {
    $('#dashboard-link').addClass('active launcher');
    $('#title').text('Dashboard');
}

if(window.location.href.indexOf("employees") > -1) {
    $('#employees-link').addClass('active launcher');
    $('#title').text('Empleados');
}
if(window.location.href.indexOf("customers") > -1) {
    $('#customers-link').addClass('active launcher');
    $('#title').text('Clientes');
}