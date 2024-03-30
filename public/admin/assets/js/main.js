$(document).ready(function() {
    $('#myTable').DataTable({
        buttons: [
            // 'copy', 'excel', 'pdf'
        ]
    });
});
// $(document).ready(function() {
    $('#tableCos').DataTable({
        // dom: 'Bfrtip',
        buttons: [
            'colvis',
            'excel',
            'print'
        ]
    });
// });
