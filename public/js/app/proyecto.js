/**
 * Created by Crismehol on 25/05/2017.
 */

// Estilos para el menú
function getURLParameter(name) {
    return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null
}

if(window.location.href.indexOf("employees") > -1) {
    $('#employees-link').addClass('active');
    $('#title').text('Employees');
}