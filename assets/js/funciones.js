function buscar_paciente() {
    var cedula = $('#cedula').val();
    if ($("#cedula").val() === "") {
        alert('Introduzca un numero de cedula');
    }
    $.ajax({
        url: "?controller=pacientes&action=buscar&cedula=" + cedula,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
            $('[name="nro_historia"]').val(data.nro_historia);
            $('[name="nombre"]').val(data.primer_nom);
            $('[name="apellido"]').val(data.primer_ape);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("error" + errorThrown)
        }
    });
}

function guardar_cita() {
    var cedula = $('#cedula').val();
    if ($("#cedula").val() === "") {
        alert('Introduzca un numero de cedula');
    }
    $.ajax({
        url: "?controller=citas&action=guardar",
        type: "POST",
        data: $('#form_cita').serialize(),
        dataType: "JSON",
        success: function(data) {
            alert('Cita guardada exitosamente');
            location.reload();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("error" + errorThrown)
        }
    });
}