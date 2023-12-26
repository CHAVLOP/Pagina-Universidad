
function activar_boton(){
    var campo = $('#title').val();
    if((campo!=null)&&(campo !=''))
    {
        $('#btnvalidar').attr('disabled',false);
    }
    else
    {
        $('#btnvalidar').attr('disabled',true);
    }
    var campo1 = $('#description').val();
    if((campo1!=null)&&(campo1 !=''))
    {
        $('#btnvalidar').attr('disabled',false);
    }
    else
    {
        $('#btnvalidar').attr('disabled',true);
    }

    $("#file").change(function(){
        $("#btnvalidar").prop("disabled", this.files.length == 0);
    });

    
    
}

