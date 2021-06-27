$(document).ready(function () {
    $('#editableTable').SetEditable({
        columnsEd: "0,1,2,3",
        onEdit: function (columnsEd) {
            var empId = columnsEd[0].childNodes[1].innerHTML;
            var emppregunta = columnsEd[0].childNodes[5].innerHTML;
            var emprespuesta = columnsEd[0].childNodes[7].innerHTML;

            $.ajax({
                type: 'POST',
                url: "action.php",
                dataType: "json",
                data: { id: empId, pregunta: emppregunta, respuesta: emprespuesta, action: 'edit' },
                success: function (response) {
                    if (response.status) {
                    }
                }
            });
        },
        onBeforeDelete: function (columnsEd) {
            var empId = columnsEd[0].childNodes[1].innerHTML;
            $.ajax({
                type: 'POST',
                url: "preguntas.php",
                dataType: "json",
                data: { id: empId, action: 'delete' },
                success: function (response) {
                    if (response.status) {
                    }
                }
            });
        },
    });
});