

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
    'rowsGroup': [1],
    "language": {
        "url": burl + "assets/plugins/DataTables/French.json"
    },
});

var urll = surl + 'admin/rdvs';

$('#table1').Tabledit({
    url: surl + 'admin/rdvsedit',
    editButton: true,
    deleteButton: true,
    hideIdentifier: true,
    columns: {
        identifier: [0, 'idrdv'],
        editable: [[3, 'dateretenu'],
            [4, 'statut', '{"1": "Non", "2": "Oui"}'],
        ]
    },
    // Executed when the ajax request is completed
    onDraw: function () {
        /*$('table tr td:nth-child(4) input').each(function () {
            $(this).datetimepicker({
                locale: "fr",
            });
        });*/
        $('table tr td:nth-child(4) input').each(function () {
            $(this).datetimepicker({
                locale: "fr",
            });
        });
    },
    onSuccess: function (data, textStatus, jqXHR) {
        console.log('onSuccess(data, textStatus, jqXHR)');
        console.log(data);
        console.log(textStatus);
        console.log(jqXHR);
        setTimeout(function () {
            window.location.href=urll;
        }, 10);

    },
    onFail: function (jqXHR, textStatus, errorThrown) {
        console.log('onFail(jqXHR, textStatus, errorThrown)');
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    },
    onAjax: function (action, serialize) {
        console.log('onAjax(action, serialize)');
        console.log(action);
        console.log(serialize);
    }
});

