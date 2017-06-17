/**
 * Created by Crismehol on 24/05/2017.
 */

function getFilteredCustomersList(){
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
    $('#phone_number')
        .val('')
        .parent().addClass('is-empty');
    $('#modalNewCustomer').modal('show');
}
function openModalToEdit(customer_id){
    changeAction('edit', customer_id);
    $.ajax({
        method: 'GET',
        url: HOST + API + DETAILS + CUSTOMERS + "/" + customer_id,
        success: function (data) {
            var customer = data['data'];
            $('#name')
                .val(customer['name'])
                .parent().removeClass('is-empty');
            $('#surname')
                .val(customer['surname'])
                .parent().removeClass('is-empty');
            $('#dni')
                .val(customer['dni'])
                .parent().removeClass('is-empty');
            $('#email')
                .val(customer['email'])
                .parent().removeClass('is-empty');
            $('#phone_number')
                .val(customer['phone_number'])
                .parent().removeClass('is-empty');
            $('#modalNewCustomer').modal('show');
        }
        // error: function (datas){
        //     notificarError("Se ha producido un error. Inténtelo de nuevo");
        // }
    })
}

function openModalToCreateRecord(customer_id){
    changeAction('editRecords', customer_id);
    $.ajax({
        method: 'GET',
        url: HOST + API + DETAILS + CUSTOMERS + "/" + customer_id,
        success: function (data) {
            var customer = data['data'];
            $('#diopters_right')
                .val('')
                .parent().addClass('is-empty');
            $('#diopters_left')
                .val('')
                .parent().addClass('is-empty');
            $('#astigmatism_right')
                .val('')
                .parent().addClass('is-empty');
            $('#astigmatism_left')
                .val('')
                .parent().addClass('is-empty');
            $('#axis_right')
                .val('')
                .parent().addClass('is-empty');
            $('#axis_left')
                .val('')
                .parent().addClass('is-empty');
            $('#description')
                .val('')
                .parent().addClass('is-empty');
            $('#modalNewRecords').modal('show');
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
