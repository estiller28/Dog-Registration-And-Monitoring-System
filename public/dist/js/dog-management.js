$(document).ready( function () {
    renderTable();
} );

function renderTable(){
    myTable =  $('#dogsTable').DataTable({
        "responsive": false, "autoWidth": true, "scrollX": true, "pageLength": 10, "lengthChange": false,
        "search": {
            "caseInsensitive": true,
        },
        "": false,
        "columnDefs": [{
            "className": "dt-left",
            "targets": "_all"
        }
        ],
        "dom": "lrtip" //t

    });

    $('#customSearch').keyup(function (){
        myTable.search($(this).val()).draw();
    })
}

document.addEventListener("DOMContentLoaded", () => {
    Livewire.hook('message.received', (message, component) => {
        $('#dogsTable').DataTable().destroy();
    })

    Livewire.hook('message.processed', (message, component) => {
        renderTable();
    })
});
