/**
 * Created by Crismehol on 14/05/2017.
 */

function getFilteredEmployeesList(){
    var filter = $('#filter');
    var pagination = $('#pagination');
    var url = 'list';
    var parameters = false;
    if(filter.val().length != 0){
        if(!parameters){
            url += '?';
        }else{
            url += '&';
        }
        url += 'filter=' + filter.val();
        parameters = true;
    }
    if(pagination.val() != "" && pagination.val() != null){
        if(!parameters){
            url += '?';
        }else{
            url += '&';
        }
        url += 'pagination=' + pagination.val();
        parameters = true;
    }
    location.href = url;
}
function getOrderedEmployeesList(field, order){
    var filter = $('#filter');
    var pagination = $('#pagination');
    var url = 'list';
    var parameters = false;
    if(filter.val().length != 0){
        if(!parameters){
            url += '?';
        }else{
            url += '&';
        }
        url += 'filter=' + filter.val();
        parameters = true;
    }
    if(pagination.val() != "" && pagination.val() != null){
        if(!parameters){
            url += '?';
        }else{
            url += '&';
        }
        url += 'pagination=' + pagination.val();
        parameters = true;
    }
    if(order == 'asc' || order == null || order == undefined || order == ''){
        order = 'des';
    }else{
        order = 'asc';
    }
    if(!parameters){
        url += '?';
    }else{
        url += '&';
    }
    url += field + '=' + order;
    location.href = url;
}
function openModalToCreate(){
    changeAction('create');
    $('#name')
        .val('')
        .parent().addClass('is-empty');
    $('#surnames')
        .val('')
        .parent().addClass('is-empty');
    $('#dni')
        .val('')
        .parent().addClass('is-empty');
    $('#email')
        .val('')
        .parent().addClass('is-empty');
    $('#job')
        .val('')
        .parent().addClass('is-empty');
    $('#user')
        .val('')
        .parent().addClass('is-empty');
    $('#password')
        .val('')
        .parent().addClass('is-empty');

    $('#modalNewEmployee').modal('show');
}
function openModalToEdit(employee_id){
    changeAction('edit', employee_id);
    $.ajax({
        method: 'GET',
        url: HOST + API + EMPLOYEES + DETAILS + "/" + employee_id,
        success: function (data) {
            var employee = data['data'];
            $('#name')
                .val(employee['name'])
                .parent().removeClass('is-empty');
            $('#contact')
                .val(employee['contact'])
                .parent().removeClass('is-empty');
            $('#email')
                .val(employee['email'])
                .parent().removeClass('is-empty');
            $('#phone')
                .val(employee['phone'])
                .parent().removeClass('is-empty');
            $('#modalNewClient').modal('show');
        },
        error: function (datas){
            notificarError("Se ha producido un error. Inténtelo de nuevo");
        }
    })
}

function showClearSearch() {
    if(window.location.href.indexOf('pagination') !== -1 || window.location.href.indexOf('filter') !== -1){
        if($('#clear_search').hasClass( "hidden" )){
            $('#clear_search').removeClass( "hidden" );
        }
    }else{
        if(!$('#clear_search').hasClass( "hidden" )){
            $('#clear_search').addClass( "hidden" );
        }
    }
}