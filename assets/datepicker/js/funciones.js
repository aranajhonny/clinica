function buscar_paciente() {
    var cedula = $('#cedula').val();
    if (cedula == null) {
        alert('introduzca una cedula');
    }
    $.ajax({
        url: "?controller=pacientes&action=buscar&cedula=" + cedula,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
            $('[name="num_historia"]').val(data.num_historia);
            $('[name="nombre"]').val(data.primer_nombre);
            $('[name="apellido"]').val(data.primer_apellido);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("error")
        }
    });
}