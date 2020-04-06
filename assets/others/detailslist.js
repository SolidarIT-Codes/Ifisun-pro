var table = $('#table1').DataTable({

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



$('#table1').Tabledit({
    url: surl + 'secretaire/dossieredit',
    editButton: true,
    deleteButton: true,
    hideIdentifier: true,
    columns: {
        identifier: [0, 'idclientdossier'],
        editable: [[1, 'libelledossier', '{"1": "IMMOBILIER", "2": "CREDIT", "3": "FAMILLE", "4": "AFFAIRE"}'],
            [2, 'statut', '{"1": "Nouveau", "2": "En cours", "3": "Clôturer"}'],
            [4, 'dateprochainrdv'],
        ]
    },
    // Executed when the ajax request is completed
    onDraw: function () {
        /*$('table tr td:nth-child(4) input').each(function () {
            $(this).datetimepicker({
                locale: "fr",
            });
        });*/
        $('table tr td:nth-child(5) input').each(function () {
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
            window.location.href;
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

