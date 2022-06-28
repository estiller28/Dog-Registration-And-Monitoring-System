
$(document).ready( function () {
   myTable =  $('#myTable').DataTable({
        "responsive": true, "autoWidth": true, "scrollX": false, "pageLength": 10, "lengthChange": false,
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

        // language:{
        //     search: "_INPUT_",
        //     searchPlaceholder: "Search..."
        // }
    });

    $('#customSearch').keyup(function (){
        myTable.search($(this).val()).draw();
    })


} );
