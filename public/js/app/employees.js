/**
 * Created by Crismehol on 24/05/2017.
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
function openModalToCreate(){
    changeAction('create');
    $('#name')
        .val('')
        .parent().addClass('is-empty');
    $('#surname')
        .val('')
        .parent().addClass('is-empty');
    $('#dni')
        .val('')
        .parent().addClass('is-empty');
    $('#email')
        .val('')
        .parent().addClass('is-empty');
    $('#user')
        .val('')
        .parent().addClass('is-empty');
    $('#job')
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
        url: HOST + API + DETAILS + EMPLOYEES + "/" + employee_id,
        success: function (data) {
            // var employee = data['data'];
            $('#name')
                .val(data['name'])
                .parent().removeClass('is-empty');
            $('#surname')
                .val(data['surname'])
                .parent().removeClass('is-empty');
            $('#dni')
                .val(data['dni'])
                .parent().removeClass('is-empty');
            $('#email')
                .val(data['email'])
                .parent().removeClass('is-empty');
            $('#job')
                .val(data['job'])
                .parent().removeClass('is-empty');
            // $('#user')
            //     .val(data['user'])
            //     .parent().removeClass('is-empty');
            // $('#password')
            //     .val(data['password'])
            //     .parent().removeClass('is-empty');
            $('#modalNewEmployee').modal('show');
        }
        // error: function (datas){
        //     notificarError("Se ha producido un error. Inténtelo de nuevo");
        // }
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
