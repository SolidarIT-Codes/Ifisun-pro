

jQuery('#table1').dataTable({

    "retrieve": true,
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": true,
    "pageLength": 100,
    "bFilter": false,
    "language": {
        "url": burl + "assets/plugins/DataTables/French.json"
    },
});