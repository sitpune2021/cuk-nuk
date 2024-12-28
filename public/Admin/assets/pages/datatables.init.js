$(document).ready(function()
{
    $("#datatable").DataTable(),
    $("#datatable-buttons").DataTable({
        lengthChange:!1,
        pageLength: 50,
        buttons:["copy","excel","print"]
        
    }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)")});