
$(document).ready( function () {
    $('#myTable').DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": true, "scrollX": false, "pageLength": 10,
        "search": {
            "caseInsensitive": true,
        },
        "": false,
    });
} );
