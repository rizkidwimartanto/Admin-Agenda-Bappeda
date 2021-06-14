const FlashData = $('.flash-data').data('flashdata');

if(FlashData) {
    Swal({
        'title': 'Data Agenda',
        'text': FlashData,
        'type': 'success'
    });
}

$(document).ready( function () {
    $('#table_id').DataTable();
} );
window.$ = window.jquery = require('./node_modules/jquery');
window.dt = require('./node_modules/datatables.net')();
window.$('#table_id').DataTable();