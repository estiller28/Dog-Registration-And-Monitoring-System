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


window.addEventListener('swal:invalid', event => {
    swal.fire({
        title: event.detail.title,
        text: event.detail.text,
        icon: event.detail.type,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Okay, got it!'

    }) .then((result) => {
        if (result.isConfirmed) {
            window.livewire.emit('redirectToCreateUser');
        }
    });
});



window.addEventListener('swal:confirm', event => {
    swal.fire({
        title: event.detail.title,
        text: event.detail.text,
        icon: event.detail.type,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'

    }) .then((result) => {
        if (result.isConfirmed) {

            window.livewire.emit('delete', event.detail.id);
            // Swal.fire({
            //     title: event.detail.title,
            //     text: event.detail.text,
            //     icon: event.detail.type,
            // })
        }
    });
});
